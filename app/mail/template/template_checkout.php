<?php 

$content = "Hello Team,

    <strong>".$borrower."</strong> checked out the item/s and it was approved by the checker. Kindly see the details below:";

    //Standard Template
    require_once('../../mail/template/general_template.php');

$mail->send();

?>