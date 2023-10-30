<?php 

$content = "Hello Team,

    <strong>".$borrower."</strong> checked in the item/s. Please advice the user that he/she may now proceed to return the items. 
    
    Kindly see the details below:";

    //Standard Template
    require_once('../../mail/template/general_template.php');

$mail->send();

?>