<?php  
session_start();

require_once '../../config.php';

$employee_hashed = $_POST['EMPLOYEE_HASHED'];
$employee_tech_skill = $_POST['EMPLOYEE_TECH_SKILL'];


if(isset($employee_hashed))
{
     if(count($employee_tech_skill) > 0)  
     {  
          for($i=0; $i<count($employee_tech_skill); $i++)  
          {  
               if($employee_hashed!="" || $employee_tech_skill[$i]!="")  
               {  
                    $list_sql = "INSERT INTO 
                    tblemplist_tech_skill(EMPLOYEE_HASHED, EMPLOYEE_TECH_SKILL) 
                    VALUES('$employee_hashed',
                           '$employee_tech_skill[$i]')";  
                    
                    mysqli_query($link, $list_sql);      

                    echo json_encode(true);
               }  
          }  
          echo "Data Inserted";  
     }  
     else  
     {  
          echo "Please Enter Value";  
     }  
}
?> 
  