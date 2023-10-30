<?php

session_start();
require_once '../../config.php';


$username = mysqli_real_escape_string($link,$_POST['username']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

mysqli_query($link, "UPDATE tbluser SET USER_PASS = '$password' WHERE USER_ID = '$username'");

mysqli_close($link);
?>