<?php


//! Email Setup
// require_once '../../config.php';

session_start();

$url = $_SERVER['REQUEST_URI'];
// $url_param = explode('?',$url);
// $param_id = $url_param[1];
// $_SESSION['param_url'] = $param_id;

echo $url;
// header("Location: ../view/tblemplist_profile.php?".$param_id);
// exit();
?>