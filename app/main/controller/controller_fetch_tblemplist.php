<?php 


require_once ('../../classes/session.inc.php');
 
// mysql db table to use 
$table = 'tblemplist_main'; 


// Table's primary key 
$primaryKey = 'id'; 
 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 
$columns = array( 
    array( 
        'db'        => 'id',
        'dt'        => 0, 
        'formatter' => function( $d, $row ) { 
            return "    
                <div class='form-check exampleCheck'>
                    <input type='checkbox' class='form-check-input selectedRow' id='exampleCheck".$row['id']."' value='".$row['id']."'>
                    <label class='form-check-label' for='exampleCheck".$row['id']."'></label>
                </div>      
            "; 
        }),
    
    array('db' => 'EMPLOYEE_ID', 'dt' => 1),
    array('db' => 'EMPLOYEE_NAME', 'dt' => 2),
    array('db' => 'EMPLOYEE_PHOTO', 'dt' => 3,
        'formatter' => function ( $d , $row) use ($employee_photo_dir) {
        if($row['EMPLOYEE_PHOTO'] == ''){
            return  "<label class='bg-danger border rounded'> <i class='p-2 nav-icon fas fa-times'>"."NO VALUE"."</i> </label>";
        }
        else {
            return  "<a class='text-dark' href='".$employee_photo_dir.$row['EMPLOYEE_PHOTO']."' data-toggle='lightbox' data-title='".$row['EMPLOYEE_PHOTO']."'>
                        <img src='".$employee_photo_dir.$row['EMPLOYEE_PHOTO']."' style='height:70px;width:80px;border-radius:3px;'>
                    </a>
                    "; 
        }
    }), 
    array('db' => 'EMPLOYEE_EMAIL', 'dt' => 4),
    array('db' => 'EMPLOYEE_MOBILE_NUM', 'dt' => 5),
    array('db' => 'EMPLOYEE_AGE', 'dt' => 6),
    array('db' => 'EMPLOYEE_GENDER', 'dt' => 7),
    array('db' => 'EMPLOYEE_DEPT', 'dt' => 8),
    array('db' => 'EMPLOYEE_SECTION', 'dt' => 9),
    array('db' => 'EMPLOYEE_POSITION', 'dt' => 10),
    array('db' => 'EMPLOYEE_JOB_LEVEL', 'dt' => 11),
    array('db' => 'EMPLOYEE_STATUS', 'dt' => 12),
    array('db' => 'EMPLOYEE_DATE_HIRED', 'dt' => 13),
    array('db' => 'EMPLOYEE_QR', 'dt' => 14),
    array('db' => 'EMPLOYEE_RFID', 'dt' => 15),
    array( 
        'db'        => 'EMPLOYEE_HASHED',
        'dt'        => 16, 
        'formatter' => function( $d, $row ) { 
            
            return 
            //! Create button to call a table in single page for his/her ultimate profile
            '<form method="post" action="tblemplist_profile.php?'.$row['EMPLOYEE_HASHED'].'">
                <input type="hidden" name="enc_hashed" value="'.htmlentities($row['EMPLOYEE_HASHED']).'">
                <button title="Employee Details" class="border border-secondary text-dark rounded">
                    <i class="p-2 nav-icon fas fa-user"></i>
                </button>
            </form>';
    }),
    array( 
        'db'        => 'id',
        'dt'        => 17, 
        'formatter' => function( $d, $row ) { 
            return ""; 
    })
); 
 
// Include SQL query processing class 
require '../../classes/ssp.class.php'; 
 
// Output data as json format 
echo json_encode( 
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns ));