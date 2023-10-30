<?php 

require '../../classes/session.inc.php'; 

// mysql db table to use 
$table = 'tblemplist_license'; 

// $param = $_POST['param'];

// Table's primary key 
$primaryKey = 'id'; 
 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 
$columns = array( 
    array( 
        'db'        => 'lic.id',
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
    array('db' => 'lic.EMPLOYEE_LICENSE', 'dt' => 1, 'field' => 'EMPLOYEE_LICENSE'),
    array('db' => 'lic.EMPLOYEE_LIC_DESCRIPTION', 'dt' => 2, 'field' => 'EMPLOYEE_LIC_DESCRIPTION'),
    array('db' => 'lic.EMPLOYEE_LIC_START_DATE', 'dt' => 3, 'field' => 'EMPLOYEE_LIC_START_DATE'),
    array('db' => 'lic.EMPLOYEE_LIC_EXP_DATE', 'dt' => 4, 'field' => 'EMPLOYEE_LIC_EXP_DATE'),
    array( 
        'db'        => 'lic.id',
        'dt'        => 5, 
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
        'dt'        => 6,
        'field' => 'EMPLOYEE_HASHED', 
        'formatter' => function( $d, $row ) { 
            return ""; 
        }),
); 

// Include SQL query processing class 
require '../../classes/ssp.class.customized.php'; 

//! Left Join tblemployee 
$joinQuery = "FROM tblemplist_license AS lic LEFT JOIN tblemplist_main AS main ON (lic.EMPLOYEE_HASHED = main.EMPLOYEE_HASHED)";
$extraWhere = "lic.EMPLOYEE_HASHED = '".$_SESSION['param_url']."'"; //<-- Dapat Makuha yung parameter sa taas ng screen
$groupBy = "";
$having = "";

echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere, $groupBy, $having )
);
