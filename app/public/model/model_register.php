<div class="container mt-5">
        <div class="bs-stepper">
            <div class="bs-stepper-header" role="tablist" id="candidate-content">
            <!-- your steps here -->
            <div class="step" data-target="#account-login-part">
                <button class="step-trigger" role="tab" aria-controls="account-login-part" id="account-login-part-trigger" >
                    <span class="bs-stepper-circle fas fa-clipboard"></span>
                </button>
            </div>
            <div class="line"></div>
            <!-- Division -->
            <div class="step" data-target="#information-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger" >
                    <span class="bs-stepper-circle"><span class="fas fa-list"></span></span>
                </button>
            </div>
            <div class="line"></div>
            <!-- Division -->
            <div class="step" data-target="#image-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="image-part" id="image-part-trigger" >
                    <span class="bs-stepper-circle"><span class="fas fa-image"></span></span>
                </button>
            </div>
            <div class="line"></div>
            <!-- Division -->
            <div class="step" data-target="#confirmation-part" >
                <button type="button" class="step-trigger" role="tab" aria-controls="confirmation-part" id="confirmation-part-trigger" >
                    <span class="bs-stepper-circle"><span class="fas fa-user"></span></span>
                </button>
            </div>
        </div>

        <div class="bs-stepper-content">
            <form novalidate name="registerload" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" method="post">
                <!-- your steps content here -->
                <div id="account-login-part" class="content" role="tabpanel" aria-labelledby="account-login-part-trigger">
                        <div class="mb-3 form-group" style="position:relative;">
                            <label class="icon" for="name"><i class="fas fa-id-badge"></i></label>
                            <label class="form-label">Employee No.</label>
                            <input type="text" id='username' onkeyup="GetDetail(this.value)" name="username" placeholder="Enter your employee number" 
                            class="form-control form-control-sm" required>
                            <input type="hidden" id='username_duplicate' name="username_duplicate" value="0">
                            <span style=" position: absolute; right: 13px; top: 33px;" id="username_validation_label" class="float-right badge bg-danger d-none">Employee number already existed</span>
                        </div>
                        <div class="mb-3">
                            <label class="icon" for="name"><i class="fas fa-shield"></i></i></label>
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" autocomplete="on" class="form-control pass-key" id="password" name="password" required placeholder="Password">                            
                            <div class="pull-right" style="margin-top:5px">
                                <a class="btn btn-white rounded-right eyeicon show fas fa-eye" type="button" id="show"></a>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="icon" for="name"><i class="fas fa-shield"></i></label>
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" autocomplete="on" class="form-control con_pass-key" id="confirm_password" name="confirm_password" required placeholder="Confirm Password">
                        </div>
                        <div class="pull-right" style="margin-top:-27px">
                            <a class="btn btn-white rounded-right eyeicon2 con_show fas fa-eye"  style="margin-bottom:-89px" id="con_show" type="button"></a>
                        </div>
                        <div id="popover-password">
                            <p><span id="result"></span></p>
                            <label class="icon" for="name"><i class="fas fa-tachometer"></i></label>
                            <label for="exampleInputPassword1" class="form-label">Password Meter: </label>
                            <div class="progress progress-striped active" style="width:100%;">
                                <div id="password-strength" 
                                    class="progress-bar" 
                                    role="progressbar" 
                                    aria-valuenow="40" 
                                    aria-valuemin="0" 
                                    aria-valuemax="100" 
                                    style="width:0%">
                                </div>
                            </div>
                            <ul class="list-unstyled">
                                <li class="">
                                    <span class="low-upper-case">
                                        <i class="fas fa-circle text-danger fa-xs" aria-hidden="true"></i>
                                        &nbsp;Lowercase &amp; Uppercase 
                                    </span>
                                </li>
                                <li class="">
                                    <span class="one-number">
                                        <i class="fas fa-circle text-danger fa-xs" aria-hidden="true"></i>
                                        &nbsp;Number (0-9)
                                    </span> 
                                </li>
                                <li class="">
                                    <span class="one-special-char">
                                        <i class="fas fa-circle text-danger fa-xs" aria-hidden="true"></i>
                                        &nbsp;Special Character (!@#$%^&*)
                                    </span>
                                </li>
                                <li class="">
                                    <span class="eight-character">
                                        <i class="fas fa-circle text-danger fa-xs" aria-hidden="true"></i>
                                        &nbsp;Atleast 8 Character
                                    </span>
                                </li>
                                <li class="">
                                    <span class="confirm-password">
                                        <i class="fas fa-circle text-danger fa-xs" aria-hidden="true"></i>
                                        &nbsp;Confirm Password (w/ Strong Password)
                                    </span>
                                </li>
                                <li class="">
                                    <span class="username-duplicate">
                                        <i class="fas fa-circle text-danger fa-xs" aria-hidden="true"></i>
                                        &nbsp;Not Duplicate Username
                                    </span>
                                </li>
                            </ul>
                        </div>
                           <div class="mt-2">
                            <div class="col">
                              <div>
                                <a href="login.php" class="btn btn-danger"> Back</a>
                                <button type="button" id="profilenextbtn" disabled class="btn btn-danger" onclick="stepper.next()">Next</button>
                              </div>
                            </div>
                          </div>
                </div>
                
                <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                        <div class="row mb-3" style="position:relative;">
                            <div class="col">
                                <label class="icon" for="name"><i class="far fa-user"></i></label>
                                <label class="form-label">Name</label>
                                <input type="text" id='name' name="name" placeholder="Enter your name" class="form-control form-control-sm" required>
                                <input type="hidden" id='name_duplicate' name="name_duplicate" value="0">
                                <span style=" position: absolute; right: 13px; top: 33px;" id="name_validation_label" class="float-right badge bg-danger d-none">Name already existed</span>
                            </div>
                        </div>
                        <div class="row mb-3" style="position:relative;">
                            <div class="col">
                                <label class="icon" for="name"><i class="fas fa-user"></i></label>
                                <label class="form-label">Gender</label>
                                <select id='gender' name="gender" class="form-control form-control-sm" required>
                                  <?php 
                                  $sql = mysqli_query($link, "SELECT DISTINCT GENDER From tblgender");
                                  $row = mysqli_num_rows($sql);
                                  while ($row = mysqli_fetch_array($sql)){
                                  echo "<option value='". $row['GENDER'] ."'>" .$row['GENDER'] ."</option>" ;}?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="icon" for="name"><i class="far fa-user"></i></label>
                                <label class="form-label">Email</label>
                                <input type="email" name="email" id='email' placeholder="Enter your email" class="form-control form-control-sm" required>
                            </div>
                            <div class="col">
                                <label class="icon" for="name"><i class="far fa-user"></i></label>
                                <label class="form-label">Mobile No.</label>
                                <input type="text" name="mobile" id='mobile' placeholder="Enter your mobile" class="form-control form-control-sm" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="icon" for="name"><i class="fas fa-building"></i></label>
                                <label class="form-label">Department</label>
                                <select id='dept'name="dept" class="form-control form-control-sm" required>
                                  <option value=""> </option>
                                  <?php 
                                  $sql = mysqli_query($link, "SELECT DISTINCT DEPT_NAME From tbldept WHERE DEPT_NAME !='-' OR DEPT_NAME !='' ");
                                  $row = mysqli_num_rows($sql);
                                  while ($row = mysqli_fetch_array($sql)){
                                  echo "<option value='". $row['DEPT_NAME'] ."'>" .$row['DEPT_NAME'] ."</option>" ;}?>
                                </select>
                            </div>
                            <div class="col">
                                <label class="icon" for="name"><i class="fas fa-flag"></i></label>
                                <label class="form-label">Section</label>
                                <select id='section'name="section" class="form-control form-control-sm" required>
                                  <option value=""> </option>
                                  <?php 
                                  $sql = mysqli_query($link, "SELECT DISTINCT DEPT_SECTION From tbldept WHERE DEPT_SECTION NOT LIKE '-' OR DEPT_SECTION != '' ");
                                  $row = mysqli_num_rows($sql);
                                  while ($row = mysqli_fetch_array($sql)){
                                  echo "<option value='". $row['DEPT_SECTION'] ."'>" .$row['DEPT_SECTION'] ."</option>" ;}?>
                                </select>
                            </div>
                            <div class="col">
                                <label class="icon" for="name"><i class="fas fa-briefcase"></i></label>
                                <label class="form-label">Position</label>
                                <input type="text" id='position' name="position" placeholder="Enter your position" class="form-control form-control-sm" required>
                            </div>
                        </div>

                        <div class="mt-2">
                            <div class="col">
                              <div>
                                  <button type="button" class="btn btn-danger" onclick="stepper.previous()">Back</button>
                                  <button id="userinfobtn" disabled type="button" class="btn btn-danger" onclick="stepper.next()">Next</button>
                                </div>
                              </div>
                            </div>
                          </div>
                </div>
            

                <div id="image-part" class="content" role="tabpanel" aria-labelledby="image-part-trigger">
                    
                    <div class="mb-3">
                        <div class="col">
                            <label class="form-label">Upload Image</label>
                            <input type="file" id="imageprof" class="form-control form-control-sm" name="image" onchange="preview(); validateSize(this);" accept="image/x-png,image/jpeg" />
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="col">
                            <a onClick='window.open("opencamera.php","OpenCamera","width=450,height=380")' class="btn btn-primary btn-sm mb-3"><i class="fas fa-camera"></i> Take a snapshot</a>         
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="col">
                            <img id="thumb1" class="border rounded-circle" width="150" height="150" />
                        </div>
                    </div>
                    
                    <div class="mt-2">
                        <div class="col">
                          <div>
                            <button type="button" class="btn btn-danger" onclick="stepper.previous()">Back</button>
                            <button type="button" class="btn btn-danger" onclick="stepper.next()">Next</button>
                          </div>
                        </div>
                      </div>
                </div>

                <div id="confirmation-part" class="content" role="tabpanel" aria-labelledby="confirmation-part-trigger">
                    <div class="row mb-3">
                        <div class="col">
                            <p class="form-label">Are you sure you want to submit?</label>
                        </div>
                    </div>

                    <div class="valid-feedback">
                    </div>

                    <div class="invalid-feedback">
                    </div>

                    <div class="mt-2">
                        <div class="col">
                          <div>
                            <button type="button" class="btn btn-danger" onclick="stepper.previous()">Back</button>
                            <input type="submit" class="btn btn-danger" value="Submit">
                          </div>
                        </div>
                      </div>
                </div>

            </form> 
        </div>
</div>