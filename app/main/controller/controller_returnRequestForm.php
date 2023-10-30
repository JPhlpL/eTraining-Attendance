<?php

//! Email Setup
require_once '../../mail/mailsys.php';

session_start();

//! Approve Request

$selectCurrentRecord = "SELECT a.IT_TRANSACTION_ID transactID, a.IT_TRANSACTION_CODE_HASHED transactCode, b.IT_REQUEST_ITEM_QUANTITY requestItemQty, 
                                b.IT_REQUEST_TRANSACTION_ID requestTransactID, b.IT_REQUEST_ITEM_STATUS requestItemStatus, b.IT_REQUEST_ITEM_RETURNED_STATUS requestStatusItem, b.IT_REQUEST_CONTROL_NUMBER requestControlNum,
                                 c.IT_ITEM_QUANTITY inventoryItemQty, c.IT_ITEM_CONTROL_NUMBER inventoryControlNum
                                FROM tblrequest_form a
                                    LEFT JOIN tblrequest_item b
                                        ON a.IT_TRANSACTION_ID = b.IT_REQUEST_TRANSACTION_ID
                                    RIGHT JOIN tblinventory c
                                        ON  b.IT_REQUEST_CONTROL_NUMBER = c.IT_ITEM_CONTROL_NUMBER
                                    WHERE a.IT_TRANSACTION_CODE_HASHED = '".$_POST['IT_TRANSACTION_CODE_HASHED']."' AND b.IT_REQUEST_ITEM_STATUS = 'BORROWED'";
//Select Currrent Data in a row
$sql = mysqli_query($link,$selectCurrentRecord);

//Update Record to Borrow
mysqli_query($link,"UPDATE tblrequest_form requestForm 
                    SET requestForm.IT_STATUS='RETURNED', 
                        requestForm.IT_DATETIME_RETURNED = NOW()
                    WHERE requestForm.IT_TRANSACTION_CODE_HASHED='" . $_POST['IT_TRANSACTION_CODE_HASHED'] . "'");

require_once ('../../classes/insertRequestFormHistory.php');

    // Updating each row
    $row = mysqli_fetch_array($sql);

        if($result = mysqli_query($link, $selectCurrentRecord)){

            if(mysqli_num_rows($result) > 0 ){

                while($row = mysqli_fetch_array($result)){

                    //! Create query if blank current quantity
                    if(!empty($row['requestItemQty'])){

                            // Increment in inventory
                            mysqli_query($link,"UPDATE  tblinventory a 
                            JOIN tblrequest_item b
                            ON a.IT_ITEM_CONTROL_NUMBER = b.IT_REQUEST_CONTROL_NUMBER
                            SET a.IT_ITEM_QUANTITY = a.IT_ITEM_QUANTITY + '".$row['requestItemQty']."',
                                a.IT_ITEM_STATUS = CASE
                                        WHEN a.IT_ITEM_QUANTITY <= 0 THEN 'UNAVAILABLE'
                                        WHEN a.IT_ITEM_QUANTITY >= 1 THEN 'AVAILABLE'
                                    ELSE a.IT_ITEM_QUANTITY
                                    END,
                                b.IT_REQUEST_ITEM_QUANTITY = 0,
                                b.IT_REQUEST_ITEM_STATUS = 'RETURNED',
                                b.IT_REQUEST_ITEM_DATETIME_RETURNED = NOW()
                            WHERE b.IT_REQUEST_CONTROL_NUMBER='" . $row['inventoryControlNum'] . "'");


                            include('../../classes/insertFormListHistoryReturn.php');

                            include('../../classes/insertInventoryItemHistory.php');
                        } 
                        else{
                            // Create a Script that minus the current - request 
                            mysqli_close($link);
                        }


                }
                mysqli_free_result($result);
            }
            else { 
                return false; 
            }
        }
        else{ 
            echo "ERROR: Could not able to execute $selectCurrentRecord. " . mysqli_error($link); 
        }

//For Email Send Request
require_once ('../../mail/content/smtp_systemnotif.php');

// For Email Body
require_once('../../mail/template/template_returnallrequest.php');

mysqli_close($link);
?>