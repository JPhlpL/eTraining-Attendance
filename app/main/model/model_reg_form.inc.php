<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">

                        <div class="card collapsed-card">
                            <div class="card-header bg-secondary">
                                <h3 class="card-title">Training Information</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <!--  -->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label> Training Title: </label>
                                            <input readonly readonly type="text" name="TRAINING_NAME" id="TRAINING_NAME" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label> Training Number: </label>
                                            <input readonly type="text" name="REG_TRAINING_NUM" id="REG_TRAINING_NUM" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label> From: </label>
                                            <input readonly type="text" name="TRAINING_START_DATE" id="TRAINING_START_DATE" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label> To: </label>
                                            <input readonly type="text" name="TRAINING_END_DATE" id="TRAINING_END_DATE" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label> Minimum Required: </label>
                                            <input readonly type="text" name="TRAINING_MIN_REQ" id="TRAINING_MIN_REQ" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label> Maximum Required: </label>
                                            <input readonly type="text" name="TRAINING_MAX_REQ" id="TRAINING_MAX_REQ" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label> Trainer: </label>
                                            <input readonly type="text" name="TRAINING_TRAINOR" id="TRAINING_TRAINOR" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label> Location: </label>
                                            <input readonly type="text" name="TRAINING_LOCATION" id="TRAINING_LOCATION" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card collapsed-card">
                            <div class="card-header bg-secondary">
                                <h3 class="card-title">Registration Form</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label> Leader Name: </label>
                                            <input readonly readonly type="text" name="REG_LEADER_NAME" class="form-control" id="REG_LEADER_NAME">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label> Leader ID: </label>
                                            <input readonly type="text" name="REG_LEADER_ID" id="REG_LEADER_ID" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label> Department: </label>
                                            <input readonly readonly type="text" name="REG_EMP_DEPT" id="REG_EMP_DEPT" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label> Section: </label>
                                            <input readonly type="text" name="REG_EMP_SECT" id="REG_EMP_SECT" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label> Registration Number: </label>
                                            <input readonly type="text" name="REG_NUM" id="REG_NUM" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label> Timestamp: </label>
                                            <input readonly type="text" name="REG_TIMESTAMP" id="REG_TIMESTAMP" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                <div class="table-responsive">
                                    <table id="mainTable" style="font-size:13px;" class="table table-bordered table-hover text-nowrap">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="bg-dark text-white no-sort"></th>
                                                <th style="min-width:150px;" class="bg-dark text-white"><label class="text-danger">&nbsp;</label>Image</th>
                                                <th class="bg-dark text-white"> Employee ID </th>
                                                <th class="bg-dark text-white"> Name </th>
                                                <th class="bg-dark text-white"> Department </th>
                                                <th class="bg-dark text-white"> Section </th>
                                                <th class="bg-dark text-white"> Position </th>
                                                <th class="bg-dark text-white"> Status </th>
                                                <th class="bg-dark text-white"> Date Registered </th>
                                                <th class="bg-dark text-white"> Leader ID </th>
                                                <th class="bg-dark text-white"> Sub Number </th>
                                                <th class="bg-dark text-white no-sort"></th>
                                            </tr>
                                        </thead>
                                    </table>
                                <div>

                            </div>
                        </div>
                    </div>

                </div>

                <!-- Create another card to register their trainees if they are requestor -->

            </div>

</section>
</div>