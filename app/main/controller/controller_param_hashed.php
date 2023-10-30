<?php


//! Email Setup
require_once '../../config.php';

session_start();

if(isset($_POST['param'])){
    $_SESSION['param_url'] = $_POST['param'];
}
else{
    exit();
}
// header("Location: ../view/tblemplist_edu.php");
// exit();
?>