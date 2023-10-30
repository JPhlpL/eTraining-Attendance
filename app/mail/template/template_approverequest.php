<?php 

$content = "Hello ".$borrower.",

    Your request is now <strong>approved</strong> by the ISD. You may now kindly get the items in the description below:
    ";

    //Standard Template
    require_once('../../mail/template/general_template.php');

$mail->send(); // send to one person
?>