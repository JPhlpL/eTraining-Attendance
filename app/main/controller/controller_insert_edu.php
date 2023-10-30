<?php  
session_start();

require_once '../../config.php';

$employee_hashed = $_POST['EMPLOYEE_HASHED'];
$employee_course = $_POST['EMPLOYEE_COURSE'];
$employee_school = $_POST['EMPLOYEE_SCHOOL'];
$employee_edu_attainment = $_POST['EMPLOYEE_EDU_ATTAINMENT'];
$employee_edu_years = $_POST['EMPLOYEE_EDU_YEARS'];


if(isset($employee_hashed))
{
     if(count($employee_course) > 0)  
     {  
          for($i=0; $i<count($employee_course); $i++)  
          {  
               if($employee_hashed!="" || $employee_course[$i]!="" || $employee_school[$i]!="" || $employee_edu_attainment[$i]!="" || $employee_edu_years[$i]!="")  
               {  
                    $list_sql = "INSERT INTO 
                    tblemplist_edu(EMPLOYEE_HASHED,
                                   EMPLOYEE_COURSE,
                                   EMPLOYEE_SCHOOL,
                                   EMPLOYEE_EDU_ATTAINMENT,
                                   EMPLOYEE_EDU_YEARS) 
                    VALUES('$employee_hashed',
                           '$employee_course[$i]',
                           '$employee_school[$i]',
                           '$employee_edu_attainment[$i]',
                           '$employee_edu_years[$i]'
                    )";  
                    
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
  