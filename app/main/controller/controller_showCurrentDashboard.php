<?php
require_once '../../config.php';

$action = $_GET['dashboard_action'];
// $table = 'tblburrsummary';
// $primaryKey = 'id';

switch ($action) {

    case 'showTotalUsers':
        $query = "SELECT COUNT(*) AS TOTAL_USERS from tbluser";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_assoc($result);
        echo json_encode(array("TOTAL_USERS" => $row["TOTAL_USERS"]));
        break;
    // case 'showTotalTransactions':
    //     $query = "SELECT COUNT(*) AS TOTAL_BURRSUMMARY from tblburrsummary";
    //     $result = mysqli_query($link, $query);
    //     $row = mysqli_fetch_assoc($result);
    //     echo json_encode(array("TOTAL_BURRSUMMARY" => $row["TOTAL_BURRSUMMARY"]));
    //     break;
    //     //! Redo Logic
    // case 'showOpenStatus':
    //     $query = "SELECT COUNT(DISTINCT BS_PART_NUMBER) AS TOTAL_OPEN FROM tblburrsummary WHERE BS_BURR_LOCATION_AFTER != 0";
    //     $result = mysqli_query($link, $query);
    //     $row = mysqli_fetch_assoc($result);
    //     echo json_encode(array("TOTAL_OPEN" => $row["TOTAL_OPEN"]));
    //     break;
    // case 'showClosedStatus':
    //     $query = "SELECT COUNT(DISTINCT BS_PART_NUMBER) AS TOTAL_CLOSED FROM tblburrsummary WHERE BS_BURR_LOCATION_AFTER = 0";
    //     $result = mysqli_query($link, $query);
    //     $row = mysqli_fetch_assoc($result);
    //     echo json_encode(array("TOTAL_CLOSED" => $row["TOTAL_CLOSED"]));
    //     break;
    // case 'showGraph':
    //     $sqlQuery = "SELECT BS_SUPPLIER, COUNT(CASE WHEN BS_BURR_LOCATION_AFTER = 0 then 1 else null end) AS TOTAL_CLOSED, 
    //                                      COUNT(CASE WHEN BS_BURR_LOCATION_AFTER != 0 then 1 else null end) AS TOTAL_OPEN 
    //                     FROM tblburrsummary";
    //     $result = mysqli_query($link, $sqlQuery);
    //     $data = array();
    //     foreach ($result as $row) {
    //         $data[] = array(
    //             'BS_SUPPLIER'              =>    $row["BS_SUPPLIER"],
    //             'TOTAL_CLOSED'             =>    $row["TOTAL_CLOSED"],
    //             'TOTAL_OPEN'               =>    $row["TOTAL_OPEN"],
    //             'label'                    =>    $row["BS_SUPPLIER"]
    //         );
    //     }
    //     echo json_encode($data);
    //     break;
    // case 'showPieTotal':
    //     $sqlQuery = "SELECT BS_SUPPLIER, COUNT(CASE WHEN BS_BURR_LOCATION_AFTER = 0 then 1 else null end) AS TOTAL_CLOSED, 
    //                                      COUNT(CASE WHEN BS_BURR_LOCATION_AFTER != 0 then 1 else null end) AS TOTAL_OPEN 
    //                     FROM tblburrsummary";
    //     $result = mysqli_query($link, $sqlQuery);
    //     $data = array();
    //     foreach ($result as $row) {
    //         $data[] = array(
    //             'BS_SUPPLIER'              =>    $row["BS_SUPPLIER"],
    //             'TOTAL_CLOSED'             =>    $row["TOTAL_CLOSED"],
    //             'TOTAL_OPEN'               =>    $row["TOTAL_OPEN"],
    //             'label'                    =>    $row["BS_SUPPLIER"]
    //         );
    //     }
    //     echo json_encode($data);
    //     break;
    // case 'showProgress': 
    //     $columns = array(
    //         array(
    //             'db' => 'BS_BURR_LOCATION_AFTER', 'dt' => 0, 'field' => 'BS_BURR_LOCATION_AFTER',
    //             'formatter' => function ($d, $row) {

    //                 include('controller_count_progress.php');
    //                 return "<div class='progress progress-sm'>
    //                 <div class='progress-bar progress-bar-animated progress-bar-striped bg-green' role='progressbar' aria-valuenow='" . $value . "' aria-valuemin='0' aria-valuemax='100' style='width: " . $value . "%'>
    //                 </div>
    //             </div>
    //             <small>
    //                 " . $value . "% Complete
    //             </small>";
    //             }
    //         ),
    //         array('db' => 'BS_SUPPLIER', 'dt' => 1, 'field' => 'BS_SUPPLIER'),
    //         array(
    //             'db' => 'BS_PART_NUMBER', 'dt' => 2, 'field' => 'BS_PART_NUMBER',
    //             'formatter' => function ($d, $row) {
    //                 return "
    //                 <a href='tblburrsheet_partnum.php?&PNUM=" . $row['BS_PART_NUMBER'] . "' data-toggle='tooltip' title='View Data' id='btn-view'> 
    //                     <button class='bg-primary border rounded px-4 py-1 font-weight-bold' style='font-size:15px;'>" . "
    //                     <i class='nav-icon fas fa-eye mr-2'></i>"
    //                                 . $row["BS_PART_NUMBER"] .
    //                                 "</button>
    //                 </a>";
    //             }
    //         ),
    //         array(
    //             'db' => 'BS_PART_NAME', 'dt' => 3, 'field' => 'BS_PART_NAME',
    //             'formatter' => function ($d, $row) {
    //                 return '<label class="bg-secondary border rounded px-4 py-1" style="font-size:15px;">' . $row["BS_PART_NAME"] . '</label>';
    //             }
    //         ),
    //         array('db' => 'BS_MODEL', 'dt' => 4, 'field' => 'BS_MODEL'),
    //         array('db' => 'BS_MOLDTYPE', 'dt' => 5, 'field' => 'BS_MOLDTYPE'),
    //         array('db' => 'BS_CURRENT_NUMBER_BURRS', 'dt' => 6, 'field' => 'BS_CURRENT_NUMBER_BURRS'),
    //         array('db' => 'BS_CURRENT_DBURR_POINTS', 'dt' => 7, 'field' => 'BS_CURRENT_DBURR_POINTS'),
    //         array('db' => 'BS_DELIVERY_CONFIRMATION', 'dt' => 8, 'field' => 'BS_DELIVERY_CONFIRMATION'),
    //         array('db' => 'BS_REPAIR_DATE', 'dt' => 9, 'field' => 'BS_REPAIR_DATE'),
    //         array(
    //             'db' => 'BS_BEFORE_REPAIR', 'dt' => 10, 'field' => 'BS_BEFORE_REPAIR',
    //             'formatter' => function ($d, $row) {
    //                 return '<label class="bg-warning border rounded px-3" style="font-size:15px;">' . $row["BS_BEFORE_REPAIR"] . '</label>';
    //             }
    //         ),
    //         array(
    //             'db' => 'BS_AFTER_REPAIR', 'dt' => 11, 'field' => 'BS_AFTER_REPAIR',
    //             'formatter' => function ($d, $row) {
    //                 return '<label class="bg-success border rounded px-3" style="font-size:15px;">' . $row["BS_AFTER_REPAIR"] . '</label>';
    //             }
    //         ),
    //         array(
    //             'db' => 'BS_BURR_LOCATION_BEFORE', 'dt' => 12, 'field' => 'BS_BURR_LOCATION_BEFORE',
    //             'formatter' => function ($d, $row) {

    //                 // Find a "," inside a string
    //                 if (strstr($row['BS_BURR_LOCATION_BEFORE'], ',')) {
    //                     return '<label class="bg-danger border rounded px-3" style="font-size:15px;">' . str_replace(',', '</label><label class="bg-danger border rounded px-3" style="font-size:15px;">', $row['BS_BURR_LOCATION_BEFORE']) . '</label>';
    //                 } else {
    //                     return '<label class="bg-danger border rounded px-3" style="font-size:15px;">' . $row["BS_BURR_LOCATION_BEFORE"] . '</label>';
    //                 }
    //             }
    //         ),
    //         array(
    //             'db' => 'BS_BURR_LOCATION_AFTER', 'dt' => 13, 'field' => 'BS_BURR_LOCATION_AFTER',
    //             'formatter' => function ($d, $row) {

    //                 // Find a "," inside a string
    //                 if (strstr($row['BS_BURR_LOCATION_AFTER'], ',')) {
    //                     return '<label class="bg-danger border rounded px-3" style="font-size:15px;">' . str_replace(',', '</label><label class="bg-danger border rounded px-3" style="font-size:15px;">', $row['BS_BURR_LOCATION_AFTER']) . '</label>';
    //                 } else {
    //                     return '<label class="bg-danger border rounded px-3" style="font-size:15px;">' . $row["BS_BURR_LOCATION_AFTER"] . '</label>';
    //                 }
    //             }
    //         ),
    //         array('db' => 'BS_ENCODER', 'dt' => 14, 'field' => 'BS_ENCODER'),
    //         array(
    //             'db' => 'BS_ILLUSTRATION', 'dt' => 15, 'field' => 'BS_ILLUSTRATION',
    //             'formatter' => function ($d, $row) use ($attachments_dir) {
    //                 if ($row['BS_ILLUSTRATION'] == '') {
    //                     return  "<label class='bg-danger border rounded px-3 style=\"font-size:15px;\"> <i class='p-2 nav-icon fas fa-times'>" . "No Image Found" . "</i> </label>";
    //                 } else {
    //                     return  "<a class='text-dark' href='" . $attachments_dir . $row['BS_ILLUSTRATION'] . "' data-toggle='lightbox' data-title='" . $row['BS_ILLUSTRATION'] . "'>
    //                             <label class='px-3 bg-info border rounded' style=\"font-size:15px;\"> Click to see Image </label>
    //                         </a>
    //                         ";
    //                 }
    //             }
    //         ),
    //         array(
    //             'db'        => 'id',
    //             'dt'        => 16,
    //             'field' => 'id',
    //             'formatter' => function ($d, $row) {
    //                 return '';
    //             }
    //         )
    //     );

    //     require '../../classes/ssp.class.customized.php';

    //     $joinQuery = "FROM tblburrsummary";
    //     $extraWhere = "id IN (SELECT MAX(id) AS id
    //     FROM tblburrsummary 
    //     GROUP BY BS_PART_NUMBER)";
    //     $groupBy = "BS_PART_NUMBER";
    //     $having = "";

    //     echo json_encode(
    //         SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere, $groupBy, $having)
    //     );
    //     break;
    // case 'showRecentAdd':
    //     $columns = array(
    //         array('db' => 'BS_SUPPLIER', 'dt' => 0, 'field' => 'BS_SUPPLIER'),
    //         array(
    //             'db' => 'BS_PART_NUMBER', 'dt' => 1, 'field' => 'BS_PART_NUMBER',
    //             'formatter' => function ($d, $row) {
    //                 return "
    //                 <a href='tblburrsheet_partnum.php?&PNUM=" . $row['BS_PART_NUMBER'] . "' data-toggle='tooltip' title='View Data' id='btn-view'> 
    //                     <button class='bg-primary border rounded px-4 py-1 font-weight-bold' style='font-size:15px;'>" . "
    //                     <i class='nav-icon fas fa-eye mr-2'></i>"
    //                                 . $row["BS_PART_NUMBER"] .
    //                                 "</button>
    //                 </a>";
    //             }
    //         ),
    //         array(
    //             'db' => 'BS_PART_NAME', 'dt' => 2, 'field' => 'BS_PART_NAME',
    //             'formatter' => function ($d, $row) {
    //                 return '<label class="bg-secondary border rounded px-4 py-1" style="font-size:15px;">' . $row["BS_PART_NAME"] . '</label>';
    //             }
    //         ),
    //         array('db' => 'BS_TRANSACT_DATETIME', 'dt' => 3, 'field' => 'BS_TRANSACT_DATETIME'),
    //         array('db' => 'BS_MODEL', 'dt' => 4, 'field' => 'BS_MODEL'),
    //         array('db' => 'BS_MOLDTYPE', 'dt' => 5, 'field' => 'BS_MOLDTYPE'),
    //         array('db' => 'BS_CURRENT_NUMBER_BURRS', 'dt' => 6, 'field' => 'BS_CURRENT_NUMBER_BURRS'),
    //         array('db' => 'BS_CURRENT_DBURR_POINTS', 'dt' => 7, 'field' => 'BS_CURRENT_DBURR_POINTS'),
    //         array('db' => 'BS_DELIVERY_CONFIRMATION', 'dt' => 8, 'field' => 'BS_DELIVERY_CONFIRMATION'),
    //         array('db' => 'BS_REPAIR_DATE', 'dt' => 9, 'field' => 'BS_REPAIR_DATE'),
    //         array(
    //             'db' => 'BS_BEFORE_REPAIR', 'dt' => 10, 'field' => 'BS_BEFORE_REPAIR',
    //             'formatter' => function ($d, $row) {
    //                 return '<label class="bg-warning border rounded px-3" style="font-size:15px;">' . $row["BS_BEFORE_REPAIR"] . '</label>';
    //             }
    //         ),
    //         array(
    //             'db' => 'BS_AFTER_REPAIR', 'dt' => 11, 'field' => 'BS_AFTER_REPAIR',
    //             'formatter' => function ($d, $row) {
    //                 return '<label class="bg-success border rounded px-3" style="font-size:15px;">' . $row["BS_AFTER_REPAIR"] . '</label>';
    //             }
    //         ),
    //         array(
    //             'db' => 'BS_BURR_LOCATION_BEFORE', 'dt' => 12, 'field' => 'BS_BURR_LOCATION_BEFORE',
    //             'formatter' => function ($d, $row) {

    //                 // Find a "," inside a string
    //                 if (strstr($row['BS_BURR_LOCATION_BEFORE'], ',')) {
    //                     return '<label class="bg-danger border rounded px-3" style="font-size:15px;">' . str_replace(',', '</label><label class="bg-danger border rounded px-3" style="font-size:15px;">', $row['BS_BURR_LOCATION_BEFORE']) . '</label>';
    //                 } else {
    //                     return '<label class="bg-danger border rounded px-3" style="font-size:15px;">' . $row["BS_BURR_LOCATION_BEFORE"] . '</label>';
    //                 }
    //             }
    //         ),
    //         array(
    //             'db' => 'BS_BURR_LOCATION_AFTER', 'dt' => 13, 'field' => 'BS_BURR_LOCATION_AFTER',
    //             'formatter' => function ($d, $row) {

    //                 // Find a "," inside a string
    //                 if (strstr($row['BS_BURR_LOCATION_AFTER'], ',')) {
    //                     return '<label class="bg-danger border rounded px-3" style="font-size:15px;">' . str_replace(',', '</label><label class="bg-danger border rounded px-3" style="font-size:15px;">', $row['BS_BURR_LOCATION_AFTER']) . '</label>';
    //                 } else {
    //                     return '<label class="bg-danger border rounded px-3" style="font-size:15px;">' . $row["BS_BURR_LOCATION_AFTER"] . '</label>';
    //                 }
    //             }
    //         ),
    //         array('db' => 'BS_ENCODER', 'dt' => 14, 'field' => 'BS_ENCODER'),
    //         array(
    //             'db' => 'BS_ILLUSTRATION', 'dt' => 15, 'field' => 'BS_ILLUSTRATION',
    //             'formatter' => function ($d, $row) use ($attachments_dir) {
    //                 if ($row['BS_ILLUSTRATION'] == '') {
    //                     return  "<label class='bg-danger border rounded px-3 style=\"font-size:15px;\"> <i class='p-2 nav-icon fas fa-times'>" . "No Image Found" . "</i> </label>";
    //                 } else {
    //                     return  "<a class='text-dark' href='" . $attachments_dir . $row['BS_ILLUSTRATION'] . "' data-toggle='lightbox' data-title='" . $row['BS_ILLUSTRATION'] . "'>
    //                             <label class='px-3 bg-info border rounded' style=\"font-size:15px;\"> Click to see Image </label>
    //                         </a>
    //                         ";
    //                 }
    //             }
    //         ),
           
    //         array(
    //             'db'        => 'id',
    //             'dt'        => 16,
    //             'field' => 'id',
    //             'formatter' => function ($d, $row) {
    //                 return '';
    //             }
    //         )
    //     );

    //     require '../../classes/ssp.class.customized.php';

    //     $joinQuery = "FROM tblburrsummary";
    //     $extraWhere = "";
    //     $groupBy = "";
    //     $having = "";

    //     echo json_encode(
    //         SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere, $groupBy, $having)
    //     );
    //     break;
    default:
        break;
}
