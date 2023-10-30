<?php

//! Insert System History

// ----- For Excel Import Library ------
require_once "../../../plugins/SpreadsheetReader/vendor/SpreadsheetReader.php";
require_once "../../../plugins/SpreadsheetReader/vendor/php-excel-reader/excel_reader2.php";
require_once '../../config.php';


    $allowedFileType = [ "application/vnd.ms-excel", "text/xls", "text/xlsx", "text/xlsm", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"];

    $file_type = $_FILES["file"]["type"];

    if (in_array($file_type, $allowedFileType)) {

        $targetPath = "../../import/" . $_FILES["file"]["name"];

        move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);

        $sheetCount = count($Reader->sheets());

        if($sheetCount != 1)
        {
            $error_msg = array('error' => 'Invalid number of sheets');
            $json = json_encode($error_msg);
            echo($json);
            return $json;
        }
        else{
            for ($i = 0; $i < $sheetCount; $i++) {
                $Reader->ChangeSheet($i);

                foreach ($Reader as $Row) {

                    if ($i < 3) { // skip the first to third row
                        $i++;
                        continue;
                    }

                    $user_id = mysqli_real_escape_string($link, $Row[0]);
                    $user_pass = mysqli_real_escape_string($link, $Row[1]);
                    $user_name = mysqli_real_escape_string($link, $Row[2]);
                    $user_gender = mysqli_real_escape_string($link, $Row[3]);
                    $user_email = mysqli_real_escape_string($link, $Row[4]);
                    $user_dept = mysqli_real_escape_string($link, $Row[5]);
                    $user_section = mysqli_real_escape_string($link, $Row[6]);
                    $user_position = mysqli_real_escape_string($link, $Row[7]);
                    $user_mobile = mysqli_real_escape_string($link, $Row[8]);
                    $user_profilepic = mysqli_real_escape_string($link, $Row[9]);
                    $user_account_type = mysqli_real_escape_string($link, $Row[10]);
                    $user_status = mysqli_real_escape_string($link, $Row[11]);

                    //Password Hash
                    $user_pass_hashed = password_hash($user_pass, PASSWORD_DEFAULT);
                  
                    //! Check if the Foreign Key is existed
                    $query = "SELECT * FROM tbluser WHERE USER_ID = '$user_id'";
                        $result = mysqli_query($link, $query);
                            if(mysqli_num_rows( $result) > 0 ){ // update the row in the SQL database 
                                $query = "UPDATE tbluser SET USER_PASS = '$user_pass_hashed',
                                                            USER_NAME = '$user_name',
                                                            USER_GENDER = '$user_gender',
                                                            USER_EMAIL = '$user_email',
                                                            USER_DEPT = '$user_dept',
                                                            USER_SECTION = '$user_section',
                                                            USER_POSITION = '$user_position',
                                                            USER_MOBILE = '$user_mobile',
                                                            USER_PROFILEPIC = '$user_profilepic',
                                                            USER_ACCOUNT_TYPE = '$user_account_type',
                                                            USER_STATUS = '$user_status' 
                                                            WHERE USER_ID = '$user_id'"; 
                                mysqli_query($link, $query); 
                            }
                            else{ 
                                if (!empty($user_id)) {
                                //Profile Auth
                                    include ('../../classes/generateHash.php');
                                    $profile_hashed = $hash;

                                    $query =
                                        "INSERT INTO tbluser 
                                        (USER_ID, USER_PASS, USER_NAME, USER_GENDER, USER_EMAIL, USER_DEPT, USER_SECTION, USER_POSITION, USER_MOBILE, USER_PROFILEPIC, USER_ACCOUNT_TYPE, USER_STATUS, USER_PROFILE_HASHED) 
                                        VALUES('" .
                                        $user_id .
                                        "','" .
                                        $user_pass_hashed .
                                        "','" .
                                        $user_name .
                                        "','" .
                                        $user_gender .
                                        "','" .
                                        $user_email .
                                        "','" .
                                        $user_dept .
                                        "','" .
                                        $user_section .
                                        "','" .
                                        $user_position .
                                        "','" .
                                        $user_mobile .
                                        "','" .
                                        $user_profilepic .
                                        "','" .
                                        $user_account_type .
                                        "','".
                                        $user_status .
                                        "','".
                                        $profile_hashed .
                                        "')";
                                    $exec = mysqli_query($link, $query);
                                    // echo json_encode($Row);
                                }
                    }
                }
            }
        }
    } 
    elseif(!in_array($file_type, $allowedFileType)) {
    // file type not allowed
    echo json_encode(['error' => 'File type not allowed']);
    return;
}
?>
