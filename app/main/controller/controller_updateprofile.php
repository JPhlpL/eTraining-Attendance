<?php

session_start();
require_once '../../mail/mailsys.php';
require_once '../../config.php';
require_once '../../classes/generateHash.php';

$Employee_num = $_SESSION['USER_ID'];

$Name = mysqli_real_escape_string($link,$_POST['Name']);
$gender = mysqli_real_escape_string($link,$_POST['gender']);
$Email = mysqli_real_escape_string($link,$_POST['Email']);
$cpnum = mysqli_real_escape_string($link,$_POST['cpnum']);
$Dept = mysqli_real_escape_string($link,$_POST['Dept']);
$Section = mysqli_real_escape_string($link,$_POST['Section']);
$Position = mysqli_real_escape_string($link,$_POST['Position']);
$attachment = $_FILES['file_attachment']['name'];

// Query
$updatesql = "UPDATE tbluser SET USER_NAME =  '$Name',
USER_GENDER =  '$gender', 
USER_EMAIL =  '$Email', 
USER_MOBILE =  '$cpnum', 
USER_DEPT =  '$Dept',
USER_SECTION =  '$Section',
USER_POSITION =  '$Position'
";

if(!empty($attachment))
{
     //Select the file for delete
     $file_sql = "SELECT USER_ATTACHMENT FROM tbluser WHERE USER_ID = '$Employee_num'";
     $file_query = mysqli_query($link, $file_sql);
     $fileData = mysqli_fetch_array($file_query);
     $fileName = $fileData['USER_ATTACHMENT'];
     $file = $attachments_dir.$fileName;
     unlink($file);
     // Upload file to server 
     $uploadFilePath = $attachments_dir.$attachment; 
     // Insert file information in the database 
     move_uploaded_file($_FILES['file_attachment']['tmp_name'], $uploadFilePath);
    //Query
     $updatesql.= ",USER_ATTACHMENT = '$attachment'";
}
else{
     $updatesql.= "";
}

$updatesql.= "WHERE USER_ID = '$Employee_num'";

// Query
mysqli_query($link,$updatesql);


mysqli_close($link);
?>