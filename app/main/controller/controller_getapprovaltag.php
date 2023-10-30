<?php

require_once('../../config.php');

// Perform a query to retrieve the data you want to populate the select element with
$result = mysqli_query($link,"SELECT ROLE_USER FROM tblrole");

// Loop through the result set and create an array of options for Selectize
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = array('value' => $row['ROLE_USER'], 'text' => $row['ROLE_USER']);
}

// Output the data as JSON
echo json_encode($data);

?>
