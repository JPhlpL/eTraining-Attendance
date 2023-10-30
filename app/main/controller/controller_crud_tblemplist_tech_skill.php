<?php

session_start();

require_once '../../mail/mailsys.php';
require_once '../../config.php';
require_once '../../classes/generateHash.php';

if ($_POST['mode'] === 'edit') {
    
     $result = mysqli_query($link,"SELECT id, EMPLOYEE_HASHED, EMPLOYEE_TECH_SKILL FROM tblemplist_tech_skill WHERE id='" . $_POST['id'] . "'");
         
     
     $row= mysqli_fetch_array($result);

          echo json_encode($row);
}   


if ($_POST['mode'] === 'update') {

     $updatesql = "UPDATE tblemplist_tech_skill set EMPLOYEE_TECH_SKILL = '".$_POST['EMPLOYEE_TECH_SKILL']."'
     WHERE id='" . $_POST["id"] . "'";
 
     mysqli_query($link, $updatesql);
     echo json_encode(true);
}  

if ($_POST['mode'] === 'delete') {

     $delete_sql = "DELETE FROM tblemplist_tech_skill WHERE id='" . $_POST["id"] . "'";
     mysqli_query($link, $delete_sql);
     echo json_encode(true);
}  

?>