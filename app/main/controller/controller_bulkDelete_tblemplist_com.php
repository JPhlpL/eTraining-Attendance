<?php 
// Database connection info 
require_once '../../config.php';
$data_ids = $_REQUEST['data_ids'];
$data_id_array = explode(",", $data_ids); 
if(!empty($data_id_array)) {
    foreach($data_id_array as $id) {
        $sql = "DELETE FROM tblemplist_com ";
        $sql.=" WHERE id = '".$id."'";
        $query=mysqli_query($link, $sql) or die("controller_bulkDelete_tblemplist_com.php: delete com");
    }
}
?>