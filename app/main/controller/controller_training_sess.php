<?php
session_start();
require_once '../../config.php';
$mode = $_GET['mode'];

switch ($mode) {
    case 'rfid':
        header('Content-type: application/json');
        $employee_id = mysqli_real_escape_string($link,$_POST['EMPLOYEE_ID']);
        $employee_rfid = mysqli_real_escape_string($link,$_POST['ATTN_RFID_NUM']);
        $training_num = mysqli_real_escape_string($link,$_POST['TRAINING_NUM']);
        $sess_type = mysqli_real_escape_string($link,$_POST['SESS_TYPE']);
        if($_POST['SESS_TYPE'] === 'TIME-OUT'){
            $sess_type_submit = 'TIME-IN';
        }
        if($_POST['SESS_TYPE'] === 'ENDTRAINING'){
            $sess_type_submit = 'TIME-OUT';
        }

        //! Select Join Query if associate is allowed on the training
        $exist = "SELECT * FROM tblsubreg_assoc WHERE REG_SUB_TRAINING_NUM = '$training_num' AND REG_SUB_EMP_ID = '$employee_id'";
        $exist_query = mysqli_query($link, $exist);

        if(mysqli_num_rows($exist_query) == 0){
            $response = array('error' => 'NotExist');
            echo json_encode($response);
        }
        else{
            $select = "SELECT COUNT(ATTN_RFID_NUM) AS numRFID FROM tbltraining_attn WHERE ATTN_EMP_NUM = '$employee_id' AND ATTN_TRAINING_NUM = '$training_num' AND ATTN_STATUS = '$sess_type_submit'";
            $query = mysqli_query($link,$select);
            $row = mysqli_fetch_array($query);

            if($row['numRFID'] > 0){
                $response = array('error' => 'Duplicate');
                echo json_encode($response);
            }

            else{
                $insert_sql = "INSERT INTO tbltraining_attn (ATTN_EMP_NUM, ATTN_RFID_NUM, ATTN_DATE, ATTN_TIME, ATTN_STATUS, ATTN_MODE, ATTN_TRAINING_NUM)
                VALUES ('$employee_id','$employee_rfid', NOW(), NOW(), '$sess_type_submit','RFID','$training_num')";
                mysqli_query($link,$insert_sql);
                $response = array('error' => 'none');
                echo json_encode($response);
            }
        }
        
        break;
    case 'changeSess':
        //! Fix
        header('Content-type: application/json');
        $sess_type = mysqli_real_escape_string($link, $_POST['SESS_TYPE']);
        $sess_trainor = mysqli_real_escape_string($link, $_POST['SESS_TRAINOR']);
        $sess_training_num = mysqli_real_escape_string($link, $_POST['SESS_TRAINING_NUM']);

        //!fetch current transact num
        $insert_sql = "INSERT INTO tbltraining_sess (SESS_TYPE, SESS_TRAINOR, SESS_TRAINING_NUM, SESS_DATE, SESS_TIME)
        VALUES ('$sess_type','$sess_trainor', '$sess_training_num', NOW(), NOW())";
        mysqli_query($link,$insert_sql);
        $json = array("SESS_TYPE"=>$sess_type);
        echo json_encode($json);
          //! if the session is now completted
            $session_sel = "SELECT * FROM tbltraining_sess WHERE SESS_TRAINING_NUM = '$sess_training_num' ORDER BY id DESC LIMIT 1";
            $session_sel_query = mysqli_query($link, $session_sel);
            $sess_row = mysqli_fetch_array($session_sel_query);
            if($sess_row['SESS_TYPE'] == 'ENDTRAINING'){
                mysqli_query($link,"UPDATE tbltraining SET TRAINING_STATUS = 'FINISHED' WHERE TRAINING_NUM = '$sess_training_num'");
            }
        break;

    case 'fetchSessionType':
        $sql = "SELECT * FROM tbltraining_sess WHERE SESS_TRAINING_NUM = '" . $_POST['param'] . "' ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);
        if(mysqli_num_rows($result) == 0){
            $arr = array("SESS_TYPE"=>"TIME-IN");
        }
        else{
            if($row['SESS_TYPE'] == 'TIME-OUT'){
                $arr = array("SESS_TYPE"=>"ENDTRAINING");
            }
            if($row['SESS_TYPE'] == 'TIME-IN'){
                $arr = array("SESS_TYPE"=>"TIME-OUT");
            }
            if($row['SESS_TYPE'] == 'ENDTRAINING'){
                $arr = array("SESS_TYPE"=>"DONE");
            }
        }
                  
        echo json_encode($arr);
        break;
}

mysqli_close($link);
?>