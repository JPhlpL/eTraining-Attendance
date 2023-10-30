<?php 

// For Applicant
$content = "Hello ".$borrower.",

    Your request is now <strong>approved</strong> by your approver. ISD will providing the details below:";

    //Standard Template
    require_once('../../mail/template/general_template.php');

$mail->send();

$mail->ClearAllRecipients(); // Remove previous recipients

 
//For Approver
require_once('../../mail/content/smtp_systemnotif_approver.php');

$contentApprover = "Hello ".$approverName.",

    You <strong>approved</strong> the request of the associate. ISD will providing the details below:";

    //Standard Template
    require_once('../../mail/template/general_template_approver.php');

$mail->send();

    
?>