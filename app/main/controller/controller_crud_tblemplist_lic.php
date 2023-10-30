<?php

session_start();

require_once '../../mail/mailsys.php';
require_once '../../config.php';
require_once '../../classes/generateHash.php';

if($_POST['mode'] === 'update' || $_POST['mode'] === 'add')
{

   // $employee_hashed = $_POST['EMPLOYEE_HASHED'];

    $employee_license = $_POST['EMPLOYEE_LICENSE'];
    $employee_lic_description = $_POST['EMPLOYEE_LIC_DESCRIPTION'];
    $employee_lic_start_date = $_POST['EMPLOYEE_LIC_START_DATE'];
    $employee_lic_exp_date = $_POST['EMPLOYEE_LIC_EXP_DATE'];

}

if ($_POST['mode'] === 'edit') {
    
     $result = mysqli_query($link,"SELECT id, EMPLOYEE_HASHED, EMPLOYEE_LICENSE, EMPLOYEE_LIC_DESCRIPTION, EMPLOYEE_LIC_START_DATE, EMPLOYEE_LIC_EXP_DATE FROM tblemplist_license WHERE id='" . $_POST['id'] . "'");
         
     $row= mysqli_fetch_array($result);

          echo json_encode($row);
}   


if ($_POST['mode'] === 'update') {

     $updatesql = "UPDATE tblemplist_license set EMPLOYEE_LICENSE = '".$_POST['EMPLOYEE_LICENSE']."', 
     EMPLOYEE_LIC_DESCRIPTION = '".$_POST["EMPLOYEE_LIC_DESCRIPTION"]."', 
     EMPLOYEE_LIC_START_DATE = '".$_POST["EMPLOYEE_LIC_START_DATE"]."',
     EMPLOYEE_LIC_EXP_DATE = '".$_POST["EMPLOYEE_LIC_EXP_DATE"]."'
     WHERE id='" . $_POST["id"] . "'";
 
     mysqli_query($link, $updatesql);
     echo json_encode(true);
}  

if ($_POST['mode'] === 'delete') {

     $delete_sql = "DELETE FROM tblemplist_license WHERE id='" . $_POST["id"] . "'";
     mysqli_query($link, $delete_sql);
     echo json_encode(true);
}  

?>