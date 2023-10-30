<?php


session_start();

require_once '../../mail/mailsys.php';
require_once '../../config.php';
require_once '../../classes/generateHash.php';

if($_POST['mode'] === 'update' || $_POST['mode'] === 'add')
{
     $user_id = $_POST['USER_ID'];
     $user_pass = password_hash($_POST['USER_PASS'], PASSWORD_DEFAULT);
     $user_name = $_POST['USER_NAME'];
     $user_gender = $_POST['USER_GENDER'];
     $user_email = $_POST['USER_EMAIL'];
     $user_dept = $_POST['USER_DEPT'];
     $user_section = $_POST['USER_SECTION'];
     $user_position = $_POST['USER_POSITION'];
     $user_mobile = $_POST['USER_MOBILE'];
     $user_account_type = $_POST['USER_ACCOUNT_TYPE'];
}

if ($_POST['mode'] === 'add') {
    
     $user_profilepic = $_FILES['USER_PROFILEPIC']['name']; 
     $uploadFilePath = $user_profilepic_dir.$user_profilepic;

     $profile_hashed = $hash;

     // Upload file to server 
     move_uploaded_file($_FILES['USER_PROFILEPIC']['tmp_name'], $uploadFilePath);

          $insert_sql = "INSERT INTO tbluser (USER_ID, USER_PASS, USER_NAME, USER_GENDER, USER_EMAIL, USER_DEPT, USER_SECTION, USER_POSITION, USER_MOBILE, USER_PROFILEPIC, USER_ACCOUNT_TYPE, USER_PROFILE_HASHED)
          VALUES ('$user_id','$user_pass','$user_name','$user_gender','$user_email','$user_dept','$user_section','$user_position','$user_mobile','$user_profilepic','$user_account_type','$profile_hashed')";

          if(mysqli_query($link, $insert_sql))
          {   
               $mode = "createaccount";
               require_once ('../../classes/insertSystemHistory.php');
          } 

          echo json_encode(true);
 }  


if ($_POST['mode'] === 'edit') {
    
     $result = mysqli_query($link,"SELECT * FROM tbluser WHERE USER_PROFILE_HASHED='" . $_POST['param'] . "'");
     $row= mysqli_fetch_array($result);

          echo json_encode($row);
}   


if ($_POST['mode'] === 'update') {

     $updatesql = "UPDATE tbluser set USER_ID='" . $_POST['USER_ID'] . "',"; 

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
}  

if ($_POST['mode'] === 'delete') {

     //! Unlink
        //Select the file for delete
        $file_sql = "SELECT USER_NAME, USER_PROFILEPIC FROM tbluser WHERE id = '".$_POST["id"]."'";
        $file_query = mysqli_query($link, $file_sql);
        $fileData = mysqli_fetch_array($file_query);
        $fileName = $fileData['USER_PROFILEPIC'];
        $user_name = $fileData['USER_NAME'];
        $file = $user_profilepic_dir.$fileName;

        if(unlink($file))
        {
          $mode = "deleteaccount";
          require_once ('../../classes/insertSystemHistory.php');
        }

     $delete_sql = "DELETE FROM tbluser WHERE id='" . $_POST["id"] . "'";
     mysqli_query($link, $delete_sql);
     echo json_encode(true);
}  

//! If need to approve Account
// if ($_POST['mode'] === 'approve') {

//      mysqli_query($link, "DELETE FROM tbluser WHERE id='" . $_POST["id"] . "'");
//      echo json_encode(true);
// }  

?>