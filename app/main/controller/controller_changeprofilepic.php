<?php

session_start();
require_once '../../config.php';

// //Select the file for delete
$file_sql = "SELECT USER_PROFILEPIC FROM tbluser WHERE USER_ID = '".$_POST["USER_ID"]."'";
$file_query = mysqli_query($link, $file_sql);
$fileData = mysqli_fetch_array($file_query);
$fileName = $fileData['USER_PROFILEPIC'];

$file = $user_profilepic_dir.$fileName;
unlink($file);

$user_profilephoto = $_FILES['image']['name']; 
$uploadFilePath = $user_profilepic_dir.$user_profilephoto; 

// Upload file to server 

// Insert file information in the database 
 move_uploaded_file($_FILES['image']['tmp_name'], $uploadFilePath);
 mysqli_query($link,"UPDATE tbluser set USER_PROFILEPIC = '$user_profilephoto' WHERE USER_ID = '".$_POST["USER_ID"]."'");

 echo json_encode(true);
?>