<?php

require_once "../../config.php";
// require_once '../../classes/generateHash.php';

$sql = "SELECT * FROM tblemplist_main";

if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {

            $seed = str_split('abcdefghijklmnopqrstuvwxyz'
            .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
            .'0123456789!@%^&*()'); // and any other characters
            shuffle($seed); // probably optional since array_is randomized; this may be redundant
            $rand = '';
            foreach (array_rand($seed, 30) as $k) {
                $rand .= $seed[$k];
            }
            $hash = '#'.$rand;

        $updatequery = mysqli_query($link, "UPDATE tblemplist_main SET EMPLOYEE_HASHED = '$hash' WHERE EMPLOYEE_ID = '".$row['EMPLOYEE_ID']."'");
        }

        mysqli_free_result($result);
        echo "true";
    } else {
        return false;
    }
} else {
    echo "ERROR: Could not able to execute $sql. " .
        mysqli_error($link);
}
?>
