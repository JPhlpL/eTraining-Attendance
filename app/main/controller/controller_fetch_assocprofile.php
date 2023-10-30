<?php

include('../../config.php');

$action = $_GET['action'];

switch($action){
    case 'fetchMain':
        $result = mysqli_query($link,"SELECT REG_SUB_EMP_ID, REG_SUB_EMP_NAME, REG_SUB_EMP_DEPT, REG_SUB_EMP_SECT, REG_SUB_EMP_POSITION FROM tblsubreg_assoc WHERE REG_SUB_EMP_ID='" . $_POST['param'] . "'");
        $row= mysqli_fetch_array($result);
        echo json_encode($row);
        break;

    case 'fetchSubMain':
        // mysql db table to use 
        $table = 'tbltraining_attn'; 
        // Table's primary key 
        $primaryKey = 'id'; 
        
        $columns = array( 
            array( 
                'db'        => 'train_attn.id',
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
            array('db' => 'train_attn.ATTN_TRAINING_NUM', 'dt' => 1, 'field' => 'ATTN_TRAINING_NUM'),
            array('db' => 'train.TRAINING_NAME', 'dt' => 2, 'field' => 'TRAINING_NAME'),
            array('db' => 'train.TRAINING_DETAIL', 'dt' => 3, 'field' => 'TRAINING_DETAIL'),
            array('db' => 'train.TRAINING_LOCATION', 'dt' => 4, 'field' => 'TRAINING_LOCATION'),
            array( 
                'db'        => 'train_attn.id',
                'dt'        => 5,
                'field' => 'id', 
                'formatter' => function( $d, $row ) { 
                    return ""; 
            }),
        ); 

        // Include SQL query processing class 
        require '../../classes/ssp.class.customized.php'; 

        $joinQuery = "FROM tbltraining_attn AS train_attn LEFT JOIN tbltraining AS train ON (train_attn.ATTN_TRAINING_NUM = train.TRAINING_NUM)";
        $extraWhere = "train_attn.ATTN_EMP_NUM = '" . $_GET['empnum'] . "'";
        $groupBy = "ATTN_TRAINING_NUM";
        $having = "COUNT(train_attn.ATTN_STATUS) = 2";

        echo json_encode(
            SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere, $groupBy, $having)
        );
        break;

}
?>