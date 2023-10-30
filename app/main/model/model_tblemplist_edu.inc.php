<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-outline card-info">
            <div class="card-header bg-dark">
                <h3 class="card-title">Educational Background</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">  
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <img id="photoPreview" class="border rounded" width="150" height="150"/>
                                </div>
                            </div>
                        </div>
                        <!-- Hide -->
                            <button class="btn btn-success successbtn addNew" style="display:none;"> + </button> 
                            <input type="checkbox" class="form-check-input selectAll" id="exampleCheck1" hidden>
                        <!-- Hide -->
                        <!-- For Adding -->
                        <form name="add_edu" id="add_edu" enctype="multipart/form-data">  
                            <input type="hidden" id="EMPLOYEE_PHOTO" name="EMPLOYEE_PHOTO">
                            <input type="hidden" id="EMPLOYEE_HASHED" name="EMPLOYEE_HASHED">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Employee ID</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="EMPLOYEE_ID" name="EMPLOYEE_ID" value="" maxlength="50" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">  
                                    <div class="form-group">
                                        <label for="name" class=" control-label">Name</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="EMPLOYEE_NAME" name="EMPLOYEE_NAME" value="" maxlength="50" readonly>
                                        </div>
                                    </div>      
                                </div>
                            </div>
                      
                            <div class="table-responsive">  
                                <table class="table table-head-fixed table-hover text-nowrap" id="autocomplete_table">  
                                    <thead>
                                        <tr class="text-center">
                                            <th class="bg-dark text-white"></th>
                                            <th class="bg-dark text-white">Course</th>
                                            <th class="bg-dark text-white">School / University</th>
                                            <th class="bg-dark text-white">Educational Attainment</th>
                                            <th class="bg-dark text-white">Educational Years</th>
                                            <th class="bg-dark text-white">Action</th>
                                            <th class="bg-dark text-white"></th>
                                        </tr>
                                    </thead> 
                                    <tbody>
                                        <!-- <tr id="row_1"> 
                                            <td></td>
                                            <td><select required name="EMPLOYEE_COURSE[]" id="EMPLOYEE_COURSE_1" class="form-control EMPLOYEE_COURSE"><option value="">-- Please Select --</option><?php echo selectCourse($connect, "0"); ?></select></td>
                                            <td><textarea required name="EMPLOYEE_SCHOOL[]" id="EMPLOYEE_SCHOOL_1" class="form-control autocomplete_txt" autocomplete="off" cols="70" rows="2"></textarea></td>
                                            <td><select required name="EMPLOYEE_EDU_ATTAINMENT[]" id="EMPLOYEE_EDU_ATTAINMENT_1" class="form-control EMPLOYEE_EDU_ATTAINMENT"><option value="">-- Please Select --</option><?php echo selectEduAttainment($connect, "0"); ?></select></td>
                                            <td><input required type="number" name="EMPLOYEE_EDU_YEARS[]" id="EMPLOYEE_EDU_YEARS_1" class="form-control autocomplete_txt" autocomplete="off"></td>
                                            <td><button id="delete_1" class="delete_row border border-secondary text-dark rounded ml-2" style="cursor:pointer;">  <i class="p-2 nav-icon fas fa-trash-alt"></i></button></td>
                                        </tr>   -->
                                     </tbody>
                                </table>  
                            </div> 
                            
                            <input type="submit" name="eduBtn" id="eduBtn" class="btn btn-info" value="Submit" hidden/>  
                        </form>  
                    </div> 
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<?php include '../crud_modal/tblemplist_edu_edit.inc.php'; ?>

<?php include '../crud_modal/import_excel.inc.php'; ?>

