<?php
require_once('../../config.php');
session_start();
mysqli_query($link,"DELETE FROM tblrequest_pending WHERE REQ_USER = '".$_SESSION['USER_ID']."'");
$_SESSION["USER_ID"] = "";
session_destroy();
header("Location: login.php");
?>