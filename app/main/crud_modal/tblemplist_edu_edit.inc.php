<div class="modal fade" id="edit-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">

              <h4 class="modal-title" id="userCrudModal"> Edit Item </h4>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                </div>
                  <div class="modal-body">
                    <form id="update-form" name="update-form" class="form-horizontal" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="id" id="id">

                        <input type="hidden" class="form-control" id="mode" name="mode" value="update">

                        <div class="form-group">
                            <label for="name" class="control-label">Course</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="EMPLOYEE_COURSE" name="EMPLOYEE_COURSE">
                                <option value="">--Please Select--</option>
                                <?php 
                                $sql = mysqli_query($link, "SELECT DISTINCT COURSE_NAME FROM tblcourse");
                                $row = mysqli_num_rows($sql); 
                                    while($row = mysqli_fetch_array($sql)) { 
                                    echo "<option value='".$row['COURSE_NAME']."'>" .$row['COURSE_NAME']. "</option>";
                                }
                                ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="control-label">School / University</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="EMPLOYEE_SCHOOL" name="EMPLOYEE_SCHOOL" value="" ></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="control-label">Educational Attainment</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="EMPLOYEE_EDU_ATTAINMENT" name="EMPLOYEE_EDU_ATTAINMENT">
                                <option value="">--Please Select--</option>
                                <?php 
                                $sql = mysqli_query($link, "SELECT DISTINCT COURSE_CATEGORY FROM tblcourse");
                                $row = mysqli_num_rows($sql); 
                                    while($row = mysqli_fetch_array($sql)) { 
                                    echo "<option value='".$row['COURSE_CATEGORY']."'>" .$row['COURSE_CATEGORY']. "</option>";
                                }
                                ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="control-label">Educational Years</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" id="EMPLOYEE_EDU_YEARS" name="EMPLOYEE_EDU_YEARS" value=""  >
                            </div>
                        </div>

                        
                
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save changes</button>
              </div>
              </form>
          </div>
      </div>
    </div>