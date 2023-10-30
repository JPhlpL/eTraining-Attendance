<?php 
       
// Email Query
require_once ('../../mail/content/smtp_query_email.php');

$mail->Subject = "System Notification - Transaction ID:".$fetch_row['transactID']." Item Reservation System"; // Subject
$mail->addAddress('it.support.dnph.a1b@ap.denso.com'); // To send  //$requestDeptEmail
$mail->AddCC($fetch_row['borrowerEmail'],"cc1");

?>