<?php

require_once "../../config.php";

// Get the user id
$it_item_control_number = $_REQUEST['IT_ITEM_CONTROL_NUMBER'];

if ($it_item_control_number !== "") {
	
	// Get corresponding data for that input key
	$query = mysqli_query($link, "SELECT IT_ITEM_NAME, IT_CATEGORY_ITEM, IT_ITEM_PHOTO, IT_ITEM_QUANTITY, IT_ITEM_DESCRIPTION FROM tblinventory WHERE IT_ITEM_CONTROL_NUMBER='$it_item_control_number'");

	$row = mysqli_fetch_array($query);

    $it_item_name = $row["IT_ITEM_NAME"];

    $it_category_item = $row["IT_CATEGORY_ITEM"];

    $it_item_photo = $row["IT_ITEM_PHOTO"];

    $it_item_quantity = $row["IT_ITEM_QUANTITY"];

    $it_item_description = $row["IT_ITEM_DESCRIPTION"];

}

// Store it in a array
$result = array("$it_item_name", "$it_category_item", "$it_item_photo", "$it_item_quantity", "$it_item_description");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
