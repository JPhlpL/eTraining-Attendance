<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">

                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title mt-2"><i class="fas fa-chalkboard mr-3"></i>Start Training</h3>
                        <div class="card-tools">
                            <form id="STATUS_SESS_FORM" name="STATUS_SESS_FORM"> 
                                <input type="hidden" name="SESS_TYPE" id="SESS_TYPE" value="">
                                <input type="hidden" name="SESS_TRAINOR" id="SESS_TRAINOR" value="<?php echo $_SESSION['USER_NAME']; ?>">
                                <input type="hidden" name="SESS_TRAINING_NUM" id="SESS_TRAINING_NUM" value="<?php echo $_GET['tnum']; ?>">
                                <button type="submit" id="STATUS_SESS_TYPE" class="btn btn-success"><i class="fas fa-power-off"></i></button>
                            </form>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                </div>

                <div id="training_panel" style="display:none;">
                <!-- <div id="training_panel"> -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-info mr-3"></i>Information</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <input type="hidden" class="form-control" id="EMPLOYEE_PHOTO" name="EMPLOYEE_PHOTO">
                                                <img id="qrscan" style="border-radius:100%; border:3px solid #E5E4E2;" width="270" height="270" />
                                            </div>
                                            <div class="col-md-12">
                                                <input hidden placeholder="ID" type="text" class="form-control " id="EMPLOYEE_QR" name="EMPLOYEE_QR">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="row">
                                            <input readonly type="hidden" value="<?php echo $_GET['tnum']; ?>" class="form-control" id="TRAINING_NUM" name="TRAINING_NUM">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input readonly placeholder="Employee Name" type="text" class="form-control" id="EMPLOYEE_NAME" name="EMPLOYEE_NAME">
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
                                                </div>
                                                <input readonly placeholder="Employee Number" type="text" class="form-control " id="EMPLOYEE_ID" name="EMPLOYEE_ID">
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-building"></i></span>
                                                </div>
                                                <input readonly placeholder="Department" type="text" class="form-control " id="EMPLOYEE_DEPT" name="EMPLOYEE_DEPT">
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-flag"></i></span>
                                                </div>
                                                <input readonly placeholder="Section" type="text" class="form-control " id="EMPLOYEE_SECTION" name="EMPLOYEE_SECTION">
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                                </div>
                                                <input readonly placeholder="Position" type="text" class="form-control " id="EMPLOYEE_POSITION" name="EMPLOYEE_POSITION">
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-question-circle"></i></span>
                                                </div>
                                                <input readonly placeholder="Status" type="text" class="form-control " id="EMPLOYEE_STATUS" name="EMPLOYEE_STATUS">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- RFID Reader -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-id-card mr-3"></i>RFID Reader</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Fix This -->

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-id-card-alt"></i></span>
                                </div>
                                <input type="text" id="ATTN_RFID_NUM" onchange="GetDetail(this.value)" class="form-control" placeholder="Tap your ID (Place the cursor here)">
                                <button id="focusbtn" hidden>focus</button>
                            </div>

                            <input type="button" class="btn btn-secondary" id="sendAttendanceRFID" hidden>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>