
<?php 
// Create a stored session and identify if it is into usermanagement.php 
//or //Create a param to pass inside url <----
$url = $_SERVER['REQUEST_URI'];
$url_param = explode('?',$url);
$param_id = $url_param[1];

// if($param_id = 'userManagement'){
//     if(!empty($_FILES)){ 
//         // Include the database configuration file 
//         require_once '../../config.php'; 
        
//         $fileName = basename($_FILES['file']['name']); 
//         $uploadFilePath = $storage_dir.$user_profilepic; 
        
//         // Upload file to server 
//         if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath)){ 
//             // Insert file information in the database 
//             $sql = "INSERT INTO tblfiles (UPLOAD_FILE_NAME) VALUES ('".$fileName."')"; 
//             $insert = $link->query($sql);
//         } 
//     } 
// }

if(!empty($_FILES)){ 
    // Include the database configuration file 
    require_once '../../config.php'; 
    
    $fileName = basename($_FILES['file']['name']); 
    $uploadFilePath = $storage_dir.$user_profilepic; 
    
    // Upload file to server 
    if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath)){ 
        // Insert file information in the database 
        $sql = "INSERT INTO tblfiles (UPLOAD_FILE_NAME) VALUES ('".$fileName."')"; 
        $insert = $link->query($sql);
    } 
} 

?>
