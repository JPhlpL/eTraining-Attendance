<?php 

$content = "Hello Team,

    There is a request coming from an associate. Kindly see the details below:";

    //Standard Template
    require_once('../../mail/template/general_template.php');

$mail->send();

$mail->ClearAllRecipients(); // Remove previous recipients

    //if external
    if($borrowType == 'External Bring In and Out')
    {
        //For Email Send Request
        require_once('../../mail/content/smtp_systemnotif_approver.php');
        
        $contentApprover = "Hello ".$approverName.",

            You have pending approval request from your associate. Kindly see the details below:";

        //Standard Template
        require_once('../../mail/template/general_template_approver.php');

        $mail->send();

    }
?>