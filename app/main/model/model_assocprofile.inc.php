<!-- Main content -->
<section class="content" style="margin-top:-5.5rem!important">
    <div class="container-fluid">
        <div style="top:5em;z-index: 1;" class="col d-flex justify-content-left " >
            <div class="form-group">
                <img id="photoPreviewEdit" style="border:2px solid #D3D3D3; border-radius:90px;" width="170" height="170" />
                <input type="hidden" id="EMPLOYEE_PHOTO" name="EMPLOYEE_PHOTO">
            </div>
        </div>
        <div class="card position-static" style="padding-top:3.3em!important;">
            <div class="d-flex justify-content-center">
                <h3 class="card-title">
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                    <!-- For Adding -->
                    <form enctype="multipart/form-data">
                        <input type="hidden" name="param" id="param">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name" class="control-label">EMPLOYEE ID</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="REG_SUB_EMP_ID" name="REG_SUB_EMP_ID" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="name" class=" control-label">EMPLOYEE NAME</label>
                                    <div class="col-sm-12">
                                        <input type="text" id='REG_SUB_EMP_NAME' name="REG_SUB_EMP_NAME" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name" class="control-label">EMPLOYEE DEPT</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="REG_SUB_EMP_DEPT" name="REG_SUB_EMP_DEPT" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="name" class="control-label">EMPLOYEE SECTION</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="REG_SUB_EMP_SECT" name="REG_SUB_EMP_SECT" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name" class="control-label">EMPLOYEE POSITION</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="REG_SUB_EMP_POSITION" name="REG_SUB_EMP_POSITION" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table id="history_table" style="font-size:13px;" class="table table-hover table-head-fixed text-nowrap">
                            <thead>
                                <tr class="text-center">
                                    <th class="no-sort bg-dark text-white"></th>
                                    <th class="bg-dark text-white">TRAINING NUM </th>
                                    <th class="bg-dark text-white">TRAINING NAME </th>
                                    <th class="bg-dark text-white">TRAINING DETAIL </th>
                                    <th class="bg-dark text-white">TRAINING LOCATION </th>
                                    <th class="bg-dark text-white"></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                        <div class="row mt-3 float-right">
                            <div class="col-5">
                                <label>Total No. </label>
                            </div>
                            <div class="col">
                                <input type="text" name="BS_BURR_REPAIR_TOTAL" id="BS_BURR_REPAIR_TOTAL" class="form-control" readonly />
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>