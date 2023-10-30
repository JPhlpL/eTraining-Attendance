<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        
        <!-- For Side info content -->
        <?php include '../../includes/sideinfo_content.inc.php'; ?>

      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
         
        <!-- For Card Header -->
        <?php include '../../includes/card_header.inc.php';?>
          
          <div class="card-body">
            <div class="tab-content">

              <!-- Activity -->
              <!-- Tab Panel -->
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
               
                    <?php echo "<img alt='User Image' class='img-circle img-bordered-sm' src='".$user_profilepic_dir.$profileData['USER_PROFILEPIC']."'/>"; ?>
                    <span class="username">
                      <a href="#"><?php echo ucwords(strtolower($profileData['USER_NAME'])); ?></a>
                      <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                    </span>
                    <span class="description"> Denso - 7:30 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                     I love DNPH &#128525;
                  </p>

                  <p>
                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                    <span class="float-right">
                      <a href="#" class="link-black text-sm">
                        <i class="far fa-comments mr-1"></i> Comments
                      </a>
                    </span>
                  </p>

                  <input class="form-control form-control-sm" type="text" placeholder="(Coming soon)">
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <!-- Activity -->
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

  <!-- /.content -->
  </div>