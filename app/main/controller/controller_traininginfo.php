<?php


session_start();

require_once '../../classes/session.inc.php';
require_once '../../mail/mailsys.php';
require_once '../../classes/generateHash.php';

// mysql db table to use 
$table = 'tblsubreg_assoc'; 

$primaryKey = 'id'; 

switch($_GET['action']){
    case 'fetchtraininginfo':
        $sql = "SELECT * FROM tbltraining WHERE TRAINING_NUM = '" . $_POST['param'] . "'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);
        echo json_encode($row);
        break;
    case "listattendees":
        $tnum = $_GET['tnum'];
        $columns = array( 
            array( 
                'db'        => 'subreg.id',
                'dt'        => 0,
                'field' => 'id', 
                'formatter' => function( $d, $row ) { 
                    return "
                    <div class='form-check exampleCheck'>
                        <input type='checkbox' class='form-check-input selectedRow' id='exampleCheck".$row['id']."' value='".$row['id']."'>
                        <label class='form-check-label' for='exampleCheck".$row['id']."'></label>
                    </div>              
                    "; 
                }),
            array('db' => 'subreg.REG_SUB_EMP_ID', 'dt' => 1, 'field' => 'REG_SUB_EMP_ID',
            'formatter' => function ( $d , $row) use ($employee_photo_dir) {
                return '
                    <div class="text-center">
                        <a href="'.$employee_photo_dir.$row['REG_SUB_EMP_ID'].'.jpg" id="img_link" data-toggle="lightbox" data-gallery="gallery">
                            <img src="'.$employee_photo_dir.$row['REG_SUB_EMP_ID'].'.jpg" id="preview_img" class="autocomplete_txt" width="100" height="100"/>
                        </a>
                    </div>';
                }), 
            array('db' => 'subreg.REG_SUB_EMP_ID', 'dt' => 2, 'field' => 'REG_SUB_EMP_ID'),
            array('db' => 'subreg.REG_SUB_EMP_NAME', 'dt' => 3, 'field' => 'REG_SUB_EMP_NAME'),
            array('db' => 'subreg.REG_SUB_EMP_DEPT', 'dt' => 4, 'field' => 'REG_SUB_EMP_DEPT'),
            array('db' => 'subreg.REG_SUB_EMP_SECT', 'dt' => 5, 'field' => 'REG_SUB_EMP_SECT'),
            array('db' => 'subreg.REG_SUB_EMP_POSITION', 'dt' => 6, 'field' => 'REG_SUB_EMP_POSITION'),
            array('db' => 'subreg.REG_SUB_STATUS', 'dt' => 7, 'field' => 'REG_SUB_STATUS'),
            array('db' => 'subreg.REG_SUB_TIMESTAMP', 'dt' => 8, 'field' => 'REG_SUB_TIMESTAMP')
        ); 

        // Include SQL query processing class 
        require '../../classes/ssp.class.customized.php'; 

        $joinQuery = "FROM tblsubreg_assoc AS subreg LEFT JOIN tblreg_assoc AS reg ON (subreg.REG_MAIN_NUM = reg.REG_TRAINING_NUM)";
        $extraWhere = "subreg.REG_SUB_TRAINING_NUM  = '$tnum'";
        $groupBy = "";
        $having = "";

        echo json_encode(
            SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere, $groupBy, $having)
        );

        break;

    case 'cancelTraining':
        $sql = "UPDATE tbltraining SET TRAINING_STATUS = 'CANCELLED' WHERE TRAINING_NUM = '" . $_POST['TRAINING_NUM_CANCEL'] . "'";
        mysqli_query($link, $sql);

        
        $check = "SELECT * FROM tbltraining WHERE TRAINING_NUM = '" . $_POST['TRAINING_NUM_CANCEL'] . "'";
        $result = mysqli_query($link, $check);
        $currentData = mysqli_fetch_array($result);

        $num = $currentData['TRAINING_NUM'];
        $name = $currentData['TRAINING_NAME'];
        $location = $currentData['TRAINING_LOCATION'];
        $detail = $currentData['TRAINING_DETAIL'];
        $status = $currentData['TRAINING_STATUS'];
        $occur = $currentData['TRAINING_OCCUR'];
        $occur_num = $currentData['TRAINING_OCCUR_NUM'];
        $start_date = $currentData['TRAINING_START_DATE'];
        $end_date = $currentData['TRAINING_END_DATE'];
        $start_time = $currentData['TRAINING_START_TIME'];
        $end_time = $currentData['TRAINING_END_TIME'];
        $remarks = $currentData['TRAINING_REMARKS'];
        $training_min_req = $currentData['TRAINING_MIN_REQ'];
        $training_max_req = $currentData['TRAINING_MAX_REQ'];
        $trainor = $currentData['TRAINING_TRAINOR'];
        //! Put email notification to send all production emails
        include '../../mail/content/smtp_canceltraining.php';

        break;
}
?>