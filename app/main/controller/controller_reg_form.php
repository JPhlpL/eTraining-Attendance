<?php


session_start();

require_once '../../classes/session.inc.php';
require_once '../../mail/mailsys.php';
require_once '../../classes/generateHash.php';

$action = $_GET['action'];

// mysql db table to use 
$table = 'tblsubreg_assoc'; 

$primaryKey = 'id'; 

switch($action){
    case "mainRegForm":
        if ($_POST['mode'] === 'mainRegForm') {
            $result = mysqli_query($link,"SELECT * FROM tblreg_assoc a JOIN tbltraining b ON a.REG_TRAINING_NUM = b.TRAINING_NUM WHERE a.REG_NUM='" . $_POST['param'] . "'");
            $row= mysqli_fetch_array($result);
            echo json_encode($row);
        }   
        break;
    case "mainRegTable":
        $param = $_GET['param'];
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
            array('db' => 'subreg.REG_SUB_TIMESTAMP', 'dt' => 8, 'field' => 'REG_SUB_TIMESTAMP'),
            array('db' => 'subreg.REG_SUB_LEADER_ID', 'dt' => 9, 'field' => 'REG_SUB_LEADER_ID'),
            array('db' => 'subreg.REG_SUB_NUM', 'dt' => 10, 'field' => 'REG_SUB_NUM'),
            array('db' => 'subreg.REG_MAIN_NUM', 'dt' => 11, 'field' => 'REG_MAIN_NUM',
            'formatter' => function ( $d , $row) {
                return "";
            })
        ); 

        // Include SQL query processing class 
        require '../../classes/ssp.class.customized.php'; 

        $joinQuery = "FROM tblsubreg_assoc AS subreg LEFT JOIN tblreg_assoc AS reg ON (subreg.REG_MAIN_NUM = reg.REG_TRAINING_NUM)";
        $extraWhere = "subreg.REG_MAIN_NUM  = '$param' AND subreg.REG_SUB_EMP_SECT = '".$_SESSION['USER_SECTION']."'";
        $groupBy = "";
        $having = "";

        echo json_encode(
            SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere, $groupBy, $having)
        );

        break;
}
