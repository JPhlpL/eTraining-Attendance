<?php 
function _closeStmt($hstmt){
    mysqli_stmt_execute($hstmt);
    mysqli_stmt_close($hstmt);
}

//! Insert
$insert_sql = "INSERT INTO tblsystemhistory (SYSTEM_INFO_USER, SYSTEM_INFO_TRANSACT_BY, SYSTEM_INFO, SYSTEM_CAT, SYSTEM_INFO_STATUS, SYSTEM_INFO_LEVEL, SYSTEM_REMARKS, SYSTEM_NOTIFICATION)
VALUES (?,?,?,?,?,?,?,?)";

if($hstmt = mysqli_prepare($link, $insert_sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($hstmt, "ssssssss", $system_info_user, $system_info_transact_by, $system_info, $system_cat, $system_info_status, $system_info_level, $system_remarks, $system_notification);


    //! Hashed Code instead name
        switch ($mode)
        {
            case "register":
                    //? Set parameters
                    $system_info_user = $param_name; 
                    $system_info_transact_by = $param_name; 
                    $system_info = 'create Account'; 
                    $system_cat = 'User Registration'; 
                    $system_info_status = 'User Profile'; 
                    $system_info_level = '3'; 
                    $system_remarks = 'None'; 
                    $system_notification = '1';
                    _closeStmt($hstmt);
                break;
            case "createaccount":
                    //? Set parameters
                    $system_info_user = $user_name; 
                    $system_info_transact_by = $_SESSION['USER_NAME']; 
                    $system_info = 'created Account'; 
                    $system_cat = 'User Registration'; 
                    $system_info_status = 'User Profile'; 
                    $system_info_level = '3'; 
                    $system_remarks = 'None'; 
                    $system_notification = '1';
                    _closeStmt($hstmt);
                break;
            case "updateaccount":
                    //? Set parameters
                    $system_info_user = $user_name; 
                    $system_info_transact_by = $_SESSION['USER_NAME']; 
                    $system_info = 'updated Account'; 
                    $system_cat = 'User Registration'; 
                    $system_info_status = 'User Profile'; 
                    $system_info_level = '3'; 
                    $system_remarks = 'None'; 
                    $system_notification = '1';
                    _closeStmt($hstmt);
                break;
            case "deleteaccount":
                    //? Set parameters
                    $system_info_user = $user_name; 
                    $system_info_transact_by = $_SESSION['USER_NAME']; 
                    $system_info = 'delete Account'; 
                    $system_cat = 'User Registration'; 
                    $system_info_status = 'User Profile'; 
                    $system_info_level = '3'; 
                    $system_remarks = 'None'; 
                    $system_notification = '1';
                    _closeStmt($hstmt);
                break;
            case "createemployee":
                    //? Set parameters
                    $system_info_user = $employee_name; 
                    $system_info_transact_by = $_SESSION['USER_NAME']; 
                    $system_info = 'create employee'; 
                    $system_cat = 'User Registration'; 
                    $system_info_status = 'User Profile'; 
                    $system_info_level = '3'; 
                    $system_remarks = 'None'; 
                    $system_notification = '1';
                    _closeStmt($hstmt);
                break;
            case "updateemployee":
                    //? Set parameters
                    $system_info_user = $employee_name; 
                    $system_info_transact_by = $_SESSION['USER_NAME']; 
                    $system_info = 'update employee'; 
                    $system_cat = 'User Registration'; 
                    $system_info_status = 'User Profile'; 
                    $system_info_level = '3'; 
                    $system_remarks = 'None'; 
                    $system_notification = '1';
                    _closeStmt($hstmt);
                break;
            case "deleteemployee":
                    //? Set parameters
                    $system_info_user = $employeeName; 
                    $system_info_transact_by = $_SESSION['USER_NAME']; 
                    $system_info = 'delete employee'; 
                    $system_cat = 'User Registration'; 
                    $system_info_status = 'User Profile'; 
                    $system_info_level = '3'; 
                    $system_remarks = 'None'; 
                    $system_notification = '1';
                    _closeStmt($hstmt);
                break;
            default:
                break;
        }
}  
?>