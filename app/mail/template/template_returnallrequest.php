<?php 

$content = "Hello ".$borrower.",

    All items are now returned <strong>approved</strong>. Kindly see the details below:
    ";

    //Standard Template
    require_once('../../mail/template/general_template.php');

$mail->send(); // send to one person
?>