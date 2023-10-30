<?php

require_once('../../mail/mailsys.php');
$action = $_GET['action'];
session_start();

//For Reg Num
function regnum($link){
    // Retrieve the control numbers and timestamps from the database
    $sql = "SELECT REG_NUM FROM tblreg_assoc ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0){
        $cont_reg_num = $row['REG_NUM'];
        $currentreg_num = explode("F", $cont_reg_num);
        $num = $currentreg_num[1] + 1;
        $reg_num = $currentreg_num[0]."F".$num;
        // echo $BURR_SHEET_NUM;
    }
    else{
        $reg_num = "DNPH-RF1";
        // echo $BURR_SHEET_NUM;
    }
    return $reg_num;
}

switch($action){
    case "delReg":
        $data_ids = $_REQUEST['data_ids'];
        $data_id_array = explode(",", $data_ids); 
        if(!empty($data_id_array)) {
            foreach($data_id_array as $id) {
                $sql = "UPDATE tblsubreg_assoc SET REG_SUB_STATUS = 'CANCELLED'";
                $sql.="WHERE id = '".$id."'";
                $query=mysqli_query($link, $sql);
            }
        }
        break;
    case "fetchCurrentList":
        // mysql db table to use 
        $table = 'tblsubreg_assoc'; 
        $primaryKey = 'id'; 
        $param = $_GET['param'];
        $columns = array( 
            array( 
                'db'        => 'subreg.id',
                'dt'        => 0,
                'field' => 'id', 
                'formatter' => function( $d, $row ) { 
                    return "
                    <div class='form-check exampleCheck text-center'>
                        <input type='checkbox' class='form-check-input selectedRow' id='exampleCheck".$row['id']."' value='".$row['id']."'>
                        <label class='form-check-label' for='exampleCheck".$row['id']."'></label>
                    </div>              
                    "; 
                }),
            array('db' => 'subreg.REG_SUB_EMP_NAME', 'dt' => 1, 'field' => 'REG_SUB_EMP_NAME',
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
            array('db' => 'subreg.REG_SUB_REMARKS', 'dt' => 8, 'field' => 'REG_SUB_REMARKS')
            
        ); 

        // Include SQL query processing class 
        require '../../classes/ssp.class.customized.php'; 

        $joinQuery = "FROM tblsubreg_assoc AS subreg";
        $extraWhere = "subreg.REG_SUB_TRAINING_NUM  = '$param' AND subreg.REG_SUB_STATUS != 'CANCELLED' AND subreg.REG_SUB_EMP_SECT = '".$_SESSION['USER_SECTION']."'";
        $groupBy = "";
        $having = "";
        echo json_encode(
            SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere, $groupBy, $having)
        );

        break;

    case 'autocomplete':
        $fieldNo = !empty($_GET['fieldNo']) ? $_GET['fieldNo'] : '';
        $name = !empty($_GET['name']) ? strtolower(trim($_GET['name'])) : '';
        $fieldName = 'EMPLOYEE_ID';
        switch ($fieldNo) {
            case 1:
                $fieldName = 'EMPLOYEE_NAME';
                break;
            case 2:
                $fieldName = 'EMPLOYEE_DEPT';
                break;
            case 3:
                $fieldName = 'EMPLOYEE_SECTION';
                break;
            case 4:
                $fieldName = 'EMPLOYEE_POSITION';
                break;
        }

        $data = array();
        if (!empty($_GET['name'])) {
            $name = strtolower(trim($_GET['name']));
            $sql = "SELECT EMPLOYEE_ID, EMPLOYEE_NAME, EMPLOYEE_DEPT, EMPLOYEE_SECTION, EMPLOYEE_POSITION FROM tblemplist_main WHERE EMPLOYEE_SECTION = '".$_SESSION["USER_SECTION"]."' AND LOWER($fieldName) LIKE '" . $name . "%'";
            $result = mysqli_query($link, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['EMPLOYEE_ID'] . '|' . $row['EMPLOYEE_NAME'] . '|' . $row['EMPLOYEE_DEPT']. '|' . $row['EMPLOYEE_SECTION'].'|' . $row['EMPLOYEE_POSITION'];
                array_push($data, $name);
            }
        }
        echo json_encode($data);
        exit;
        break;
    case 'submitregistration':

        //training num
        $INPUT_REG_TRAINING_NUM = $_POST['TRAINING_NUM'];

        //Single
        $INPUT_REG_NUM = regnum($link);
  
        $INPUT_REG_LEADER_ID = $_POST['REG_LEADER_ID'];
        $INPUT_REG_LEADER_NAME = $_POST['REG_LEADER_NAME'];
        $INPUT_REG_EMP_DEPT = $_POST['REG_EMP_DEPT'];
        $INPUT_REG_EMP_SECT = $_POST['REG_EMP_SECT'];
        
        // Multiple
        $INPUT_REG_SUB_EMP_ID = $_POST['REG_SUB_EMP_ID'];
        $INPUT_REG_SUB_EMP_NAME = $_POST['REG_SUB_EMP_NAME'];
        $INPUT_REG_SUB_EMP_DEPT = $_POST['REG_SUB_EMP_DEPT'];
        $INPUT_REG_SUB_EMP_SECT = $_POST['REG_SUB_EMP_SECT'];
        $INPUT_REG_SUB_EMP_POSITION = $_POST['REG_SUB_EMP_POSITION'];
        $INPUT_REG_SUB_REMARKS = $_POST['REG_SUB_REMARKS'];

        $number = count($_POST['REG_SUB_EMP_ID']);  

        // if(isset($BURR_SHEET_NUM))
        if(isset($number))
        {
            $insertForm_sql = "INSERT INTO tblreg_assoc( REG_NUM, REG_TRAINING_NUM,  REG_LEADER_ID, REG_LEADER_NAME, REG_EMP_DEPT, REG_EMP_SECT)
            VALUES ( '$INPUT_REG_NUM','$INPUT_REG_TRAINING_NUM', '$INPUT_REG_LEADER_ID', '$INPUT_REG_LEADER_NAME', '$INPUT_REG_EMP_DEPT','$INPUT_REG_EMP_SECT')";
            
            mysqli_query($link,$insertForm_sql);

            if($number > 0)  
            {  
                for($i=0; $i<$number; $i++)  
                {  
                    
                    if($INPUT_REG_SUB_EMP_ID[$i]!="" || $INPUT_REG_SUB_EMP_NAME[$i]!="" || $INPUT_REG_SUB_EMP_DEPT[$i]!="" || $INPUT_REG_SUB_EMP_SECT[$i]!="" || $INPUT_REG_SUB_EMP_POSITION[$i]!="")  
                    {  
                  
                                 // Retrieve the control numbers and timestamps from the database
                                $sql = "SELECT REG_SUB_NUM FROM tblsubreg_assoc ORDER BY id DESC LIMIT 1";
                                $result = mysqli_query($link, $sql);
                                $row = mysqli_fetch_array($result);
                                if(mysqli_num_rows($result) > 0){
                                    $cont_reg_sub_num = $row['REG_SUB_NUM'];
                                    $currentreg_sub_num = explode("S", $cont_reg_sub_num);
                                    $sub_num = $currentreg_sub_num[1] + 1;
                                    $regsubnum = $currentreg_sub_num[0]."S".$sub_num;
                                    // echo $BURR_SHEET_NUM;
                                }
                                else{
                                    $regsubnum = "DNPH-RFS1";
                                    // echo $BURR_SHEET_NUM;
                                }

                                $list_sql = "INSERT INTO tblsubreg_assoc (REG_SUB_NUM, REG_MAIN_NUM, REG_SUB_TRAINING_NUM, REG_SUB_LEADER_ID, REG_SUB_EMP_ID, REG_SUB_EMP_NAME, REG_SUB_EMP_DEPT, REG_SUB_EMP_SECT, REG_SUB_EMP_POSITION, REG_SUB_REMARKS)
                                            VALUES ('$regsubnum', '$INPUT_REG_NUM', '$INPUT_REG_TRAINING_NUM', '$INPUT_REG_LEADER_ID', '$INPUT_REG_SUB_EMP_ID[$i]', '$INPUT_REG_SUB_EMP_NAME[$i]', '$INPUT_REG_SUB_EMP_DEPT[$i]', '$INPUT_REG_SUB_EMP_SECT[$i]', '$INPUT_REG_SUB_EMP_POSITION[$i]', '$INPUT_REG_SUB_REMARKS[$i]')";  
                                mysqli_query($link, $list_sql);    
                            

                    }  
                }  
                echo "Data Inserted";  
            }  
            else  
            {  
                echo "Please Enter Value";  
            }  
        }
        //Query for selecting the email
        $selected_sql = "SELECT reg.REG_NUM, reg.REG_TIMESTAMP, reg.REG_LEADER_ID, reg.REG_LEADER_NAME,  tr.TRAINING_START_DATE, tr.TRAINING_START_TIME, tr.TRAINING_END_DATE, tr.TRAINING_END_TIME, tr.TRAINING_MIN_REQ, tr.TRAINING_MAX_REQ, tr.TRAINING_NUM, tr.TRAINING_NAME, tr.TRAINING_TRAINOR, tr.TRAINING_LOCATION 
        FROM tblreg_assoc reg 
        JOIN tbltraining tr
        ON reg.REG_TRAINING_NUM = tr.TRAINING_NUM
        WHERE reg.REG_NUM = '$INPUT_REG_NUM'";

        $selected_query = mysqli_query($link, $selected_sql);
        $sel_row = mysqli_fetch_array($selected_query);

        $REG_NUM = $sel_row['REG_NUM'];
        $REG_TIMESTAMP = $sel_row['REG_TIMESTAMP'];
        $REG_LEADER_ID = $sel_row['REG_LEADER_ID'];
        $REG_LEADER_NAME = $sel_row['REG_LEADER_NAME'];
        $TRAINING_START_DATE = $sel_row['TRAINING_START_DATE'];
        $TRAINING_START_TIME = $sel_row['TRAINING_START_TIME'];
        $TRAINING_END_DATE = $sel_row['TRAINING_END_DATE'];
        $TRAINING_END_TIME = $sel_row['TRAINING_END_TIME'];
        $TRAINING_MIN_REQ = $sel_row['TRAINING_MIN_REQ'];
        $TRAINING_MAX_REQ = $sel_row['TRAINING_MAX_REQ'];
        $TRAINING_NUM = $sel_row['TRAINING_NUM'];
        $TRAINING_NAME = $sel_row['TRAINING_NAME'];
        $TRAINING_TRAINOR = $sel_row['TRAINING_TRAINOR'];
        $TRAINING_LOCATION = $sel_row['TRAINING_LOCATION'];

        include '../../mail/content/smtp_submitregistration.php';
        break;
}
 



?>