<?php 

$content = "Hello ".$borrower.",

    Your request is <strong>declined</strong> by ISD.

    Reason: 
            
        <strong>".$_POST['IT_DECLINE_REASON']."</strong>
    
    Kindly see the details below:
    ";

    //Standard Template
    require_once('../../mail/template/general_template.php');

$mail->send(); // send to one person
?>