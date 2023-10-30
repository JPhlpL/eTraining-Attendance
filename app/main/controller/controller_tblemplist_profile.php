<!-- Create a update profile query -->
<?php 
session_start();

require_once '../../mail/mailsys.php';
require_once '../../config.php';
require_once '../../classes/generateHash.php';

// Query
$updatesql = "UPDATE tblemplist_main set USER_ID='" . $_POST['USER_ID'] . "',"; 

if(!empty($_POST['USER_PASS']))
{
     $user_pass = password_hash($_POST['USER_PASS'], PASSWORD_DEFAULT);
     $updatesql.= "USER_PASS='$user_pass',";
}
else{
     $updatesql.= "";
}
$updatesql.= "USER_NAME='" . $_POST['USER_NAME'] . "', 
USER_GENDER = '" . $_POST['USER_GENDER'] . "', 
USER_EMAIL = '" . $_POST['USER_EMAIL'] . "', 
USER_DEPT = '" . $_POST['USER_DEPT'] . "', 
USER_SECTION = '" . $_POST['USER_SECTION'] . "', 
USER_POSITION = '" . $_POST['USER_POSITION'] . "', 
USER_MOBILE = '" . $_POST['USER_MOBILE'] . "',";

if(!empty($_FILES['USER_PROFILEPIC']['name']))
{
     //Select the file for delete
     $file_sql = "SELECT USER_PROFILEPIC FROM tbluser WHERE USER_PROFILE_HASHED='" . $_POST['param'] . "'";
     $file_query = mysqli_query($link, $file_sql);
     $fileData = mysqli_fetch_array($file_query);
     $fileName = $fileData['USER_PROFILEPIC'];
     $file = $user_profilepic_dir.$fileName;
     unlink($file);
     // Upload file to server 
     $user_profilepic = $_FILES['USER_PROFILEPIC']['name']; 
     $uploadFilePath = $user_profilepic_dir.$user_profilepic; 
     // Insert file information in the database 
     move_uploaded_file($_FILES['USER_PROFILEPIC']['tmp_name'], $uploadFilePath);
     $updatesql.= "USER_PROFILEPIC = '" . $user_profilepic . "',";
}
else{
     $updatesql.= "";
}

$updatesql.= "USER_ACCOUNT_TYPE = '" . $_POST['USER_ACCOUNT_TYPE'] . "' 
WHERE USER_PROFILE_HASHED='" . $_POST['param'] . "'";

if(mysqli_query($link, $updatesql))
{   
     $mode = "updateaccount";
     require_once ('../../classes/insertSystemHistory.php');
} 

echo json_encode(true);
// Query

?>
<!-- Create a update profile query -->