<?php

session_start();

require_once '../../mail/mailsys.php';
require_once '../../config.php';
require_once '../../classes/generateHash.php';

if($_POST['mode'] === 'update' || $_POST['mode'] === 'add' || $_POST['mode'] === 'addinfo')
{

    $employee_id = $_POST['EMPLOYEE_ID'];
    $employee_name = $_POST['EMPLOYEE_NAME'];
    $employee_email = $_POST['EMPLOYEE_EMAIL'];
    $employee_mobile_num = $_POST['EMPLOYEE_MOBILE_NUM'];
    $employee_age = $_POST['EMPLOYEE_AGE'];
    $employee_gender = $_POST['EMPLOYEE_GENDER'];
    $employee_dept = $_POST['EMPLOYEE_DEPT'];
    $employee_section = $_POST['EMPLOYEE_SECTION'];
    $employee_position = $_POST['EMPLOYEE_POSITION'];
    $employee_job_level = $_POST['EMPLOYEE_JOB_LEVEL'];
    $employee_status = $_POST['EMPLOYEE_STATUS'];
    $employee_date_hired = $_POST['EMPLOYEE_DATE_HIRED'];
    $employee_hashed = $hash;
    $employee_history_enc = $hash;

}

if ($_POST['mode'] === 'add') {
    
     $employee_photo = $_FILES['EMPLOYEE_PHOTO']['name']; 
     $uploadFilePath =  $employee_photo_dir.$employee_photo;

    //  $profile_hashed = $hash;

     // Upload file to server 
     move_uploaded_file($_FILES['EMPLOYEE_PHOTO']['tmp_name'], $uploadFilePath);

        $insert_sql = "INSERT INTO tblemplist_main (EMPLOYEE_ID,EMPLOYEE_NAME,EMPLOYEE_PHOTO,EMPLOYEE_EMAIL,EMPLOYEE_MOBILE_NUM,EMPLOYEE_AGE,EMPLOYEE_GENDER,EMPLOYEE_DEPT,EMPLOYEE_SECTION,EMPLOYEE_POSITION,EMPLOYEE_JOB_LEVEL,EMPLOYEE_STATUS,EMPLOYEE_DATE_HIRED,EMPLOYEE_HASHED)
                        VALUES ( '$employee_id', '$employee_name', '$employee_photo', '$employee_email', '$employee_mobile_num', '$employee_age', '$employee_gender', '$employee_dept', '$employee_section', '$employee_position', '$employee_job_level', '$employee_status', '$employee_date_hired', '$employee_hashed')";
          
        if(mysqli_query($link, $insert_sql))
          {   
               $mode = "createemployee";
               require_once ('../../classes/insertSystemHistory.php');
          } 

          echo json_encode($employee_hashed);

          // echo json_encode(true);
 }  


if ($_POST['mode'] === 'edit') {
    
     $result = mysqli_query($link,"SELECT EMPLOYEE_ID, EMPLOYEE_NAME, EMPLOYEE_EMAIL, EMPLOYEE_MOBILE_NUM, EMPLOYEE_AGE, EMPLOYEE_GENDER, EMPLOYEE_DEPT, EMPLOYEE_SECTION, EMPLOYEE_POSITION, EMPLOYEE_JOB_LEVEL, EMPLOYEE_STATUS, EMPLOYEE_DATE_HIRED, EMPLOYEE_PHOTO, EMPLOYEE_HASHED FROM tblemplist_main WHERE EMPLOYEE_HASHED='" . $_POST['param'] . "'");
         
     
     $row= mysqli_fetch_array($result);

          echo json_encode($row);
}   


if ($_POST['mode'] === 'update') {

     $updatesql = "UPDATE tblemplist_main set EMPLOYEE_ID = '".$_POST['EMPLOYEE_ID']."', EMPLOYEE_NAME = '".$_POST['EMPLOYEE_NAME']."',"; 

     if(!empty($_FILES['EMPLOYEE_PHOTOPIC']['name']))
     {
          //Select the file for delete
          $file_sql = "SELECT EMPLOYEE_PHOTO FROM tblemplist_main WHERE EMPLOYEE_ID='" . $_POST['EMPLOYEE_ID'] . "'";
          $file_query = mysqli_query($link, $file_sql);
          $fileData = mysqli_fetch_array($file_query);
          $fileName = $fileData['EMPLOYEE_PHOTO'];
          $file = $employee_photo_dir.$fileName;
          unlink($file);
          // Upload file to server 
          $employee_photo = $_FILES['EMPLOYEE_PHOTOPIC']['name']; 
          $uploadFilePath = $employee_photo_dir.$employee_photo; 
          // Insert file information in the database 
          move_uploaded_file($_FILES['EMPLOYEE_PHOTOPIC']['tmp_name'], $uploadFilePath);
          //
          $updatesql.= "EMPLOYEE_PHOTO = '" . $employee_photo . "',";
     }
     else{
          //
          $updatesql.= "";
     }
    
     
     $updatesql.= "EMPLOYEE_EMAIL = '".$_POST['EMPLOYEE_EMAIL']."', 
     EMPLOYEE_MOBILE_NUM = '".$_POST['EMPLOYEE_MOBILE_NUM']."', 
     EMPLOYEE_AGE = '".$_POST['EMPLOYEE_AGE']."', 
     EMPLOYEE_GENDER = '".$_POST['EMPLOYEE_GENDER']."', 
     EMPLOYEE_DEPT = '".$_POST['EMPLOYEE_DEPT']."', 
     EMPLOYEE_POSITION = '".$_POST['EMPLOYEE_POSITION']."', 
     EMPLOYEE_JOB_LEVEL = '".$_POST['EMPLOYEE_JOB_LEVEL']."', 
     EMPLOYEE_STATUS = '".$_POST['EMPLOYEE_STATUS']."', 
     EMPLOYEE_DATE_HIRED = '".$_POST['EMPLOYEE_DATE_HIRED']."'"; 

     $updatesql.= "WHERE EMPLOYEE_ID='" . $_POST['EMPLOYEE_ID'] . "'";

     if(mysqli_query($link, $updatesql))
     {   
          $mode = "updateemployee";
          require_once ('../../classes/insertSystemHistory.php');
     } 
}  

if ($_POST['mode'] === 'delete') {

     //! Unlink
        //Select the file for delete
        $file_sql = "SELECT EMPLOYEE_NAME, EMPLOYEE_PHOTO FROM tblemplist_main WHERE EMPLOYEE_ID = '".$_POST["EMPLOYEE_ID"]."'";
        $file_query = mysqli_query($link, $file_sql);
        $fileData = mysqli_fetch_array($file_query);
        $employeeName = $fileData['EMPLOYEE_NAME'];
        $fileName = $fileData['EMPLOYEE_PHOTO'];
        $file = $employee_photo_dir.$fileName;

        if(unlink($file))
        {
          $mode = "deleteemployee";
          require_once ('../../classes/insertSystemHistory.php');
        }

     $delete_sql = "DELETE FROM tblemplist_main WHERE id='" . $_POST["id"] . "'";
     mysqli_query($link, $delete_sql);
     echo json_encode(true);
}  

//! Addinfo from advanceprofile (adding to the pending list)
if ($_POST['mode'] === 'addinfo') {
    
   
        $insert_sql = "INSERT INTO tblemplist_main_history (EMPLOYEE_ID, EMPLOYEE_HISTORY_ENC_ID, EMPLOYEE_NAME,EMPLOYEE_EMAIL,EMPLOYEE_MOBILE_NUM,EMPLOYEE_AGE,EMPLOYEE_GENDER,EMPLOYEE_DEPT,EMPLOYEE_SECTION,EMPLOYEE_POSITION,EMPLOYEE_JOB_LEVEL,EMPLOYEE_STATUS,EMPLOYEE_DATE_HIRED,EMPLOYEE_HASHED)
                        VALUES ( '$employee_id', '$employee_history_enc', '$employee_name', '$employee_email', '$employee_mobile_num', '$employee_age', '$employee_gender', '$employee_dept', '$employee_section', '$employee_position', '$employee_job_level', '$employee_status', '$employee_date_hired', '".$_POST['EMPLOYEE_HASHED']."')";
          
        if(mysqli_query($link, $insert_sql))
          {   
               $mode = "createemployeeinfo";
               require_once ('../../classes/insertSystemHistory.php');
          } 

          echo json_encode($employee_hashed);
 }  

//! >>Create More Insert duplicate table for insert and approval to update 


//! If need to approve Account
// if ($_POST['mode'] === 'approve') {

//      mysqli_query($link, "DELETE FROM tblemplist_main WHERE EMPLOYEE_ID='" . $_POST["EMPLOYEE_ID"] . "'");
//      echo json_encode(true);
// }  

?>