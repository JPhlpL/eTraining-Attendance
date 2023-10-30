<?php 

require '../../classes/session.inc.php'; 

// mysql db table to use 
$table = 'tbltraining'; 


// Table's primary key 
$primaryKey = 'id'; 
 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 


//! Unahin yung last response for automatic notification
$columns = array( 
    array( 
        'db'        => 'ml.id',
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
    array('db' => 'ml.TRAINING_NUM', 'dt' => 1, 'field' => 'TRAINING_NUM',
    'formatter' => function ( $d , $row) {
        return "
        <a href='traininginfo.php?tnum=".$row['TRAINING_NUM']."' data-toggle='tooltip' title='View Data' id='btn-view'> 
            <button type='button' class='bg-primary border rounded px-4 py-1 font-weight-bold' style='font-size:15px;'>"."
            <i class='nav-icon fas fa-eye mr-2'></i>"
                .$row["TRAINING_NUM"].
            "</button>
        </a>";
    }),  
    array('db' => 'ml.TRAINING_NAME', 'dt' => 2, 'field' => 'TRAINING_NAME'),
    array('db' => 'ml.TRAINING_DETAIL', 'dt' => 3, 'field' => 'TRAINING_DETAIL'),
    array('db' => 'ml.TRAINING_STATUS', 'dt' => 4, 'field' => 'TRAINING_STATUS',
    'formatter' => function ( $d , $row) {
        if($row['TRAINING_STATUS'] == "CANCELLED")
        {
        return "<label class='bg-danger border rounded px-4 py-1 font-weight-bold' style='font-size:15px;'>".$row['TRAINING_STATUS']."</label>";
        }elseif($row['TRAINING_STATUS'] == "ACTIVE"){
            return "<label class='bg-success border rounded px-4 py-1 font-weight-bold' style='font-size:15px;'>".$row['TRAINING_STATUS']."</label>";
        }
        elseif($row['TRAINING_STATUS'] == "FINISHED"){
            return "<label class='bg-secondary border rounded px-4 py-1 font-weight-bold' style='font-size:15px;'>".$row['TRAINING_STATUS']."</label>";
        }
        else{
            return $row['TRAINING_STATUS'];
        }
    }),  
    array('db' => 'ml.TRAINING_OCCUR', 'dt' => 5, 'field' => 'TRAINING_OCCUR'),
    array('db' => 'ml.TRAINING_OCCUR_NUM', 'dt' => 6, 'field' => 'TRAINING_OCCUR_NUM'),
    array('db' => 'ml.TRAINING_CREATED_TIMESTAMP', 'dt' => 7, 'field' => 'TRAINING_CREATED_TIMESTAMP'),
    array('db' => 'ml.TRAINING_START_DATE', 'dt' => 8, 'field' => 'TRAINING_START_DATE'),
    array('db' => 'ml.TRAINING_END_DATE', 'dt' => 9, 'field' => 'TRAINING_END_DATE'),
    array('db' => 'ml.TRAINING_START_TIME', 'dt' => 10, 'field' => 'TRAINING_START_TIME'),
    array('db' => 'ml.TRAINING_END_TIME', 'dt' => 11, 'field' => 'TRAINING_END_TIME'),
    array('db' => 'ml.TRAINING_REMARKS', 'dt' => 12, 'field' => 'TRAINING_REMARKS'),
    array('db' => 'ml.TRAINING_MIN_REQ', 'dt' => 13, 'field' => 'TRAINING_MIN_REQ'),
    array('db' => 'ml.TRAINING_MAX_REQ', 'dt' => 14, 'field' => 'TRAINING_MAX_REQ'),
    array('db' => 'ml.TRAINING_TRAINOR', 'dt' => 15, 'field' => 'TRAINING_TRAINOR')
); 

// Include SQL query processing class 
require '../../classes/ssp.class.customized.php'; 

// ... (remaining code)

$joinQuery = "FROM tbltraining AS ml";
$extraWhere = "";
$groupBy = "";
$having = "";

echo json_encode(
    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere, $groupBy, $having)
);
