<?php 


require_once '../../config.php';
 
// mysql db table to use 
$table = 'tbluser'; 


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
    array( 'db' => 'USER_ID', 'dt' => 1 ), 
    array( 'db' => 'USER_NAME', 'dt' => 2 ), 
    array( 'db' => 'USER_GENDER', 'dt' => 3 ), 
    array( 'db' => 'USER_EMAIL', 'dt' => 4 ), 
    array( 'db' => 'USER_DEPT', 'dt' => 5 ), 
    array( 'db' => 'USER_SECTION', 'dt' => 6 ), 
    array( 'db' => 'USER_POSITION', 'dt' => 7 ), 
    array( 'db' => 'USER_MOBILE', 'dt' => 8 ), 
    array( 'db' => 'USER_ACCOUNT_TYPE', 'dt' => 9 ), 
    array( 'db' => 'USER_PROFILEPIC', 
           'dt' => 10,
           'formatter' => function ( $d , $row) use ($user_profilepic_dir) {
            return "<img alt='User Image' height=80 class='img-circle elevation-2' src='".$user_profilepic_dir.$row['USER_PROFILEPIC']."'/>".'</td>'; 
           }), 
    array( 'db' => 'USER_PROFILE_HASHED', 'dt' => 11 ), 
    array( 
        'db'        => 'id',
        'dt'        => 12, 
        'formatter' => function( $d, $row ) { 
            return 
            //! Create Hashcode for tbluser
            '<a href="userManagement_editUser.php?'.$row['USER_PROFILE_HASHED'].'" title="Edit Data" class="border border-secondary text-dark rounded"> 
                <i class="p-2 nav-icon fas fa-pencil-alt"></i>
            </a>'; 
        }),
    array( 
        'db'        => 'id',
        'dt'        => 13, 
        'formatter' => function( $d, $row ) { 
            return ""; 
        }),
); 
 
// Include SQL query processing class 
require '../../classes/ssp.class.php'; 
 
// Output data as json format 
echo json_encode( 
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns ));