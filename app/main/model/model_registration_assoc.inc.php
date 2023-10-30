<section class="content">
    <div class="container-fluid">
        <form name="submit_sheetform" id="submit_sheetform" enctype="multipart/form-data">  
        <div class="row">
            <div class="col">
                <div class="card collapsed-card">
                    
                    <div class="card-header bg-secondary">
                        <h3 class="card-title"> Training information</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <input readonly type="hidden" name="REG_LEADER_ID" class="form-control" id="REG_LEADER_ID" value="<?php echo $_SESSION['USER_ID'];?>">
                        <input readonly type="hidden" name="REG_LEADER_NAME" class="form-control" id="REG_LEADER_NAME" value="<?php echo $_SESSION['USER_NAME'];?>">
                        <input readonly type="hidden" name="REG_EMP_DEPT" class="form-control" id="REG_EMP_DEPT" value="<?php echo $_SESSION['USER_DEPT']; ?>">
                        <input readonly type="hidden" name="REG_EMP_SECT" class="form-control" id="REG_EMP_SECT" value="<?php echo $_SESSION['USER_SECTION'];?>">

                        <div class="form-group">
                            <label> Control Number: </label>
                            <input readonly type="text" name="TRAINING_NUM" class="form-control" id="TRAINING_NUM">
                        </div>

                        <div class="form-group">
                            <label class="text-danger"> * </label> <label> Training Name: </label>
                            <input readonly type="text" name="TRAINING_NAME" id="TRAINING_NAME" onchange="GetDetail(this.value)" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="text-danger"> * </label> <label> Location </label>
                            <input readonly type="text" id="TRAINING_LOCATION" name="TRAINING_LOCATION" class="form-control">
                        </div>


                        <div class="form-group">
                            <label class="text-danger"> * </label> <label> Detail: </label>
                            <textarea readonly name="TRAINING_DETAIL" id="TRAINING_DETAIL" class="form-control" ></textarea>
                        </div>

                        <div class="form-group">
                            <label class="text-danger"> * </label> <label> Status: </label>
                            <input readonly type="text" id="TRAINING_STATUS" name="TRAINING_STATUS" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="text-danger"> * </label> <label> Occur: </label>
                            <input readonly type="text" id="TRAINING_STATUS" name="TRAINING_STATUS" class="form-control">
            
                        </div>

                        <div class="form-group">
                            <label class="text-danger"> * </label> <label> No. of Occurence </label>
                            <input readonly type="number" name="TRAINING_OCCUR_NUM" class="form-control" id="TRAINING_OCCUR_NUM" value="1">
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-danger"> * </label> <label> Start Date: </label>
                                    <input readonly type="date" name="TRAINING_START_DATE" class="form-control" id="TRAINING_START_DATE">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-danger"> * </label> <label> End Date: </label>
                                    <input readonly type="date" name="TRAINING_END_DATE" class="form-control" id="TRAINING_END_DATE">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-danger"> * </label> <label> Start Time: </label>
                                    <input readonly type="time" name="TRAINING_START_TIME" class="form-control" id="TRAINING_START_TIME">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-danger"> * </label> <label> End Time: </label>
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
                                    <label class="text-danger"> * </label> <label> Minimum Attendees </label> 
                                    <input readonly type="number" name="TRAINING_MIN_REQ" class="form-control" id="TRAINING_MIN_REQ">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-danger"> * </label> <label> Maximum Attendees </label> 
                                    <input readonly type="number" name="TRAINING_MAX_REQ" class="form-control" id="TRAINING_MAX_REQ">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="text-danger"> * </label> <label> Trainer </label>
                            <input readonly type="text" id="TRAINING_TRAINOR" name="TRAINING_TRAINOR" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <h3 class="card-title"> List of Attendees</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                       <!--  -->
                        <div class="form-group">  
                           
                                <div class="table-responsive">  
                
                                    <table class="fixed-table table table-bordered table-hover" id="autocomplete_table">  
                                        <button hidden type="button" id="addReg" class="addNew border border-secondary text-dark rounded" style="cursor:pointer;"> 
                                            <i class="p-2 nav-icon fas fa-plus"></i>
                                        </button>         
                                        <thead>
                                            <tr class="text-center">
                                                <th class="bg-dark text-white fixed-header"></th>
                                                <th style="min-width:150px;" class="bg-dark text-white"><label class="text-danger">&nbsp;</label>Image</th>
                                                <th style="min-width:300px;" class="bg-dark text-white"><label class="text-danger"> * </label>ID Number</th>
                                                <th style="min-width:300px;" class="bg-dark text-white"><label class="text-danger"> * </label>Name</th>
                                                <th style="min-width:300px;" class="bg-dark text-white"><label class="text-danger"> * </label>Department</th>
                                                <th style="min-width:300px;" class="bg-dark text-white"><label class="text-danger"> * </label>Section</th>
                                                <th style="min-width:300px;" class="bg-dark text-white"><label class="text-danger"> * </label>Position</th>
                                                <th style="min-width:300px;" class="bg-dark text-white"><label class="text-danger">&nbsp;</label>Status</th>
                                                <th style="min-width:300px;" class="bg-dark text-white"><label class="text-danger">&nbsp;</label>Remarks</th>
                                            </tr>
                                        </thead> 
                                        <tbody>
                                        </tbody>
                                    </table>  
                                </div> 
                               
                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <b>No. of Added Associates: </b> <input type="text" name="totalTransactNum" id="totalTransactNum" class="border-0" readonly />
                                        <button type="submit" class="float-right border border-secondary text-dark rounded ml-3" style="cursor:pointer;width:140px;"> 
                                            <i class="p-2 nav-icon fas fa-file-upload"></i>Submit 
                                        </button> 
                                    </div>
                                </div>

                          
                        </div> 
                       <!--  -->
                    </div>
                </div>
            </div>

        </div>

  
          
  




        <!-- Create another card to register their trainees if they are requestor -->

    </div>
    </form>  
</section>
</div>