<?php

session_start();

require_once '../../mail/mailsys.php';
require_once '../../config.php';
require_once '../../classes/generateHash.php';

if($_POST['mode'] === 'update' || $_POST['mode'] === 'add')
{

   // $employee_hashed = $_POST['EMPLOYEE_HASHED'];
   $employee_prev_job = $_POST['EMPLOYEE_PREV_JOB'];
   $employee_prev_job_years = $_POST['EMPLOYEE_PREV_JOB_YEARS'];
   $employee_prev_endo = $_POST['EMPLOYEE_PREV_ENDO'];

}

if ($_POST['mode'] === 'edit') {
    
     $result = mysqli_query($link,"SELECT id, EMPLOYEE_HASHED, EMPLOYEE_PREV_JOB, EMPLOYEE_PREV_JOB_YEARS, EMPLOYEE_PREV_ENDO FROM tblemplist_com WHERE id='" . $_POST['id'] . "'");
         
     
     $row= mysqli_fetch_array($result);

          echo json_encode($row);
}   


if ($_POST['mode'] === 'update') {

     $updatesql = "UPDATE tblemplist_com set EMPLOYEE_PREV_JOB = '".$_POST['EMPLOYEE_PREV_JOB']."', 
     EMPLOYEE_PREV_JOB_YEARS = '".$_POST["EMPLOYEE_PREV_JOB_YEARS"]."', 
     EMPLOYEE_PREV_ENDO = '".$_POST["EMPLOYEE_PREV_ENDO"]."'
     WHERE id='" . $_POST["id"] . "'";
 
     mysqli_query($link, $updatesql);
     echo json_encode(true);
}  

if ($_POST['mode'] === 'delete') {

     $delete_sql = "DELETE FROM tblemplist_com WHERE id='" . $_POST["id"] . "'";
     mysqli_query($link, $delete_sql);
     echo json_encode(true);
}  

?>