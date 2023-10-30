<?php 

// For Not Showing Error
ini_set('display_errors', 0);
error_reporting(0);

$latest_msg_sql = "SELECT a.IT_TRANSACTION_ID transactID, a.IT_TRANSACTION_CODE_HASHED transactCode, a.IT_BORROWER_NAME borrowerName, 
    a.IT_DATE_FROM borrowFrom, a.IT_DATE_TO borrowTo, a.IT_REMARKS borrowRemarks, a.IT_PURPOSE borrowPurpose, 
    a.IT_TRANSACTION_CODE_HASHED hashedCode, a.IT_DECLINE_REASON declineReason, 
    a.IT_BORROW_TYPE borrowType, a.IT_FORM_APPROVER approverName, a.IT_APPROVER_EMAIL approverEmail, a.IT_APPROVE_STATUS approverStatus,
    a.IT_STAFF_PIC staffPIC, a.IT_CHECKER_PIC checkerPIC, a.IT_CHECKER_DATEOUT checkerDateOut, a.IT_CHECKER_DATEIN checkerDateIn,
    b.IT_REQUEST_ITEM_QUANTITY requestItemQty, b.IT_REQUEST_ITEM_NAME itemName, b.IT_REQUEST_CONTROL_NUMBER controlNumber,
    c.USER_EMAIL borrowerEmail
FROM tblrequest_form a
    LEFT JOIN tblrequest_item b
        ON a.IT_TRANSACTION_ID = b.IT_REQUEST_TRANSACTION_ID
    RIGHT JOIN tbluser c
        ON a.IT_BORROWER_NAME = c.USER_NAME
        WHERE a.IT_TRANSACTION_ID = '".$_POST['IT_TRANSACTION_ID']."' OR 
        a.IT_TRANSACTION_ID = '".$_POST['IT_REQUEST_TRANSACTION_ID']."' OR 
        a.IT_TRANSACTION_CODE_HASHED = '".$_POST['IT_TRANSACTION_CODE_HASHED']."'";

// Create conditional statement for $_POST 
// if(!empty($_POST['IT_TRANSACTION_ID']))
// {
//     $latest_msg_sql.= "WHERE a.IT_TRANSACTION_ID = '".$_POST['IT_TRANSACTION_ID']."'";
// }
// if(!empty($_POST['IT_REQUEST_TRANSACTION_ID'])){
//     $latest_msg_sql.= "WHERE a.IT_TRANSACTION_ID = '".$_POST['IT_REQUEST_TRANSACTION_ID']."'";
// }
// if(!empty($_POST['IT_TRANSACTION_CODE_HASHED'])){
//     $latest_msg_sql.= "WHERE a.IT_TRANSACTION_CODE_HASHED = '".$_POST['IT_TRANSACTION_CODE_HASHED']."'";
// }
//!Checking of smtp code sql for validating in response inspect element



//Upon checking
$fetch_last_msg = mysqli_query($link, $latest_msg_sql);
$fetch_row = mysqli_fetch_array($fetch_last_msg);

//
$purpose = $fetch_row['borrowPurpose'];
$remarks = $fetch_row['borrowRemarks'];
$borrower = str_replace(',','',ucwords(strtolower($fetch_row['borrowerName'])));
$reason = $fetch_row['declineReason'];
$borrowType = $fetch_row['borrowType'];
$approverName = str_replace(',','',ucwords(strtolower($fetch_row['approverName'])));
$approverEmail = $fetch_row['approverEmail'];
$approverStatus = $fetch_row['approverStatus'];
$staffPIC = $fetch_row['staffPIC'];
$checkerPIC = $fetch_row['checkerPIC'];
$checkerDateOut = $fetch_row['checkerDateOut'];
$checkerDateIn = $fetch_row['checkerDateIn'];


?>