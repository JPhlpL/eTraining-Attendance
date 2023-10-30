<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-outline card-info">
            <div class="card-header bg-dark">
                <h3 class="card-title"> </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">  
                   
                        <form name="add_emp" id="add_emp" enctype="multipart/form-data"> 

                        <input type="hidden" class="form-control" id="mode" name="mode" value="add">

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Employee Picture</label>
                                        <div class="custom-file">
                                            <input type="file" id="EMPLOYEE_PHOTO" name="EMPLOYEE_PHOTO" class="custom-file-input" onchange="previewEmpPhoto(); validateSize(this);">
                                            <label class="custom-file-label" for="upload_file">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <img id="photoPreview" class="border rounded" width="150" height="150"/>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Employee ID</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="EMPLOYEE_ID" name="EMPLOYEE_ID" value="" maxlength="50" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">  
                                    <div class="form-group">
                                        <label for="name" class=" control-label">Name</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="EMPLOYEE_NAME" name="EMPLOYEE_NAME" value="" maxlength="50" required="">
                                        </div>
                                    </div>      
                                </div>
                            </div>

                        <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name" class=" control-label">Age</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="EMPLOYEE_AGE" name="EMPLOYEE_AGE" value="" maxlength="50" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">    
                                    <div class="form-group">
                                        <label for="name" class=" control-label">Gender</label>
                                        <div class="col-sm-12">
                                            <select id='EMPLOYEE_GENDER' name="EMPLOYEE_GENDER" class="form-control form-control" required>
                                            <?php 
                                            $sql = mysqli_query($link, "SELECT DISTINCT GENDER From tblgender ");
                                            $row = mysqli_num_rows($sql);
                                            while ($row = mysqli_fetch_array($sql)){
                                            echo "<option value='". $row['GENDER'] ."'>" .$row['GENDER'] ."</option>" ;}?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col"> 
                                    <div class="form-group">
                                    <label for="name" class=" control-label">Department</label>
                                    <div class="col-sm-12">
                                        <select id='EMPLOYEE_DEPT'name="EMPLOYEE_DEPT" class="form-control form-control" required>
                                            <option value=""> </option>
                                            <?php 
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
                                        <select id='EMPLOYEE_SECTION' name="EMPLOYEE_SECTION" class="form-control form-control" required>
                                            <option value=""> </option>
                                            <?php 
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
                                        <input type="text" class="form-control" id="EMPLOYEE_POSITION" name="EMPLOYEE_POSITION" value="" maxlength="50" required="">
                                        </div>
                                    </div>       
                                </div>
                                <div class="col"> 
                                    <div class="form-group">
                                    <label for="name" class="control-label">Job level</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="EMPLOYEE_JOB_LEVEL" name="EMPLOYEE_JOB_LEVEL" value="" maxlength="50" required="">
                                        </div>
                                    </div>       
                                </div>
                            </div>

                            <div class="row">
                                <div class="col"> 
                                    <div class="form-group">
                                    <label for="name" class="control-label">Status</label>
                                        <div class="col-sm-12">
                                            <select id='EMPLOYEE_STATUS' name="EMPLOYEE_STATUS" class="form-control form-control" required>
                                                <option value=""> </option>
                                                <?php 
                                                $sql = mysqli_query($link, "SELECT DISTINCT STATUS_NAME From tblstatus WHERE STATUS_NAME NOT LIKE '-' OR STATUS_NAME != ''");
                                                $row = mysqli_num_rows($sql);
                                                while ($row = mysqli_fetch_array($sql)){
                                                echo "<option value='". $row['STATUS_NAME'] ."'>" .$row['STATUS_NAME'] ."</option>" ;}?>
                                            </select>
                                        </div>       
                                    </div>       
                                </div>
                                <div class="col"> 
                                    <div class="form-group">
                                    <label for="name" class="control-label">Date Hired</label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" id="EMPLOYEE_DATE_HIRED" name="EMPLOYEE_DATE_HIRED" value="" required="">
                                        </div>
                                    </div>       
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name" class=" control-label">Email</label>
                                        <div class="col-sm-12">
                                            <input type="email" class="form-control" id="EMPLOYEE_EMAIL" name="EMPLOYEE_EMAIL" value="" maxlength="50" required="">
                                        </div>
                                    </div>  
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                    <label for="name" class="control-label">Mobile No.</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="EMPLOYEE_MOBILE_NUM" name="EMPLOYEE_MOBILE_NUM" value="" maxlength="50" required="">
                                    </div>
                                    </div>
                                </div>
                            </div>     

                            <!-- <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name" class=" control-label">QR Code</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="EMPLOYEE_QR" name="EMPLOYEE_QR" value="" maxlength="50" required="">
                                        </div>
                                    </div>  
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                    <label for="name" class="control-label">RFID</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="EMPLOYEE_RFID" name="EMPLOYEE_RFID" value="" maxlength="50" required="">
                                    </div>
                                    </div>
                                </div>
                            </div>        -->
                          
                            <input type="submit" name="empBtn" id="empBtn" class="btn btn-info" value="Submit" />  
                        </form>  
                      
                    </div> 

            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

