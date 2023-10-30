<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-outline card-info">
            <div class="card-header bg-dark">
                <h3 class="card-title"></h3>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body">

                <div class="form-group">  
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">  
                            <div class="row">
                                <div class="col mb-2">
                                    <label class="form-label">Select Item:</label>
                                    <select name="IT_ITEM_CONTROL_NUMBER" id="IT_ITEM_CONTROL_NUMBER" class="form-control">
                                    <?php 
                                    $sql= mysqli_query($link,"SELECT IT_ITEM_CONTROL_NUMBER FROM tblinventory");
                                    $row = mysqli_num_rows($sql);
                                        while($row = mysqli_fetch_array($sql))
                                        {
                                            echo "<option value='".$row['IT_ITEM_CONTROL_NUMBER']."'>" .$row['IT_ITEM_CONTROL_NUMBER']. "</option>";
                                        }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save changes</button>
                        </form>  
                        <div>
                            <img src="<?php if(isset($file)){ echo $file; }?>" alt="qr">
                        </div>
                        <!-- For the display message -->
                        <div class=" <?php if(!empty($type)) { echo $type . " display-block"; } ?>">
                            <?php if(!empty($message)) { echo $message;  } ?>
                        </div>
                    </div> 
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

