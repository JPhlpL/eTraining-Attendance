<?php
error_reporting(0);
ini_set('display_errors', 0);

require_once "../../config.php";

// Get the user id
$rfid_num = $_REQUEST['rfid'];

if ($rfid_num !== "") {
	
	// Get corresponding data for that input key
	$query = mysqli_query($link, "SELECT EMPLOYEE_NAME, EMPLOYEE_ID, EMPLOYEE_DEPT, EMPLOYEE_SECTION, EMPLOYEE_POSITION, EMPLOYEE_STATUS,EMPLOYEE_PHOTO FROM tblemplist_main WHERE EMPLOYEE_RFID='$rfid_num'");

	$row = mysqli_fetch_array($query);

    $employee_name = $row['EMPLOYEE_NAME'];
    $employee_id = $row['EMPLOYEE_ID'];
    $employee_dept = $row['EMPLOYEE_DEPT'];
    $employee_section = $row['EMPLOYEE_SECTION'];
    $employee_position = $row['EMPLOYEE_POSITION'];
    $employee_status = $row['EMPLOYEE_STATUS'];
    $employee_photo = $row['EMPLOYEE_PHOTO'];

}
if(empty($employee_name) || !isset($employee_name) || $employee_name === ''){
    $action = array("action"=>"error");
    echo json_encode($action);
}
else{
    $result = array("$employee_name", "$employee_id", "$employee_dept", "$employee_section", "$employee_position", "$employee_status", "$employee_photo");
    $myJSON = json_encode($result);
    echo $myJSON;
// Send in JSON encoded form
}
?>
