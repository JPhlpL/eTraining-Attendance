<?php

require_once "../../config.php";

// Get the user id
$training_name = $_REQUEST['trainingname'];

if ($training_name !== "") {
	
	// Get corresponding data for that input key
	$query = mysqli_query($link, "SELECT DISTINCT TRAINING_LOCATION, TRAINING_DETAIL, TRAINING_STATUS, TRAINING_OCCUR, TRAINING_OCCUR_NUM, TRAINING_CREATED_TIMESTAMP, TRAINING_START_DATE, TRAINING_END_DATE, TRAINING_START_TIME, TRAINING_END_TIME, TRAINING_REMARKS, TRAINING_MIN_REQ, TRAINING_MAX_REQ, TRAINING_TRAINOR FROM tbltraining WHERE TRAINING_NAME ='$training_name' ORDER BY id DESC LIMIT 1");

	$row = mysqli_fetch_array($query);

	$training_location = $row['TRAINING_LOCATION'];
	$training_detail = $row['TRAINING_DETAIL'];
	$training_status = $row['TRAINING_STATUS'];
	$training_occur = $row['TRAINING_OCCUR'];
	$training_occur_num = $row['TRAINING_OCCUR_NUM'];
	$training_created_timestamp = $row['TRAINING_CREATED_TIMESTAMP'];
	$training_start_date = $row['TRAINING_START_DATE'];
	$training_end_date = $row['TRAINING_END_DATE'];
	$training_start_time = $row['TRAINING_START_TIME'];
	$training_end_time = $row['TRAINING_END_TIME'];
	$training_remarks = $row['TRAINING_REMARKS'];
	$training_min_req = $row['TRAINING_MIN_REQ'];
	$training_max_req = $row['TRAINING_MAX_REQ'];
	$training_trainor = $row['TRAINING_TRAINOR'];

}

// Store it in a array
$result = array("$training_location", "$training_detail", "$training_status", "$training_occur", "$training_occur_num", "$training_created_timestamp", "$training_start_date", "$training_end_date", "$training_start_time", "$training_end_time", "$training_remarks", "$training_min_req", "$training_max_req", "$training_trainor");
	
// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
