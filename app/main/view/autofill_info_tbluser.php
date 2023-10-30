<?php

require_once "../../config.php";

// Get the user id
$Employee_num = $_REQUEST['USER_ID'];

if ($Employee_num !== "") {
	
	// Get corresponding data for that input key
	$query = mysqli_query($link, "SELECT EMPLOYEE_NAME, EMPLOYEE_EMAIL, EMPLOYEE_DEPT, EMPLOYEE_SECTION, EMPLOYEE_POSITION FROM tblemplist_main WHERE EMPLOYEE_ID='$Employee_num'");
	
	$row = mysqli_fetch_array($query);

	// Get the row data
	$Name = $row["EMPLOYEE_NAME"];

	// Get the row data
	$Email = $row["EMPLOYEE_EMAIL"];

	// Get the row data
	$dept = $row["EMPLOYEE_DEPT"];

	// Get the row data
	$section = $row["EMPLOYEE_SECTION"];

	// Get the row data
	$position = $row["EMPLOYEE_POSITION"];
	
}

// Store it in a array
$result = array("$Name", "$Email", "$dept", "$section", "$position");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
