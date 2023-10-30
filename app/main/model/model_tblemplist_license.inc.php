<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-outline card-info">
            <div class="card-header bg-dark">
                <h3 class="card-title">Professional License / Award / Certificates </h3>
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
                        <form name="add_lic" id="add_lic" enctype="multipart/form-data">  
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
                                            <th class="bg-dark text-white">Eligibility Name</th>
                                            <th class="bg-dark text-white">Description</th>
                                            <th class="bg-dark text-white">Start Date</th>
                                            <th class="bg-dark text-white">End Date</th>
                                            <th class="bg-dark text-white">Action</th>
                                        </tr>
                                    </thead> 
                                    <tbody>
                                        <tr id="row_1"> 
                                            <td></td>
                                            <td><textarea required name="EMPLOYEE_LICENSE[]" id="EMPLOYEE_LICENSE_1" class="form-control autocomplete_txt" autocomplete="off" cols="70" rows="2"></textarea></td>
                                            <td><textarea required name="EMPLOYEE_LIC_DESCRIPTION[]" id="EMPLOYEE_LIC_DESCRIPTION_1" class="form-control autocomplete_txt" autocomplete="off" cols="70" rows="2"></textarea></td>
                                            <td><input required type="date" name="EMPLOYEE_LIC_START_DATE[]" id="EMPLOYEE_LIC_START_DATE_1" class="form-control autocomplete_txt" autocomplete="off"></td>
                                            <td><input required type="date" name="EMPLOYEE_LIC_EXP_DATE[]" id="EMPLOYEE_LIC_EXP_DATE_1" class="form-control autocomplete_txt" autocomplete="off"></td>
                                            <td><button id="delete_1" class="delete_row border border-secondary text-dark rounded ml-2" style="cursor:pointer;"> <i class="p-2 nav-icon fas fa-trash-alt"></i></button></td>
                                        </tr>  
                                     </tbody>
                                </table>  
                            </div> 
                            
                            <input type="submit" name="licBtn" id="licBtn" class="btn btn-info" value="Submit" hidden/>  
                        </form>  
                    </div> 
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<?php include '../crud_modal/tblemplist_lic_edit.inc.php'; ?>

<?php include '../crud_modal/import_excel.inc.php'; ?>

