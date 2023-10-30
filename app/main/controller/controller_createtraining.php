<?php


require_once '../../mail/mailsys.php';
session_start();

switch($_GET['action']){
    case 'fetchcontrolnum':
        $sql = "SELECT TRAINING_NUM FROM tbltraining ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($link, $sql);
        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        if (empty($data)) {
            $data[] = array("TRAINING_NUM" => "DNPH-TR0");
        }
        echo json_encode($data);
        break;
        
    case 'addtraining':

        $num = $_POST['TRAINING_NUM'];
        $name = $_POST['TRAINING_NAME'];
        $location = $_POST['TRAINING_LOCATION'];
        $detail = $_POST['TRAINING_DETAIL'];
        $status = $_POST['TRAINING_STATUS'];
        $occur = $_POST['TRAINING_OCCUR'];
        $occur_num = $_POST['TRAINING_OCCUR_NUM'];
        $start_date = $_POST['TRAINING_START_DATE'];
        $end_date = $_POST['TRAINING_END_DATE'];
        $start_time = $_POST['TRAINING_START_TIME'];
        $end_time = $_POST['TRAINING_END_TIME'];
        $remarks = $_POST['TRAINING_REMARKS'];
        $training_min_req = $_POST['TRAINING_MIN_REQ'];
        $training_max_req = $_POST['TRAINING_MAX_REQ'];
        $trainor = $_POST['TRAINING_TRAINOR'];

        $stmt = mysqli_prepare($link, "INSERT INTO tbltraining(TRAINING_NUM, TRAINING_NAME, TRAINING_LOCATION, TRAINING_DETAIL, TRAINING_STATUS, TRAINING_OCCUR, TRAINING_OCCUR_NUM, TRAINING_START_DATE, TRAINING_END_DATE, TRAINING_START_TIME, TRAINING_END_TIME, TRAINING_REMARKS, TRAINING_MIN_REQ, TRAINING_MAX_REQ, TRAINING_TRAINOR) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, 'sssssssssssssss', $num, $name, $location, $detail, $status, $occur, $occur_num, $start_date, $end_date, $start_time, $end_time, $remarks, $training_min_req, $training_max_req, $trainor);
        mysqli_stmt_execute($stmt);

        include '../../mail/content/smtp_sendtraining.php';

        break;
        
    
}
?>