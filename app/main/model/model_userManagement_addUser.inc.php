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
                   
                        <form name="add_user" id="add_user" enctype="multipart/form-data"> 

                        <input type="hidden" class="form-control" id="mode" name="mode" value="add">


                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name" class="control-label">User Profile Picture</label>
                                        <div class="custom-file">
                                            <input type="file" id="USER_PROFILEPIC" name="USER_PROFILEPIC" class="custom-file-input" onchange="previewUserPhoto(); validateSize(this);">
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
                                            <input type="text" onkeyup="GetDetail(this.value)" class="form-control" id="USER_ID" name="USER_ID" value="" maxlength="50" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Password</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="USER_PASS" name="USER_PASS" value="" maxlength="50" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col">  
                                    <div class="form-group">
                                        <label for="name" class=" control-label">Name</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="USER_NAME" name="USER_NAME" value="" maxlength="50" required="">
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-2">    
                                    <div class="form-group">
                                        <label for="name" class=" control-label">Gender</label>
                                        <div class="col-sm-12">
                                            <select id='USER_GENDER' name="USER_GENDER" class="form-control form-control" required>
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
                                        <label for="name" class=" control-label">Email</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="USER_EMAIL" name="USER_EMAIL" value="" maxlength="50" required="">
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="name" class=" control-label">Account Type</label>
                                        <a disabled class="control-label text-dark" data-toggle="tooltip" data-placement="top" data-html="true" title="	0 - Super Admin, 1 - Admin, 2 - Approver, 3 - Checker, 4 - User">
                                            <i class="fas fa-question-circle"></i>
                                        </a>
                                        <div class="col-sm-12">
                                          <input type="text" id="USER_ACCOUNT_TYPE" name="USER_ACCOUNT_TYPE" value="" >
                                        </div>
                                    </div>  
                                </div>
                                <!-- <div class="col-4">
                                    <div class="form-group">
                                        <label for="name" class=" control-label">Account type</label>
                                        <a disabled class="control-label text-dark" data-toggle="tooltip" data-placement="top" data-html="true" title="	0 - Super Admin, 1 - Admin, 2 - Approver, 3 - Checker, 4 - User">
                                            <i class="fas fa-question-circle"></i>
                                        </a>
                                        <div class="col-sm-12">
                                            <select class="form-control" id="USER_ACCOUNT_TYPE" name="USER_ACCOUNT_TYPE">
                                                <option value="0"> Super Admin </option>
                                                <option value="1"> Admin </option>
                                                <option value="2"> Approver </option>
                                                <option value="3"> User </option>
                                                <option value="4"> Checker </option>
                                            </select>
                                        </div>
                                    </div>
                                </div> -->
                            </div>     

                            <div class="row">
                                <div class="col"> 
                                    <div class="form-group">
                                    <label for="name" class=" control-label">Department</label>
                                    <div class="col-sm-12">
                                        <select id='USER_DEPT'name="USER_DEPT" class="form-control form-control" required>
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
                                            <select id='USER_SECTION' name="USER_SECTION" class="form-control form-control" required>
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
                                        <input type="text" class="form-control" id="USER_POSITION" name="USER_POSITION" value="" maxlength="50" required="">
                                        </div>
                                    </div>       
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                    <label for="name" class="control-label">Mobile No.</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="USER_MOBILE" name="USER_MOBILE" value="" maxlength="50" required="">
                                    </div>
                                    </div>
                                </div>
                            </div>       
                          
                            <input type="submit" name="userBtn" id="userBtn" class="btn btn-info" value="Submit" />  
                        </form>  
                      
                    </div> 

            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

