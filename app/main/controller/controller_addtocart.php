<?php 

//! Email Setup
require_once '../../mail/mailsys.php';

session_start();

$it_transaction_id = mysqli_real_escape_string($link,$_POST['IT_TRANSACTION_ID']);
$it_borrower_name = mysqli_real_escape_string($link,$_POST['IT_BORROWER_NAME']);
$it_date_from = mysqli_real_escape_string($link,$_POST['IT_DATE_FROM']);
$it_date_to = mysqli_real_escape_string($link,$_POST['IT_DATE_TO']);
$it_borrow_type = mysqli_real_escape_string($link,$_POST['IT_BORROW_TYPE']);
$it_remarks = str_replace(array('<p>','</p>'),array('',''),$_POST['IT_REMARKS']);
$it_purpose = str_replace(array('<p>','</p>'),array('',''),$_POST['IT_PURPOSE']);
$it_form_approver = mysqli_real_escape_string($link,$_POST['IT_FORM_APPROVER']);
$it_approver_email = mysqli_real_escape_string($link,$_POST['IT_APPROVER_EMAIL']);
$it_transaction_code_hashed = strtolower(substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 10)).strtoupper(substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 10))."&==".strtolower(substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 10)).strtoupper(substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 10)); 

if($it_borrow_type == 'External Bring In and Out') {
    //For Actual
   $insertForm_sql = "INSERT INTO tblrequest_form(IT_TRANSACTION_ID, IT_BORROWER_NAME, IT_DATE_FROM, IT_DATE_TO, IT_REMARKS, IT_PURPOSE, IT_STATUS, IT_BORROW_TYPE, IT_TRANSACTION_CODE_HASHED, IT_FORM_APPROVER, IT_APPROVER_EMAIL) 
VALUES('$it_transaction_id', '$it_borrower_name', '$it_date_from', '$it_date_to','$it_remarks', '$it_purpose','FOR APPROVAL','$it_borrow_type','$it_transaction_code_hashed','$it_form_approver','$it_approver_email')";
   //For History
   $insertForm_history_sql = "INSERT INTO tblrequest_form_history(IT_TRANSACTION_ID, IT_BORROWER_NAME, IT_DATE_FROM, IT_DATE_TO, IT_REMARKS, IT_PURPOSE, IT_STATUS, IT_BORROW_TYPE, IT_TRANSACTION_CODE_HASHED, IT_FORM_APPROVER, IT_APPROVER_EMAIL) 
VALUES('$it_transaction_id', '$it_borrower_name', '$it_date_from', '$it_date_to','$it_remarks', '$it_purpose','FOR APPROVAL','$it_borrow_type','$it_transaction_code_hashed','$it_form_approver','$it_approver_email')";
} else{
    //For Actual
    $insertForm_sql = "INSERT INTO tblrequest_form(IT_TRANSACTION_ID, IT_BORROWER_NAME, IT_DATE_FROM, IT_DATE_TO, IT_REMARKS, IT_PURPOSE, IT_BORROW_TYPE, IT_TRANSACTION_CODE_HASHED, IT_FORM_APPROVER, IT_APPROVER_EMAIL) 
VALUES('$it_transaction_id', '$it_borrower_name', '$it_date_from', '$it_date_to','$it_remarks', '$it_purpose','$it_borrow_type','$it_transaction_code_hashed','$it_form_approver','$it_approver_email')";
   //For History
    $insertForm_history_sql = "INSERT INTO tblrequest_form_history(IT_TRANSACTION_ID, IT_BORROWER_NAME, IT_DATE_FROM, IT_DATE_TO, IT_REMARKS, IT_PURPOSE, IT_BORROW_TYPE, IT_TRANSACTION_CODE_HASHED, IT_FORM_APPROVER, IT_APPROVER_EMAIL) 
VALUES('$it_transaction_id', '$it_borrower_name', '$it_date_from', '$it_date_to','$it_remarks', '$it_purpose','$it_borrow_type','$it_transaction_code_hashed','$it_form_approver','$it_approver_email')";
}

//For Actual
mysqli_query($link,$insertForm_sql);
//For History
mysqli_query($link,$insertForm_history_sql);

if(isset($it_transaction_id))
{
    foreach ($_SESSION["cart_item"] as $item){
        $item_name = $item['IT_ITEM_NAME'];
        $item_control_number = $item['IT_ITEM_CONTROL_NUMBER'];
        $item_quantity = $item['quantity'];

        //? Add another row for history quantity

        //? Actual
        $list_sql = "INSERT INTO tblrequest_item(IT_REQUEST_TRANSACTION_ID, IT_REQUEST_ITEM_NAME, IT_REQUEST_CONTROL_NUMBER, IT_REQUEST_ITEM_QUANTITY_LOG, IT_REQUEST_ITEM_QUANTITY, IT_REQUEST_ITEM_REMARKS) 
                    VALUES('$it_transaction_id','$item_name','$item_control_number','$item_quantity','$item_quantity','none')";  
        mysqli_query($link, $list_sql);  

        include('../../classes/insertFormListHistory.php');

    }
}

    // Getting Transaction
    $selectCurrentRecord = "SELECT a.IT_TRANSACTION_ID transactID, a.IT_TRANSACTION_CODE_HASHED transactCode, b.IT_REQUEST_ITEM_QUANTITY requestItemQty, 
    c.IT_ITEM_QUANTITY inventoryItemQty, c.IT_ITEM_CONTROL_NUMBER inventoryControlNum
        FROM tblrequest_form a
            LEFT JOIN tblrequest_item b
                ON a.IT_TRANSACTION_ID = b.IT_REQUEST_TRANSACTION_ID
            RIGHT JOIN tblinventory c
                ON  b.IT_REQUEST_CONTROL_NUMBER = c.IT_ITEM_CONTROL_NUMBER
            WHERE a.IT_TRANSACTION_CODE_HASHED = '$it_transaction_code_hashed'";


            //Select Currrent Data in a row
            $sql = mysqli_query($link,$selectCurrentRecord);

            // Updating each row
            $row = mysqli_fetch_array($sql);

            if($result = mysqli_query($link, $selectCurrentRecord)){

                if(mysqli_num_rows($result) > 0 ){

                    while($row = mysqli_fetch_array($result)){

                        //! Create query if blank current quantity
                        if(!empty($row['requestItemQty'])){

                            // Create a Script that minus the current - request 
                            mysqli_query($link,"UPDATE tblinventory set IT_ITEM_QUANTITY = IT_ITEM_QUANTITY - '".$row['requestItemQty']."', 
                                                    IT_ITEM_STATUS = CASE
                                                        WHEN IT_ITEM_QUANTITY <= 0 THEN 'UNAVAILABLE'
                                                        WHEN IT_ITEM_QUANTITY > 0 THEN 'AVAILABLE'
                                                        ELSE IT_ITEM_QUANTITY
                                                        END
                                                    WHERE IT_ITEM_CONTROL_NUMBER = '".$row['inventoryControlNum']."' AND IT_ITEM_NAME != 'OTHERS'");
                            
                            //! Proceed with other process and including history
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
require_once('../../mail/content/smtp_systemnotif.php');

 // For Email Body
 require_once('../../mail/template/template_addtocart.php');

 
mysqli_query($link, "DELETE FROM tblrequest_pending WHERE REQ_USER = '".$_SESSION['USER_ID']."'");

unset($_SESSION['cart_item']);

mysqli_close($link);
?>