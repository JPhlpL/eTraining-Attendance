<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!--  -->
                    <form name="trainingform" id="trainingform" enctype="multipart/form-data" >
                        <div class="card-body">
                            
                            <div class="form-group" hidden>
                                <label> Control Number: </label>
                                <input required readonly type="text" name="TRAINING_NUM" class="form-control" id="TRAINING_NUM">
                            </div>

                            <div class="form-group">
                                <label class="text-danger"> * </label> <label> Training Name: </label>
                                <input required type="text" name="TRAINING_NAME" id="TRAINING_NAME" onchange="GetDetail(this.value)" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="text-danger"> * </label> <label> Location </label>
                                <input required type="text" id="TRAINING_LOCATION" name="TRAINING_LOCATION" class="form-control flexdatalist" data-min-length='1' autocomplete="off" list="location_name">
                                    <datalist id="location_name">
                                        <?php 
                                        //current row
                                        $emplist_sql = mysqli_query($link, "SELECT LOCATION_NAME FROM tbllocation");
                                        
                                        $emplist_row = mysqli_num_rows($emplist_sql);
                                        
                                            while($emplist_row = mysqli_fetch_array($emplist_sql)) { 
                                            echo "<option value='".$emplist_row['LOCATION_NAME']."'>" .$emplist_row['LOCATION_NAME']. "</option>";
                                        } ?>
                                    </datalist>
                            </div>


                            <div class="form-group">
                                <label class="text-danger"> * </label> <label> Detail: </label>
                                <textarea required name="TRAINING_DETAIL" id="TRAINING_DETAIL" class="form-control" ></textarea>
                            </div>

                            <div class="form-group">
                                <label class="text-danger"> * </label> <label> Status: </label>
                                <select required name="TRAINING_STATUS" class="form-control" id="TRAINING_STATUS">
                                <?php 
                                  $sql = mysqli_query($link, "SELECT DISTINCT STATUS_NAME From tblstatus WHERE id = 1 OR id = 2");
                                  $row = mysqli_num_rows($sql);
                                  while ($row = mysqli_fetch_array($sql)){
                                  echo "<option value='". $row['STATUS_NAME'] ."'>" .$row['STATUS_NAME'] ."</option>" ;}
                                ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="text-danger"> * </label> <label> Occur: </label>
                                <select required name="TRAINING_OCCUR" class="form-control" id="TRAINING_OCCUR">
                                <?php 
                                  $sql = mysqli_query($link, "SELECT DISTINCT OCCUR_NAME From tbloccur");
                                  $row = mysqli_num_rows($sql);
                                  while ($row = mysqli_fetch_array($sql)){
                                  echo "<option value='". $row['OCCUR_NAME'] ."'>" .$row['OCCUR_NAME'] ."</option>" ;}
                                ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="text-danger"> * </label> <label> No. of Occurence </label>
                                <input required type="number" name="TRAINING_OCCUR_NUM" class="form-control" id="TRAINING_OCCUR_NUM" value="1">
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="text-danger"> * </label> <label> Start Date: </label>
                                        <input required type="date" name="TRAINING_START_DATE" class="form-control" id="TRAINING_START_DATE">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="text-danger"> * </label> <label> End Date: </label>
                                        <input required type="date" name="TRAINING_END_DATE" class="form-control" id="TRAINING_END_DATE">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="text-danger"> * </label> <label> Start Time: </label>
                                        <input required type="time" name="TRAINING_START_TIME" class="form-control" id="TRAINING_START_TIME">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="text-danger"> * </label> <label> End Time: </label>
                                        <input required type="time" name="TRAINING_END_TIME" class="form-control" id="TRAINING_END_TIME">
                                    </div>
                                </div>
                            </div>
                          
                            <div class="form-group">
                                <label> Remarks </label>
                                <textarea name="TRAINING_REMARKS" class="form-control" id="TRAINING_REMARKS"></textarea>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="text-danger"> * </label> <label> Minimum Required </label> 
                                        <input required type="number" name="TRAINING_MIN_REQ" class="form-control" id="TRAINING_MIN_REQ">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="text-danger"> * </label> <label> Maximum Required </label> 
                                        <input required type="number" name="TRAINING_MAX_REQ" class="form-control" id="TRAINING_MAX_REQ">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="text-danger"> * </label> <label> Trainor </label>
                                <input required type="text" id="TRAINING_TRAINOR" name="TRAINING_TRAINOR" class="form-control flexdatalist" data-min-length='1' autocomplete="off" list="employee_name">
                                    <datalist id="employee_name">
                                        <?php 
                                        //current row
                                        $emplist_sql = mysqli_query($link, "SELECT EMPLOYEE_NAME FROM tblemplist_main");
                                        
                                        $emplist_row = mysqli_num_rows($emplist_sql);
                                        
                                            while($emplist_row = mysqli_fetch_array($emplist_sql)) { 
                                            echo "<option value='".$emplist_row['EMPLOYEE_NAME']."'>" .$emplist_row['EMPLOYEE_NAME']. "</option>";
                                        } ?>
                                    </datalist>
                            </div>
                            
                
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <!--  -->
                </div>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
</section>
</div>