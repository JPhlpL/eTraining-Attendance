<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

         <!-- For Side info content -->
         <?php include '../../includes/sideinfo_content.inc.php'; ?>
            <!-- /.card -->

          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
               <!-- For Card Header -->
            <?php include '../../includes/card_header.inc.php';?>

              <div class="card-body">
                <div class="tab-content">
                 <!-- Tab Panel Change Username and Password-->
                   <div class="active tab-pane" id="changeuserpass">

                    <form class="form-horizontal">

                    <input type="hidden" name="username" id="username" value="<?php echo $profileData['USER_ID'] ?>"/>

                    <!-- Password -->
                      <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-10">
                          <input type="password" autocomplete="on" class="form-control pass-key" id="password" name="password" required placeholder="Password">
                          <span class="passwordshow"><span id="show-pass" class="fas fa-eye show"></span></span>
                          <span class="help-block"></span>
                        </div>
                      </div>

                       <!-- Confirm Password -->
                       <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                        <input type="password" autocomplete="on" class="form-control confirm-pass-key" id="confirm_password" name="confirm_password" required placeholder="Password">
                          <span class="confirm-passwordshow"><span id="confirm-showpass" class="fas fa-eye show"></span></span>
                          <span class="help-block"></span>
                        </div>
                      </div>

                      <!-- Password Meter -->
                      <div class="form-group row">
                        <label  class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                        <div class="progress progress-striped active" style="width:100%;">
                                <div id="password-strength" 
                                    class="progress-bar progress-bar-striped progress-bar-animated rounded" 
                                    role="progressbar" 
                                    aria-valuenow="40" 
                                    aria-valuemin="0" 
                                    aria-valuemax="100" 
                                    style="width:0%">
                                </div>
                            </div>
                           
                        </div>
                      </div>



                      <!-- Submit -->
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <input type="submit"  id="changebtn" class="btn btn-danger" disabled="disabled">
                        </div>
                      </div>

                     <!-- Password Validation -->
                     <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
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
                            </ul>
                        </div>
                      </div>

                    </form>

                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

</div>