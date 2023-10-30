<?php 

require '../../classes/session.inc.php'; 

// mysql db table to use 
$table = 'tblemplist_main_history'; 

// $param = $_POST['param'];

// Table's primary key 
$primaryKey = 'id'; 
 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 
$columns = array( 
    array( 
        'db'        => 'main.id',
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
    array('db' => 'main.EMPLOYEE_ID', 'dt' => 1, 'field' => 'EMPLOYEE_ID'),
    array('db' => 'main.EMPLOYEE_NAME', 'dt' => 2, 'field' => 'EMPLOYEE_NAME'),
    array('db' => 'main.EMPLOYEE_EMAIL', 'dt' => 3, 'field' => 'EMPLOYEE_EMAIL'),
    array('db' => 'main.EMPLOYEE_MOBILE_NUM', 'dt' => 4, 'field' => 'EMPLOYEE_MOBILE_NUM'),
    array('db' => 'main.EMPLOYEE_AGE', 'dt' => 5, 'field' => 'EMPLOYEE_AGE'),
    array('db' => 'main.EMPLOYEE_GENDER', 'dt' => 6, 'field' => 'EMPLOYEE_GENDER'),
    array('db' => 'main.EMPLOYEE_DEPT', 'dt' => 7, 'field' => 'EMPLOYEE_DEPT'),
    array('db' => 'main.EMPLOYEE_SECTION', 'dt' => 8, 'field' => 'EMPLOYEE_SECTION'),
    array('db' => 'main.EMPLOYEE_POSITION', 'dt' => 9, 'field' => 'EMPLOYEE_POSITION'),
    array('db' => 'main.EMPLOYEE_JOB_LEVEL', 'dt' => 10, 'field' => 'EMPLOYEE_JOB_LEVEL'),
    array('db' => 'main.EMPLOYEE_STATUS', 'dt' => 11, 'field' => 'EMPLOYEE_STATUS'),
    array('db' => 'main.EMPLOYEE_DATE_HIRED', 'dt' => 12, 'field' => 'EMPLOYEE_DATE_HIRED'),
    array('db' => 'main.EMPLOYEE_QR', 'dt' => 13, 'field' => 'EMPLOYEE_QR'),
    array('db' => 'main.EMPLOYEE_RFID', 'dt' => 14, 'field' => 'EMPLOYEE_RFID'),

    array( 
        'db'        => 'main.id',
        'dt'        => 15, 
        'field' => 'id',
        'formatter' => function( $d, $row ) { 
            return 
            '<a href="javascript:void(0)" data-toggle="tooltip" title="Edit Data" id="btn-edit" class="border border-secondary text-dark rounded" data-id="'.$row['id'].'"> 
                <i class="p-2 nav-icon fas fa-pencil-alt"></i>
            </a> 
            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete Data" id="btn-delete" class="border border-secondary text-dark rounded ml-2" data-id="'.$row['id'].'"> 
                <i class="p-2 nav-icon fas fa-trash-alt"></i>
            </a>'; 
        }),
    array( 
        'db'        => 'main.EMPLOYEE_HASHED',
        'dt'        => 16,
        'field' => 'EMPLOYEE_HASHED', 
        'formatter' => function( $d, $row ) { 
            return ""; 
        }),
); 

// Include SQL query processing class 
require '../../classes/ssp.class.customized.php'; 

//! Left Join tblemployee 
$joinQuery = "FROM tblemplist_main_history AS main";
$extraWhere = "main.EMPLOYEE_HASHED = '".$_SESSION['param_url']."'"; //<-- Dapat Makuha yung parameter sa taas ng screen
$groupBy = "";
$having = "";

echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere, $groupBy, $having )
);
