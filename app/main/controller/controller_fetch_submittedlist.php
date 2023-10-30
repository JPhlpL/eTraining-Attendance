<?php 

require '../../classes/session.inc.php'; 

// mysql db table to use 
$table = 'tbltraining'; 


// Table's primary key 
$primaryKey = 'id'; 
 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 

//! FIXED SUBMITTEDLIST

//! Unahin yung last response for automatic notification
$columns = array( 
    array( 
        'db'        => 'reg.id',
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
    array('db' => 'reg.REG_NUM', 'dt' => 1, 'field' => 'REG_NUM',
    'formatter' => function ( $d , $row) {
        return "
        <a href='reg_form.php?tnum=".$row['REG_NUM']."' data-toggle='tooltip' title='View Data' id='btn-view'> 
            <button type='button' class='bg-primary border rounded px-4 py-1 font-weight-bold' style='font-size:15px;'>"."
            <i class='nav-icon fas fa-eye mr-2'></i>"
                .$row["REG_NUM"].
            "</button>
        </a>";
    }),  
    array('db' => 'reg.REG_TRAINING_NUM', 'dt' => 2, 'field' => 'REG_TRAINING_NUM'),
    array('db' => 'reg.REG_LEADER_ID', 'dt' => 3, 'field' => 'REG_LEADER_ID'),
    array('db' => 'reg.REG_LEADER_NAME', 'dt' => 4, 'field' => 'REG_LEADER_NAME'),
    array('db' => 'reg.REG_EMP_DEPT', 'dt' => 5, 'field' => 'REG_EMP_DEPT'),
    array('db' => 'reg.REG_EMP_SECT', 'dt' => 6, 'field' => 'REG_EMP_SECT'),
    array('db' => 'reg.REG_REMARKS', 'dt' => 7, 'field' => 'REG_REMARKS'),
    array('db' => 'reg.REG_STATUS', 'dt' => 8, 'field' => 'REG_STATUS'),
    array('db' => 'reg.REG_TIMESTAMP', 'dt' => 9, 'field' => 'REG_TIMESTAMP')
); 

// Include SQL query processing class 
require '../../classes/ssp.class.customized.php'; 

// ... (remaining code)

$joinQuery = "FROM tblreg_assoc AS reg";
$extraWhere = "reg.REG_LEADER_ID = '".$_SESSION['USER_ID']."'";
$groupBy = "";
$having = "";

echo json_encode(
    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere, $groupBy, $having)
);
