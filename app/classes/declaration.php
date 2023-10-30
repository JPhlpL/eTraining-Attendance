<?php 
//! For Improvement using OOP
function param_title()
{
    global $param_title;
    $set_url = $_SERVER['REQUEST_URI'];
    $title = explode('view/',$set_url);
    $param_title = parse_url($title[1], PHP_URL_PATH); // KEY FOR REMOVING GET PARAMETERS

    
    return $param_title;
}
param_title();

function display_title()
{   
    global $param_title;

    switch($param_title)
    {
    //
    case "login.php":
        echo "Login";
        break;
    case "register.php":
        echo "Account Registration";
        break;
    case "forgot-password.php":
        echo "Forgot Password";
        break;
    case "recover-password.php":
        echo "Recover Password";
        break;
    case "success_register_account.php":
        echo "Success!";
        break;
    case "success_changeprofilepic.php":
        echo "Success!";
        break;
    case "failed_register_account.php":
        echo "Failed!";
        break;
    //
    case "dashboard.php":
        echo "Dashboard";
        break;
    case "announcement.php":
        echo "Announcement";
        break;
    case "createtraining.php":
        echo "Create Training";
        break;
    case "training_sess.php":
        echo "Training Session";
        break;
    case "reg_form.php":
        echo "Registered Associates";
        break;
    case "assochistory.php":
        echo "Associate's History";
        break;
    case "assocprofile.php":
        echo "Associate's Profile";
        break;
    case "submittedlist.php":
        echo "List of Submitted";
        break;
    case "traininglist.php":
        echo "Training List";
        break;
    case "traininginfo.php":
        echo "Training Info";
        break;
    case "registration_assoc.php":
        echo "Associate Registration";
        break;
    case "comment.php":
        echo "Comment Section";
        break;
    case "announcement.php":
        echo "Announcement";
        break;
    case "userManagement.php":
        echo "List of Users";
        break;
    case "userManagement_addUser.php":
        echo "Add User";
        break;
    case "userManagement_editUser.php":
        echo "Edit User";
        break;
    case "tblemplist.php":
        echo "Employee Masterlist";
        break;
    case "tblemplist_profile.php":
        echo "Employee Profile";
        break;
    case "tblemplist_edu.php":
        echo "Educational Background";
        break;
    case "tblemplist_com.php":
        echo "Previous Company Background";
        break;
    case "tblemplist_license.php":
        echo "Professional License / Award / Certificates ";
        break;
    case "tblemplist_tech_skill.php":
        echo "Technical Skills ";
        break;
    case "tblemplist_comp_skill.php":
        echo "Competency Skills ";
        break;
    case "emailConfig.php":
        echo "Email Configuration";
        break;
    case "systemConfig.php":
        echo "System Configuration";
        break;
    case "toDoList.php":
        echo "To-Do List";
        break;
    case "tbltoDoList.php":
        echo "List of Reminders";
        break;
    case "viewToDoList.php":
        echo "View Reminder";
        break;
    case "fileManagement.php":
        echo "File Management";
        break;
    case "tblfiles.php":
        echo "List of Uploaded Files";
        break;
    case "calendar.php":
        echo "Calendar";
        break;
    case "manual.php":
        echo "Manual";
        break;
    case "contacts.php":
        echo "Contacts";
        break;
    case "support.php":
        echo "Ask Support";
        break;
    case "about.php":
        echo "About";
        break;
    //Main
    //
    case "timeline.php":
        echo "Timeline";
        break;
    case "activity.php":
        echo "Activity";
        break;
    case "updateprofile.php":
        echo "Update Profile";
        break;
    case "advanceprofile.php":
        echo "Advance Profile";
        break;
    case "changeuserpass.php":
        echo "Change Username and Password";
        break;
    case "changeprofilepic.php":
        echo "Change Profile Picture";
        break;
    }
    return $param_title;

}
?>