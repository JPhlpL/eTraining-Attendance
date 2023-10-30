<?php 

$content = "Hello ".$borrower.",

    The item is now <strong>returned</strong>. Kindly see the details below:
    ";

    //Standard Template
    require_once('../../mail/template/itemreturn_template.php');

$mail->send(); // send to one person
?>