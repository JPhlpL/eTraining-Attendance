<?php
ob_clean();
date_default_timezone_set("Asia/Manila");
// Universal Config
    class Database_Connection
    {
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "dnph_genba_etraining";

        public function __construct()
        {
        
            $conn = mysqli_connect($this -> host, $this -> user, $this -> password, $this -> db);

            if($conn->connect_error)
            {
                die ("<h1>Database Connection Failed</h1>");
            }
            //echo "Database Connected Successfully";
            return $this->conn = $conn;
        }
    }
    $db = new Database_Connection;
    $link = $db->conn;
// Universal Config

//For CartRequest 
    class DBController {
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $database = "dnph_genba_etraining";
        private $conn;
        
        function __construct() {
            $this->conn = $this->connectDB();
        }
        
        function connectDB() {
            $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
            return $conn;
        }
        
        function runQuery($query) {
            $result = mysqli_query($this->conn,$query);
            while($row=mysqli_fetch_assoc($result)) {
                $resultset[] = $row;
            }		
            if(!empty($resultset))
                return $resultset;
        }
        
        function numRows($query) {
            $result  = mysqli_query($this->conn,$query);
            $rowcount = mysqli_num_rows($result);
            return $rowcount;	
        }
    }
//For CartRequest 

// storing  request (ie, get/post) global array to a variable  
    $requestData= $_REQUEST;
        
    // Database connection info 
    $sql_details = array( 
        'host' => 'localhost', 
        'user' => 'root', 
        'pass' => '', 
        'db'   => 'dnph_genba_etraining' 
    ); 

    //System Configuration Display
        $systemConfSql = "SELECT * FROM tblsysteminfo WHERE id = 1";
        $systemConfQuery = mysqli_query($link,$systemConfSql);
        $systemData = mysqli_fetch_array($systemConfQuery);
        $systemName = $systemData['SYSTEM_NAME'];
        $systemFolderName = $systemData['SYSTEM_FOLDER_NAME'];
        $systemIpConfig = $systemData['SYSTEM_IP_CONFIG'];
        $systemTitleHeader = $systemData['SYSTEM_TITLE_HEADER'];
        $systemAuthor = $systemData['SYSTEM_AUTHOR'];
        $systemDept = $systemData['SYSTEM_DEPT'];
        $systemStatus = $systemData['SYSTEM_STATUS'];
        $systemDescription = $systemData['SYSTEM_DESCRIPTION'];
        $systemLogo = $systemData['SYSTEM_LOGO'];
        $systemDatetime_published = $systemData['SYSTEM_DATETIME_PUBLISHED'];
    //System Configuration Display

    //for dynamic select
    $connect = new PDO("mysql:host=localhost; dbname=dnph_genba_etraining;", "root", "");
    function selectEduAttainment($connect, $category_id)
    {
        $query = "SELECT DISTINCT COURSE_CATEGORY FROM tblcourse WHERE COURSE_CATEGORY !='-' OR COURSE_CATEGORY !=' ' !='-' OR COURSE_CATEGORY !=''  ";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $output = '';
        foreach($result as $row)
        {
            $output .= '<option value="'.$row["COURSE_CATEGORY"].'">'.$row["COURSE_CATEGORY"].'</option>';
        }
        return $output;
    }
    function selectCourse($connect, $category_id)
    {
        $query = "SELECT DISTINCT COURSE_NAME FROM tblcourse WHERE COURSE_NAME !='-' OR COURSE_NAME !=' ' !='-' OR COURSE_NAME !=''  ";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $output = '';
        foreach($result as $row)
        {
            $output .= '<option value="'.$row["COURSE_NAME"].'">'.$row["COURSE_NAME"].'</option>';
        }
        return $output;
    }
    //for dynamic select

    // Folder Directory
        $user_profilepic_dir = "../../uploads/user_profilepic/";
        $employee_photo_dir = "../../uploads/employee_photo/";
        $excel_dir = "../../uploads/excel/";
        $resources_dir = "../../uploads/resources/";
        $sys_dir = "../../uploads/sys_photo/";
        $inventory_photo_dir = "../../uploads/inventory_photo/";
        $attachments_dir = "../../uploads/attachments/";
        $storage_dir = "../../uploads/storage/";

    //? For Email Notif
    // Get the Server IP Address
    $ip_address = $systemIpConfig; // Must Change (IP ADDRESS OF THE SERVER IF LOCALHOSTING)
    $full_url = explode('app',$_SERVER['REQUEST_URI']); // Remove excess param
    $request_url = $full_url[0]; // Main URL

    //! For Login
        $login_url = "http://". $ip_address . $request_url ;
    //! For Registration Link
        $reg_url = "http://". $ip_address . $request_url."/app/public/view/register.php";
    //! If the system is hosting in local
        $local_message = "<strong> System is accessible within Denso PH Network. Thank you! </strong>";

// storing  request (ie, get/post) global array to a variable  

// Error Hiding
function hideError()
{
    error_reporting(E_ERROR | E_PARSE);
    error_reporting(0);
    ini_set('display_errors', 0);
    error_reporting(E_ALL ^ E_WARNING); 
    
}


?>
