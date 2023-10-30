<?php  
session_start();

require_once '../../config.php';

$employee_hashed = $_POST['EMPLOYEE_HASHED'];
$employee_license = $_POST['EMPLOYEE_LICENSE'];
$employee_lic_description = $_POST['EMPLOYEE_LIC_DESCRIPTION'];
$employee_lic_start_date = $_POST['EMPLOYEE_LIC_START_DATE'];
$employee_lic_exp_date = $_POST['EMPLOYEE_LIC_EXP_DATE'];


if(isset($employee_hashed))
{
     if(count($employee_license) > 0)  
     {  
          for($i=0; $i<count($employee_license); $i++)  
          {  
               if($employee_hashed!="" || $employee_license[$i]!="" || $employee_lic_description[$i]!="" || $employee_lic_start_date[$i]!=""|| $employee_lic_exp_date[$i]!="")  
               {  
                    $list_sql = "INSERT INTO 
                    tblemplist_license(EMPLOYEE_HASHED,
                                        EMPLOYEE_LICENSE,
                                        EMPLOYEE_LIC_DESCRIPTION,
                                        EMPLOYEE_LIC_START_DATE,
                                        EMPLOYEE_LIC_EXP_DATE) 
                    VALUES('$employee_hashed',
                           '$employee_license[$i]',
                           '$employee_lic_description[$i]',
                           '$employee_lic_start_date[$i]',
                           '$employee_lic_exp_date[$i]')";  
                    
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
  