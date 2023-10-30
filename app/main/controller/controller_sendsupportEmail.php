<?php


//! Email Setup (NO NEED CONFIG)
require_once '../../mail/mailsys.php';

session_start();

$name = mysqli_real_escape_string($link,$_POST['name']);
$email = mysqli_real_escape_string($link,$_POST['email']);
$subject = mysqli_real_escape_string($link,$_POST['subject']);
$messageContent = mysqli_real_escape_string($link,$_POST['messageContent']);

$insert_sql = "INSERT INTO tblsupportmail (INQUIRY_NAME, INQUIRY_EMAIL, INQUIRY_SUBJECT, INQUIRY_MSG)
        VALUES ('" . $name . "', '" . $email . "', '" . $subject . "','" . $messageContent . "' )";

mysqli_query($link, $insert_sql); 

require_once '../../mail/content/smtp_support.php';

mysqli_close($link);
?>