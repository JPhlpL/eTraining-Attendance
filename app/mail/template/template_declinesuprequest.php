<?php 

// For Applicant
$content = "Hello ".$borrower.",

    Your request is <strong>declined</strong> by your approver. Kindly see the details below:";

    //Standard Template
    require_once('../../mail/template/general_template.php');

$mail->send();

$mail->ClearAllRecipients(); // Remove previous recipients

 
//For Approver
require_once('../../mail/content/smtp_systemnotif_approver.php');

$contentApprover = "Hello ".$approverName.",

    You <strong>declined</strong> the request of the associate. Kindly see the details below:";

    //Standard Template
    require_once('../../mail/template/general_template_approver.php');

$mail->send();

    
?>