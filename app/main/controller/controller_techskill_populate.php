<?php
session_start();
require_once('../../config.php');
    $result = mysqli_query($link, "SELECT EMPLOYEE_TECH_SKILL FROM tblemplist_tech_skill WHERE EMPLOYEE_HASHED = '".$_SESSION['param_url']."'");
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    echo json_encode($data);

    // mysqli_close($link);
?>