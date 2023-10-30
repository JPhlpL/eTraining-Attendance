<?php 

$body = "<img alt='PHPMailer' src='cid:smtp-header'>"."<br>"."<br>".
"<pre style=\"font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;\">".


    $contentApprover."

                Transaction ID No: <strong>".$fetch_row['transactID']."</strong>

                Borrower: <strong>".$fetch_row['borrowerName']."</strong>

                Borrower Type: <strong>".$borrowType."</strong>

                            <table border='1' style=\"font-family:Verdana, Arial, Helvetica, sans-serif; border-color:black; border-collapse: collapse; text-align: center; \">
                                <tr style=' background:black; color:white; font-size:15px; '>
                                    <th width='300'>Item Name</th>
                                    <th width='200'>Control Number</th>
                                    <th width='200'>Quantity</th>
                                </tr>
                        ";

                $list_sql = "SELECT a.IT_TRANSACTION_ID transactID, a.IT_TRANSACTION_CODE_HASHED hashedCode, 
                                b.IT_REQUEST_ITEM_QUANTITY requestItemQty, b.IT_REQUEST_ITEM_NAME itemName, 
                                    b.IT_REQUEST_CONTROL_NUMBER controlNumber
                                        FROM tblrequest_form a
                                            LEFT JOIN tblrequest_item b
                                                ON a.IT_TRANSACTION_ID = b.IT_REQUEST_TRANSACTION_ID
                                            WHERE a.IT_TRANSACTION_ID = '".$_POST['IT_TRANSACTION_ID']."' OR a.IT_TRANSACTION_CODE_HASHED = '".$_POST['IT_TRANSACTION_CODE_HASHED']."'";

                        if($result = mysqli_query($link, $list_sql)){
                            if(mysqli_num_rows($result) > 0 ){
                                while($listRow = mysqli_fetch_array($result)) {
                $body .= "  <tr>
                                <td>".$listRow['itemName']."</td>
                                <td>".$listRow['controlNumber']."  </td>
                                <td>".$listRow['requestItemQty']."</td>
                            </tr>"; 
                            }
                        }
                    }
                $body2 = " </table>
        <strong> Duration </strong>:

            From: <strong>".date('F j, Y',strtotime($fetch_row['borrowFrom']))."</strong>          
            
            To: <strong>".date('F j, Y',strtotime($fetch_row['borrowTo']))."</strong>

        <strong> Other details </strong>:

            Approver Name: <strong>".$approverName."</strong>

            Approver Status: <strong>".$approverStatus."</strong>

            Purpose: <strong>".$purpose."</strong>

            Remarks: <strong>".$remarks."</strong>

        Thank you!

        Click the link provided below to access the system:

        <strong>Login:</strong><a href='$login_url'>".$login_url."</a>

        <strong>Account Registration:</strong><a href='$reg_url'>".$reg_url."</a>

        Note: ".$local_message."


</pre>".

"<img alt='PHPMailer' src='cid:smtp-header'>";

//! mail Body
$mail->Body =  $body. $body2;

?>