<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="card card-outline card-info">
      <div class="card-header bg-dark">
          <form id="update_emp" name="update_emp" enctype="multipart/form-data" method="post">
          <h3 class="card-title"> Employee Profile <button type="button" id="btn-update" class="border border-transparent text-white bg-secondary rounded">
              <i class="p-1 nav-icon fas fa-pencil-alt"></i>
            </button>
            <button type="button" id="btn-lock" class="border border-transparent text-white bg-secondary rounded" hidden>
              <i class="p-1 nav-icon fas fa-lock"></i>
            </button>
            <button id="btn-submit" class="border border-transparent text-white bg-secondary rounded" hidden>
              <i class="p-1 nav-icon fas fa-user-check"></i>
            </button>
          </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <?php //echo $_SESSION['param_url']; ?>
        <!--  -->
        <div class="form-group">
          <input type="hidden" name="param" id="param">
          <input type="hidden" class="form-control" id="mode" name="mode" value="update">
          <input type="hidden" id="EMPLOYEE_PHOTO" name="EMPLOYEE_PHOTO">
          <input type="hidden" id="EMPLOYEE_HASHED" name="EMPLOYEE_HASHED">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <img id="photoPreviewEdit" class="border rounded" width="150" height="150" />
              </div>
            </div>
            <div class="col-9 mt-5">
              <div class="custom-file">
                <input disabled type="file" id="EMPLOYEE_PHOTOPIC" name="EMPLOYEE_PHOTOPIC" class="custom-file-input" onchange="previewEmpPhotoEdit(); validateSize(this);">
                <label hidden id="labelPhoto" class="custom-file-label" for="upload_file">Choose file</label>
              </div>
            </div>
          </div>
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
                  <input type="text" class="form-control" id="EMPLOYEE_NAME" name="EMPLOYEE_NAME" value="" maxlength="50" disabled>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="name" class=" control-label">Age</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="EMPLOYEE_AGE" name="EMPLOYEE_AGE" value="" maxlength="50" disabled>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="name" class=" control-label">Gender</label>
                <div class="col-sm-12">
                  <select id='EMPLOYEE_GENDER' name="EMPLOYEE_GENDER" class="form-control form-control" disabled> <?php 
                                            $sql = mysqli_query($link, "SELECT DISTINCT GENDER From tblgender ");
                                            $row = mysqli_num_rows($sql);
                                            while ($row = mysqli_fetch_array($sql)){
                                            echo "
																			<option value='". $row['GENDER'] ."'>" .$row['GENDER'] ."</option>" ;}?> </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="name" class=" control-label">Department</label>
                <div class="col-sm-12">
                  <select id='EMPLOYEE_DEPT' name="EMPLOYEE_DEPT" class="form-control form-control" disabled>
                    <option value=""></option> <?php 
                                            $sql = mysqli_query($link, "SELECT DISTINCT DEPT_NAME From tbldept WHERE DEPT_NAME !='-' OR DEPT_NAME !='' ");
                                            $row = mysqli_num_rows($sql);
                                            while ($row = mysqli_fetch_array($sql)){
                                            echo "<option value='". $row['DEPT_NAME'] ."'>" .$row['DEPT_NAME'] ."</option>" ;}?>
                  </select>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="name" class=" control-label">Section</label>
                <div class="col-sm-12">
                  <select id='EMPLOYEE_SECTION' name="EMPLOYEE_SECTION" class="form-control form-control" disabled>
                    <option value=""></option> <?php 
                                            $sql = mysqli_query($link, "SELECT DISTINCT DEPT_SECTION From tbldept WHERE DEPT_SECTION NOT LIKE '-' OR DEPT_SECTION != ''");
                                            $row = mysqli_num_rows($sql);
                                            while ($row = mysqli_fetch_array($sql)){
                                            echo "<option value='". $row['DEPT_SECTION'] ."'>" .$row['DEPT_SECTION'] ."</option>" ;}?>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="name" class="control-label">Position</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="EMPLOYEE_POSITION" name="EMPLOYEE_POSITION" value="" maxlength="50" disabled>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="name" class="control-label">Job level</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="EMPLOYEE_JOB_LEVEL" name="EMPLOYEE_JOB_LEVEL" value="" maxlength="50" disabled>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="name" class="control-label">Status</label>
                <div class="col-sm-12">
                  <select id='EMPLOYEE_STATUS' name="EMPLOYEE_STATUS" class="form-control form-control" disabled>
                    <option value=""></option> <?php 
                                                $sql = mysqli_query($link, "SELECT DISTINCT STATUS_NAME From tblstatus WHERE STATUS_NAME NOT LIKE '-' OR STATUS_NAME != ''");
                                                $row = mysqli_num_rows($sql);
                                                while ($row = mysqli_fetch_array($sql)){
                                                echo "
																					<option value='". $row['STATUS_NAME'] ."'>" .$row['STATUS_NAME'] ."</option>" ;}?>
                  </select>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="name" class="control-label">Date Hired</label>
                <div class="col-sm-12">
                  <input type="date" class="form-control" id="EMPLOYEE_DATE_HIRED" name="EMPLOYEE_DATE_HIRED" value="" disabled>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="name" class=" control-label">Email</label>
                <div class="col-sm-12">
                  <input type="email" class="form-control" id="EMPLOYEE_EMAIL" name="EMPLOYEE_EMAIL" value="" maxlength="50" disabled>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="name" class="control-label">Mobile No.</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="EMPLOYEE_MOBILE_NUM" name="EMPLOYEE_MOBILE_NUM" value="" maxlength="50" disabled>
                </div>
              </div>
            </div>
          </div>
          </form>
          <div class="card card-secondary collapsed-card ">
            <div class="card-header">
              <h3 class="card-title"> Technical Skills <button id="techbtn" class="border border-transparent text-white bg-secondary rounded">
                  <i class="p-1 nav-icon fas fa-pencil-alt"></i>
                </button>
              </h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <p class="text-muted">
                <label class="text-center mb-1 ml-1 bg-primary text-white rounded card techSkill label-margin"></label>
              </p>
            </div>
          </div>
          <div class="card card-secondary collapsed-card ">
            <div class="card-header">
              <h3 class="card-title"> Competency Skills <button id="compskillbtn" class="border border-transparent text-white bg-secondary rounded">
                  <i class="p-1 nav-icon fas fa-pencil-alt"></i>
                </button>
              </h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <p class="text-muted">
                <label class="text-center mb-1 ml-1 bg-primary text-white rounded card compSkill label-margin"></label>
              </p>
            </div>
          </div>
          <div class="card card-secondary collapsed-card ">
            <div class="card-header">
              <h3 class="card-title"> Educational Background <button id="edubtn" class="border border-transparent text-white bg-secondary rounded">
                  <i class="p-1 nav-icon fas fa-pencil-alt"></i>
                </button>
              </h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <!-- Table -->
              <table class="table table-head-fixed table-hover text-nowrap" id="edu_table">
                <thead>
                  <tr class="text-center">
                    <th class="bg-dark text-white no-sort"></th>
                    <th class="bg-dark text-white no-sort">Course</th>
                    <th class="bg-dark text-white no-sort">School</th>
                    <th class="bg-dark text-white no-sort">Educational Attainment</th>
                    <th class="bg-dark text-white no-sort">Educational Years</th>
                  </tr>
                </thead>
              </table>
              <!-- Table -->
            </div>
          </div>
          <div class="card card-secondary collapsed-card ">
            <div class="card-header">
              <h3 class="card-title"> Company Background <button id="combtn" class="border border-transparent text-white bg-secondary rounded">
                  <i class="p-1 nav-icon fas fa-pencil-alt"></i>
                </button>
              </h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <!-- Table -->
              <table class="table table-head-fixed table-hover text-nowrap" id="com_table">
                <thead>
                  <tr class="text-center">
                    <th class="bg-dark text-white no-sort"></th>
                    <th class="bg-dark text-white no-sort">Previous Job</th>
                    <th class="bg-dark text-white no-sort">Previous Years</th>
                    <th class="bg-dark text-white no-sort">End of Contract</th>
                  </tr>
                </thead>
              </table>
              <!-- Table -->
            </div>
          </div>
          <div class="card card-secondary collapsed-card ">
            <div class="card-header">
              <h3 class="card-title"> Professional License / Award / Certificate <button id="licbtn" class="border border-transparent text-white bg-secondary rounded">
                  <i class="p-1 nav-icon fas fa-pencil-alt"></i>
                </button>
              </h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <!-- Table -->
              <table class="table table-head-fixed table-hover text-nowrap" id="lic_table">
                <thead>
                  <tr class="text-center">
                    <th class="bg-dark text-white no-sort"></th>
                    <th class="bg-dark text-white no-sort">Course</th>
                    <th class="bg-dark text-white no-sort">School</th>
                    <th class="bg-dark text-white no-sort">Educational Attainment</th>
                    <th class="bg-dark text-white no-sort">Educational Years</th>
                  </tr>
                </thead>
              </table>
              <!-- Table -->
            </div>
          </div>
        </div>
        <!--  -->
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>