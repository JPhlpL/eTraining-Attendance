<?php 

$latest_msg_sql = "SELECT * FROM tblsupportmail WHERE INQUIRY_NAME = '".$_SESSION['USER_NAME']."' ORDER BY INQUIRY_ID DESC LIMIT 1";
$fetch_last_msg = mysqli_query($link, $latest_msg_sql);
$fetch_row = mysqli_fetch_array($fetch_last_msg);

$mail->Subject = $fetch_row['INQUIRY_SUBJECT']; // Subject
$mail->addAddress("philip.lominoque.a5d@ap.denso.com"); // To send  //$requestDeptEmail
$mail->AddCC('it.support.dnph.a1b@ap.denso.com',"cc1");
$mail->AddCC($fetch_row['INQUIRY_EMAIL'],"cc2");
$mail->Body = 
"<pre style=\"font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;\">".

"Hello Team,

Kindly see the information below for the concern of the said associate

Name: 

<strong>".$fetch_row['INQUIRY_NAME']."</strong>

Message: 

".$fetch_row['INQUIRY_MSG']."

Thank you!"

."</pre>";
$mail->send(); // send to one person

?>