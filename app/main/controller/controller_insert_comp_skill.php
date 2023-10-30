<?php  
session_start();

require_once '../../config.php';

$employee_hashed = $_POST['EMPLOYEE_HASHED'];
$employee_comp_skill = $_POST['EMPLOYEE_COMP_SKILL'];


if(isset($employee_hashed))
{
     if(count($employee_comp_skill) > 0)  
     {  
          for($i=0; $i<count($employee_comp_skill); $i++)  
          {  
               if($employee_hashed!="" || $employee_comp_skill[$i]!="")  
               {  
                    $list_sql = "INSERT INTO 
                    tblemplist_comp_skill(EMPLOYEE_HASHED, EMPLOYEE_COMP_SKILL) 
                    VALUES('$employee_hashed',
                           '$employee_comp_skill[$i]')";  
                    
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
  