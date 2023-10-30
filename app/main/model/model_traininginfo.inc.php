<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label> Control Number: </label>
                            <input readonly readonly type="text" name="TRAINING_NUM" class="form-control" id="TRAINING_NUM">
                        </div>

                        <div class="form-group">
                             <label> Training Name: </label>
                            <input readonly type="text" name="TRAINING_NAME" id="TRAINING_NAME" onchange="GetDetail(this.value)" class="form-control">
                        </div>

                        <div class="form-group">
                             <label> Location: </label>
                            <input readonly type="text" id="TRAINING_LOCATION" name="TRAINING_LOCATION" class="form-control">
                        </div>


                        <div class="form-group">
                             <label> Detail: </label>
                            <textarea readonly name="TRAINING_DETAIL" id="TRAINING_DETAIL" class="form-control" ></textarea>
                        </div>

                        <div class="form-group">
                             <label> Status: </label>
                             <input type="text" name="TRAINING_STATUS" class="form-control" id="TRAINING_STATUS" readonly >
                           
                        </div>

                        <div class="form-group">
                             <label> Occur: </label>
                             <input type="text" name="TRAINING_OCCUR" class="form-control" id="TRAINING_OCCUR" readonly >
                        </div>

                        <div class="form-group">
                             <label> No. of Occurence: </label>
                            <input readonly type="number" name="TRAINING_OCCUR_NUM" class="form-control" id="TRAINING_OCCUR_NUM" value="1">
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                     <label> Start Date: </label>
                                    <input readonly type="date" name="TRAINING_START_DATE" class="form-control" id="TRAINING_START_DATE">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                     <label> End Date: </label>
                                    <input readonly type="date" name="TRAINING_END_DATE" class="form-control" id="TRAINING_END_DATE">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                     <label> Start Time: </label>
                                    <input readonly type="time" name="TRAINING_START_TIME" class="form-control" id="TRAINING_START_TIME">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                     <label> End Time: </label>
                                    <input readonly type="time" name="TRAINING_END_TIME" class="form-control" id="TRAINING_END_TIME">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label> Remarks </label>
                            <textarea readonly name="TRAINING_REMARKS" class="form-control" id="TRAINING_REMARKS"></textarea>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                     <label> Minimum Attendees: </label> 
                                    <input readonly type="number" name="TRAINING_MIN_REQ" class="form-control" id="TRAINING_MIN_REQ">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                     <label> Maximum Attendees: </label> 
                                    <input readonly type="number" name="TRAINING_MAX_REQ" class="form-control" id="TRAINING_MAX_REQ">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                             <label> Trainor: </label>
                            <input readonly type="text" id="TRAINING_TRAINOR" name="TRAINING_TRAINOR" class="form-control">
                        </div>

                        <div class="row ml-1">
                            <div class="col-m-1">
                                <?php if(strstr($_SESSION['USER_ACCOUNT_TYPE'], 'sys_trainor') && $status == 'ACTIVE'){
                                        if($total_reg <= $max_reg && $total_reg >= $min_reg){?>
                                    <a href="training_sess.php?tnum=<?php echo $transact_num;?>" class="btn btn-primary" id="TRAINING_NUM_CANCEL_BTN" class="TRAINING_NUM_CANCEL_BTN">Start Training</a>
                                <?php }
                                } ?>
                            </div>
                            
                            <div class="col-m-1">
                                <?php if(strstr($_SESSION['USER_ACCOUNT_TYPE'], 'sys_trainor') && $trainer == $_SESSION["USER_NAME"] && $status == 'ACTIVE'){?>
                                    <form method="POST" id="cancelForm" class="cancelForm">
                                        <input type="hidden" id="TRAINING_NUM_CANCEL" name="TRAINING_NUM_CANCEL" value="<?php echo $transact_num;?>" class="TRAINING_NUM_CANCEL" >
                                        <button class="btn btn-danger" id="TRAINING_NUM_CANCEL_BTN" class="TRAINING_NUM_CANCEL_BTN">Cancel </button>
                                    </form>
                                <?php } ?>
                            </div>

                            <div class="col-m-1">
                                <?php if( $status == 'ACTIVE' ){ ?>
                                    <a href="registration_assoc.php?tnum=<?php echo $transact_num;?>">
                                        <button class="btn btn-secondary">Register</button>
                                    </a>
                                <?php } ?>
                            </div>

                            <div class="col-m-1">
                                <?php if( $status == 'FINISHED' ){ ?>
                                    <!-- Generate Logs -->
                                    <a disabled>
                                        <button class="btn btn-secondary">Generate Logs</button>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--  -->
            <?php if(strstr($_SESSION['USER_ACCOUNT_TYPE'], 'sys_trainor') ){?>
            <div class="col">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-id-card mr-3"></i>List of Attendees</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">

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
                                        <th class="bg-dark text-white"> Registered </th>
                                    </tr>
                                </thead>
                            </table>
                        <div>
                        
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>

</section>
</div>