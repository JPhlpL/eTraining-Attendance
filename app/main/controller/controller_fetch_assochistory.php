<?php 

require '../../classes/session.inc.php'; 

// mysql db table to use 
$table = 'tblsubreg_assoc'; 

// Table's primary key 
$primaryKey = 'id'; 
 
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
    array('db' => 'subreg.REG_SUB_EMP_ID', 'dt' => 2, 'field' => 'REG_SUB_EMP_ID',
        'formatter' => function ( $d , $row) use ($employee_photo_dir) {
        return "
        <a href='assocprofile.php?tnum=".$row['REG_SUB_EMP_ID']."' data-toggle='tooltip' title='View Data' id='btn-view'> 
            <button type='button' class='bg-primary border rounded px-4 py-1 font-weight-bold' style='font-size:15px;'>"."
            <i class='nav-icon fas fa-eye mr-2'></i>"
                .$row["REG_SUB_EMP_ID"].
            "</button>
        </a>";
    }),
    array('db' => 'subreg.REG_SUB_EMP_NAME', 'dt' => 3, 'field' => 'REG_SUB_EMP_NAME'),
    array('db' => 'subreg.REG_SUB_EMP_DEPT', 'dt' => 4, 'field' => 'REG_SUB_EMP_DEPT'),
    array('db' => 'subreg.REG_SUB_EMP_SECT', 'dt' => 5, 'field' => 'REG_SUB_EMP_SECT'),
    array('db' => 'subreg.REG_SUB_EMP_POSITION', 'dt' => 6, 'field' => 'REG_SUB_EMP_POSITION')
); 

// Include SQL query processing class 
require '../../classes/ssp.class.customized.php'; 

$joinQuery = "FROM tblsubreg_assoc AS subreg LEFT JOIN tbltraining_attn AS train_attn ON (subreg.REG_MAIN_NUM = train_attn.ATTN_TRAINING_NUM)";
$extraWhere = "";
$groupBy = "REG_SUB_EMP_ID";
$having = "";

echo json_encode(
    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere, $groupBy, $having)
);
