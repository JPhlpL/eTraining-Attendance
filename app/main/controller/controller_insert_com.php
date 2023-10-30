<?php  
session_start();

require_once '../../config.php';

$employee_hashed = $_POST['EMPLOYEE_HASHED'];
$employee_prev_job = $_POST['EMPLOYEE_PREV_JOB'];
$employee_prev_job_years = $_POST['EMPLOYEE_PREV_JOB_YEARS'];
$employee_prev_endo = $_POST['EMPLOYEE_PREV_ENDO'];


// $employee_course = $_POST['EMPLOYEE_COURSE'];
// $employee_school = $_POST['EMPLOYEE_SCHOOL'];
// $employee_edu_attainment = $_POST['EMPLOYEE_EDU_ATTAINMENT'];
// $employee_edu_years = $_POST['EMPLOYEE_EDU_YEARS'];


if(isset($employee_hashed))
{
     if(count($employee_prev_job) > 0)  
     {  
          for($i=0; $i<count($employee_prev_job); $i++)  
          {  
               if($employee_hashed!="" || $employee_prev_job[$i]!="" || $employee_prev_job_years[$i]!="" || $employee_prev_endo[$i]!="")  
               {  
                    $list_sql = "INSERT INTO 
                    tblemplist_com(EMPLOYEE_HASHED,
                                   EMPLOYEE_PREV_JOB,
                                   EMPLOYEE_PREV_JOB_YEARS,
                                   EMPLOYEE_PREV_ENDO) 
                    VALUES('$employee_hashed',
                           '$employee_prev_job[$i]',
                           '$employee_prev_job_years[$i]',
                           '$employee_prev_endo[$i]')";  
                    
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
  