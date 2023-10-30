<?php 

// Email Query
require_once ('../../mail/content/smtp_query_email.php');

$mail->Subject = "APPROVAL REQUIRED: DNPH IT Related Reservation System [Transaction ID:".$fetch_row['transactID']."]"; // Subject
$mail->addAddress($approverEmail); // To send  //$requestDeptEmail
$mail->AddCC('it.support.dnph.a1b@ap.denso.com',"cc1");

?>