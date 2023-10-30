<?php
// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Include config file
require_once "../../config.php";
require_once '../../classes/generateHash.php';


//! Validation For Duplicate Username
if (isset($_POST['username_check'])) {
    $username = $_POST['username'];
    $sql = "SELECT * FROM tbluser WHERE USER_ID='$username'";
    $results = mysqli_query($link, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken";	
    }else{
      echo 'not_taken';
    }
    exit();
}
//!

//! Validation For Duplicate Name
if (isset($_POST['name_check'])) {
    $name = $_POST['name'];
    $sql = "SELECT * FROM tbluser WHERE USER_NAME='$name'";
    $results = mysqli_query($link, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken";	
    }else{
      echo 'not_taken';
    }
    exit();
}
//!


// Define variables and initialize with empty values
$gender = $name = $dept = $section = $position = $email = $mobile = 
$username = $password = $confirm_password = "";

// Define variables and initialize with empty values
$gender_err = $name_err = $dept_err = $section_err = $position_err = $email_err = $mobile_err = 
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    //! Validate Gender
    if(empty(trim($_POST["gender"]))){
        $gender_err = "Please enter your gender.";     
    } else{
        $gender = trim($_POST["gender"]);
    }

    //! Validate Name
    if(empty(trim($_POST["name"]))){
        $name_err = "Please enter your name.";     
    } else{
        $name = trim($_POST["name"]);
    }

    //! Validate department
    if(empty(trim($_POST["dept"]))){
        $dept_err = "Please enter your department.";     
    } else{
        $dept = trim($_POST["dept"]);
    }

    //! Validate section
    if(empty(trim($_POST["section"]))){
        $section_err = "Please enter your section.";     
    } else{
        $section = trim($_POST["section"]);
    }

    //! Validate position
    if(empty(trim($_POST["position"]))){
        $position_err = "Please enter your position.";     
    } else{
        $position = trim($_POST["position"]);
    }

    //! Validate mobile
    if(empty(trim($_POST["mobile"]))){
        $mobile = " ";     
    } else{
        $mobile = trim($_POST["mobile"]);
    }


    //! Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT USER_ID FROM tbluser WHERE USER_ID = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            // Set parameters
            $param_username = trim($_POST["username"]);
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    //$username_err = "This username is already taken. Please choose another. Thank you!";
                    header("location: username_validation.php");
                    exit();
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }

      //! Validate email
      if(empty(trim($_POST["email"]))){
        $email_err = "Please enter an email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT USER_EMAIL FROM tbluser WHERE USER_ID = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            // Set parameters
            $param_email = trim($_POST["email"]);
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    //$username_err = "This username is already taken. Please choose another. Thank you!";
                    header("location: username_validation.php");
                    exit();
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    //! Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 3){
        $password_err = "Password must have atleast 3 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    //! Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
        
    }
    
    // Check input errors before inserting in database
    if(empty($gender_err) && empty($name_err) && empty($dept_err) &&  empty($section_err) && empty($position_err) && 
    empty($username_err) && empty($password_err) && empty($confirm_password_err)){

         //  Insert image data into database
         $image = $_FILES['image']['tmp_name'];
         $image_name = basename($_FILES['image']['name']);
         $target_dir = $user_profilepic_dir.$image_name;
         move_uploaded_file($image,$target_dir);

         if(empty($image_name))
         {
            $image_name = NULL;
         }

        $profile_hashed = $hash;
        
        

        // Prepare an insert statement
        $sql = "INSERT INTO tbluser (USER_GENDER, USER_NAME , USER_DEPT , USER_SECTION,
        USER_POSITION , USER_EMAIL , USER_MOBILE , USER_ID , USER_PASS , USER_PROFILEPIC, USER_PROFILE_HASHED ) VALUES (?,?,?,?,?,?,?,?,?,'$image_name','$profile_hashed')";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssss", $param_gender, $param_name, $param_dept, $param_section, $param_position, $param_email, $param_mobile,
            $param_username, $param_password);
            
            // Set parameters
            $param_gender = $gender;
            $param_name = $name;
            $param_dept = $dept;
            $param_section = $section;
            $param_email = $email;
            $param_mobile = $mobile;
            $param_position = $position;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
        
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $mode = "register";
                require_once ('../../classes/insertSystemHistory.php');
                
                // Redirect to login page
                header('Location: success_register_account.php');
                exit();
            } else{
                header('Location: failed_register_account.php');
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    //mysqli_close($link);
}
?>