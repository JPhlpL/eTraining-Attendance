<?php 

$body = "<img alt='PHPMailer' src='cid:smtp-header'>"."<br>"."<br>".
"<pre style=\"font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;\">".


    $content."
            Control No: <strong>".$fetch_row['transactID']."</strong>

            Borrower: <strong>".$fetch_row['borrowerName']."</strong>
                <table border='1' style=\"font-family:Verdana, Arial, Helvetica, sans-serif; border-color:black; border-collapse: collapse; text-align: center; \">
                    <tr style=' background:black; color:white; font-size:15px; '>
                        <th width='300'>Item Name</th>
                        <th width='200'>Control Number</th>
                        <th width='200'>Pending Qty</th>
                        <th width='200'>Date Time Returned</th>
                    </tr>
            ";

    $list_sql = "SELECT a.IT_TRANSACTION_ID transactID, a.IT_TRANSACTION_CODE_HASHED hashedCode, 
                    b.IT_REQUEST_ITEM_QUANTITY requestItemQty, b.IT_REQUEST_ITEM_NAME itemName, 
                        b.IT_REQUEST_CONTROL_NUMBER controlNumber, b.IT_REQUEST_ITEM_DATETIME_RETURNED datetime_returned
                            FROM tblrequest_form a
                                LEFT JOIN tblrequest_item b
                                    ON a.IT_TRANSACTION_ID = b.IT_REQUEST_TRANSACTION_ID
                                WHERE a.IT_TRANSACTION_ID = '".$_POST['IT_REQUEST_TRANSACTION_ID']."' AND b.IT_REQUEST_CONTROL_NUMBER = '".$_POST['IT_REQUEST_CONTROL_NUMBER']."'";

            if($result = mysqli_query($link, $list_sql)){
                if(mysqli_num_rows($result) > 0 ){
                    while($listRow = mysqli_fetch_array($result)) {
    $body .= "  <tr>
                    <td>".$listRow['itemName']."</td>
                    <td>".$listRow['controlNumber']."  </td>
                    <td>".$listRow['requestItemQty']."</td>
                    <td>".date('m d Y h:i A',strtotime($listRow['datetime_returned']))."</td>
                </tr>"; 
                }
                mysqli_free_result($result);
            }
            else { 
            return false; 
            }
        }
        else{ 
        echo "ERROR: Could not able to execute $list_sql. " . mysqli_error($link); 
    }

    $body2 = " </table>
            From: <strong>".date('F j, Y',strtotime($fetch_row['borrowFrom']))."</strong>          
            
            To: <strong>".date('F j, Y',strtotime($fetch_row['borrowTo']))."</strong>
            
        Thank you!


        Click the link provided below for the access of the system:

        <strong> Login: </strong> <a href='$login_url'>".$login_url."</a>

        <strong> Account Registration: </strong> <a href='$reg_url'>".$reg_url."</a>

        Note: ".$local_message."


</pre>".

"<img alt='PHPMailer' src='cid:smtp-header'>";

//! mail Body
$mail->Body =  $body. $body2;

?>