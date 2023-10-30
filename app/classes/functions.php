<?php 


require_once ('../../classes/declaration.php');


// For Add To Cart Function
if(param_title() == "addRequestForm.php" || param_title() == "addtocart.php")
{
    // Select Previous Data
    $selectPrevData = mysqli_query($link,"SELECT IT_TRANSACTION_ID transactID FROM tblrequest_form ORDER BY id DESC LIMIT 1");
    $prevDataRow = mysqli_fetch_array($selectPrevData);

    if(isset($prevDataRow['transactID'])){
        $getPrevDataRow = explode('F',$prevDataRow['transactID']);
        $getPrevData = $getPrevDataRow[1];
        //Increment by 1
        $currentTransactNum = $getPrevData + 1;
        $currentTransactID = $getPrevDataRow[0].'F'.$currentTransactNum;
    }
    else{
        $currentTransactID = "DNPH2022-F1";
    }
}

//Getting the Code Hashed Transaction
if(param_title() == "editRequestForm.php" || param_title() == "approveRequestForm.php" || param_title() == "returnRequestForm.php" || param_title() == "monitorRequestForm.php")
{
    function getTransactCode(){
        $param_url = explode('?', $_SERVER['REQUEST_URI']);
        $param_id = $param_url[1];
        return $param_id;
    }
    getTransactCode();
   
    // Get the Current Transaction
    $getCurrentTransaction = "SELECT * FROM tblrequest_form WHERE IT_TRANSACTION_CODE_HASHED = '".getTransactCode()."'";
    $getCurrentTransactionQuery = mysqli_query($link,$getCurrentTransaction);
    $getCurrentRow = mysqli_fetch_array($getCurrentTransactionQuery);

    $request_id = $getCurrentRow['IT_TRANSACTION_ID'];
    $requestor = $getCurrentRow['IT_BORROWER_NAME'];
    $dateFrom = $getCurrentRow['IT_DATE_FROM'];
    $dateTo = $getCurrentRow['IT_DATE_TO'];
    $requestRemarks = $getCurrentRow['IT_REMARKS'];
    $purpose = $getCurrentRow['IT_PURPOSE'];

    $getCurrentRequestItems = "SELECT * FROM tblrequest_item WHERE IT_REQUEST_TRANSACTION_ID = '$request_id'";
    $getCurrentItemsQuery = mysqli_query($link,$getCurrentRequestItems);
    $getAllItemRow = mysqli_fetch_array($getCurrentItemsQuery);

    $item_name = $getAllItemRow['IT_REQUEST_ITEM_NAME'];
    $item_control_number = $getAllItemRow['IT_REQUEST_CONTROL_NUMBER'];
    $item_quantity = $getAllItemRow['IT_REQUEST_ITEM_QUANTITY'];
    $item_request_remarks = $getAllItemRow['IT_REQUEST_ITEM_REMARKS'];   
}

if(param_title() !== "login.php" && param_title() !== "pending_account.php" && param_title() !== "username_validation.php" && param_title() !== "register.php" && param_title() !== "success_register_account.php")
{
    $user_id = $_SESSION["USER_ID"];
    $user_name = $_SESSION["USER_NAME"];
    $user_type = $_SESSION["USER_ACCOUNT_TYPE"];
}

// Update Own Employee Profile
if(param_title()=="updateprofile.php"){
    $profilesql = "SELECT user.USER_ID userID, emplist.EMPLOYEE_ID employeeId, emplist.EMPLOYEE_HASHED empEnc 
                  FROM tbluser user 
                  JOIN tblemplist_main emplist 
                  ON user.USER_ID = emplist.EMPLOYEE_ID 
                  WHERE user.USER_ID = '$user_id'";
    $profilequery = mysqli_query($link,$profilesql);
    $profileInfo = mysqli_fetch_assoc($profilequery);
    $profileEnc = $profileInfo['empEnc'];
} 


// Update Own Employee Profile 


// Getting the URL ID Paramater
    if(param_title()=="comment.php"){
        function getUrlParam()
        {
            $url = $_SERVER['REQUEST_URI'];
            $url_param = explode('?',$url);
            $param_id = $url_param[1];
            return $param_id;
        }
        $param_id = getUrlParam();
    }
// Getting the URL ID Paramater

// Putting Count in Comment Portion
    if(param_title()=="announcement.php")
    {
        // function getCountComment($link){
        //     global $displayRow;
        //     $count_comment_sql = "SELECT COUNT(*) AS total_comment FROM tblcomment WHERE COMMENT_ANNOUNCE_ID = '".$displayRow['aId']."'";
        //     $count_query = mysqli_query($link,$count_comment_sql);
        //     $count_all_comment = mysqli_fetch_array($count_query);
        //     $countComment = $count_all_comment['total_comment'];
        //     return $countComment;
        // }
        // $total_comment_count = getCountComment($link);
        
    }
// Putting Count in Comment Portion

// POST tblemplist to tblemplist_profile
if(param_title()=="tblemplist_profile.php")
{
    if(isset($_POST['enc_hashed']))
    {
        $_SESSION['param_url'] = $_POST['enc_hashed']; 
    }
    
}
// POST tblemplist to tblemplist_profile

// POST tblemplist to tblemplist_profile
if(param_title()=="advanceprofile.php")
{
    if(isset($_POST['user_enc']))
    {
        $_SESSION['param_url'] = $_POST['user_enc']; 
    }
    
}
// POST tblemplist to tblemplist_profile

//Count All Users
    function countAllUsers($link){
        global $param_title;
        if($param_title != "changeprofilepic.php"){
            $count_all_sql = "SELECT COUNT(*) AS total FROM tbluser";
            $count_all_result = mysqli_query($link,$count_all_sql);
            $count_all_row = mysqli_fetch_array($count_all_result);
            $countAll = $count_all_row['total'];
            echo $countAll;
        }
        else { echo ""; }
    }
//Count All Users


//Greet Name
    function greetProfile($name)
    {
        $namestring = explode(',',$name);
        $greet_name = $namestring[1];
        $greetings = "Hello! ". $greet_name;
        $proper_greet = strtolower($greetings);
        return ucwords($proper_greet);
    }

//Count All Notifications
function countAllNotif($link){
    $count_all_sql = "SELECT COUNT(*) as CountNotif FROM tblsystemhistory notif
    JOIN tbluser user
    ON notif.SYSTEM_INFO_USER = user.USER_NAME
    WHERE SYSTEM_INFO_USER = '".$_SESSION['USER_NAME']."' AND SYSTEM_STATUS = 'NEW' ";
    $count_all_result = mysqli_query($link,$count_all_sql);
    $count_all_row = mysqli_fetch_array($count_all_result);
    $countAll = $count_all_row['CountNotif'];
    echo $countAll;
}
//Count All Notifications

//Count All Employees
function countAllEmployees($link){
    global $param_title;
    if($param_title != "changeprofilepic.php"){
        $count_all_sql = "SELECT COUNT(*) AS total FROM tblemplist_main";
        $count_all_result = mysqli_query($link,$count_all_sql);
        $count_all_row = mysqli_fetch_array($count_all_result);
        $countAll = $count_all_row['total'];
        echo $countAll;
    }
    else { echo ""; }
}
//Count All Employees


//if the admin tool is open\
    switch(param_title())
    {
        case "userManagement.php":
        case "tblemplist.php":
        case "tblemplist_profile.php":
        case "tblemplist_edu.php":
        case "tblemplist_license.php":
        case "tblemplist_com.php":
        case "tblemplist_tech_skill.php":
        case "tblemplist_comp_skill.php":
        case "userManagement_addUser.php":
        case "userManagement_editUser.php":
        case "emailConfig.php":
        case "systemConfig.php":
        case "tbltoDoList.php":
        case "fileManagement.php":
        case "tblfiles.php":
        case "toDoList.php":
        case "viewToDoList.php":
            $menuSet = "menu-open";
            $navLink = "active";
            break;
        default:
            $menuSet = "menu";
            $navLink = "";
            break;
    }
//if the admin tool is open\

//if the request tool is open\
switch(param_title())
{
    case "tblrequest.php":
    case "cartrequest.php":
    case "addtocart.php":
        $menuSetRequest = "menu-open";
        $navLinkRequest = "active";
        break;
    default:
        $menuSetRequest = "menu";
        $navLinkRequest = "";
        break;
}
//if the request tool is open\

//! For Excel File Sample Format
switch(param_title())
{
    case "userManagement.php":
        $excel_file = "sampleUser.xlsx";
        break;
    default:
        break;
}

//! Fetch training info parameter url 
if(param_title() == "traininginfo.php"){
    if(isset($_GET['tnum'])){
        $transact_num = $_GET['tnum'];
        //List row regarding to the current transaction
        $curr_tran = "SELECT * FROM tbltraining WHERE TRAINING_NUM = '$transact_num'";
        $curr_tran_query = mysqli_query($link,$curr_tran);
        $ctr = mysqli_fetch_array($curr_tran_query);
        $trainer = $ctr['TRAINING_TRAINOR'];
        $status = $ctr['TRAINING_STATUS'];

        //* Query if the total number of attendees are in between of min max 
        $attendees = "SELECT COUNT(a.REG_SUB_EMP_NAME) AS COUNT_REG, b.TRAINING_MIN_REQ AS TRAINING_MIN_REQ, b.TRAINING_MAX_REQ AS TRAINING_MAX_REQ 
                        FROM tblsubreg_assoc a JOIN tbltraining b 
                        ON a.REG_SUB_TRAINING_NUM = b.TRAINING_NUM
                        WHERE a.REG_SUB_TRAINING_NUM = '".$_GET['tnum']."'";
        $attend_query = mysqli_query($link, $attendees);
        $reg_row = mysqli_fetch_array($attend_query);
        $total_reg = $reg_row['COUNT_REG'];
        $min_reg = $reg_row['TRAINING_MIN_REQ'];
        $max_reg = $reg_row['TRAINING_MAX_REQ'];
        if($total_reg >= $max_reg || $total_reg <= $min_reg){
        }
    }

    
    //! Put a function if the training is cancelled it can't be register or cancel
}



?>   