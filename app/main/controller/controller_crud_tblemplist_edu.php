<?php

session_start();

require_once '../../mail/mailsys.php';
require_once '../../config.php';
require_once '../../classes/generateHash.php';

if($_POST['mode'] === 'update' || $_POST['mode'] === 'add')
{

   // $employee_hashed = $_POST['EMPLOYEE_HASHED'];
    $employee_course = $_POST['EMPLOYEE_COURSE'];
    $employee_school = $_POST['EMPLOYEE_SCHOOL'];
    $employee_edu_attainment = $_POST['EMPLOYEE_EDU_ATTAINMENT'];
    $employee_edu_years = $_POST['EMPLOYEE_EDU_YEARS'];

}

if ($_POST['mode'] === 'edit') {
    
     $result = mysqli_query($link,"SELECT id, EMPLOYEE_HASHED, EMPLOYEE_COURSE, EMPLOYEE_SCHOOL, EMPLOYEE_EDU_ATTAINMENT, EMPLOYEE_EDU_YEARS FROM tblemplist_edu WHERE id='" . $_POST['id'] . "'");
         
     
     $row= mysqli_fetch_array($result);

          echo json_encode($row);
}   


if ($_POST['mode'] === 'update') {

     $updatesql = "UPDATE tblemplist_edu set EMPLOYEE_COURSE = '".$_POST['EMPLOYEE_COURSE']."', 
     EMPLOYEE_SCHOOL = '".$_POST["EMPLOYEE_SCHOOL"]."', 
     EMPLOYEE_EDU_ATTAINMENT = '".$_POST["EMPLOYEE_EDU_ATTAINMENT"]."', 
     EMPLOYEE_EDU_YEARS = '".$_POST["EMPLOYEE_EDU_YEARS"]."'
     WHERE id='" . $_POST["id"] . "'";
 
     mysqli_query($link, $updatesql);
     echo json_encode(true);
}  

if ($_POST['mode'] === 'delete') {

     $delete_sql = "DELETE FROM tblemplist_edu WHERE id='" . $_POST["id"] . "'";
     mysqli_query($link, $delete_sql);
     echo json_encode(true);
}  

?>