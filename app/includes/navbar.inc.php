<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="dashboard.php" class="nav-link">Home</a>
    </li>
    <li class="nav-item dropdown border rounded">
      <a class="nav-link" data-toggle="dropdown" href="#" id="dropdownSubMenu1">
        <i class="fas fa-clock"></i>
      </a>
      <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow bg-dark text-center">
          <!-- <a class="nav-link bordered rounded bg-dark" role="button">  -->
            <li><label id="date" class="mr-2"></label><label id="digital-clock"></label></li>
          <!-- </a> -->
      </ul>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">

    <!-- <li class="nav-item">
      
    </li> -->

    <!-- Notif -->
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown border rounded  <?php echo (param_title() == "timeline.php" || param_title() == "changeprofilepic.php" || param_title() == "changeuserpass.php" || param_title() == "activity.php" || param_title() == "updateprofile.php" || param_title() == "advanceprofile.php") ? "bg-primary" : " "; ?>">
      <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
        <i class="fas fa-user-cog"></i>
      </a>
      <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
        <li><a href="timeline.php" class="dropdown-item <?php echo (param_title() == "timeline.php") ? "bg-primary" : " "; ?>">Timeline </a></li>   
        <li><a href="activity.php" class="dropdown-item <?php echo (param_title() == "activity.php") ? "bg-primary" : " "; ?>">Activity</a></li>   
        <li><a href="updateprofile.php" class="dropdown-item <?php echo (param_title() == "updateprofile.php") ? "bg-primary" : " "; ?>">Update Profile</a></li>   
        <li><a href="changeuserpass.php" class="dropdown-item <?php echo (param_title() == "changeuserpass.php") ? "bg-primary" : " "; ?>">Change Password</a></li>
        <li><a href="changeprofilepic.php" class="dropdown-item <?php echo (param_title() == "changeprofilepic.php") ? "bg-primary" : " "; ?>">Change Profile Picture</a></li>
      </ul>
    </li>
    
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-bell"></i>
        <span class="badge badge-danger navbar-badge">
          <?php countAllNotif($link); ?>
        </span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <?php
        $notificationsql = "SELECT * FROM tblsystemhistory notif
            JOIN tbluser user
            ON notif.SYSTEM_INFO_USER = user.USER_NAME
            WHERE SYSTEM_INFO_USER = '" . $_SESSION['USER_NAME'] . "' AND SYSTEM_STATUS = 'NEW' ";
        $notificationquery = mysqli_query($link, $notificationsql);
        if (mysqli_num_rows($notificationquery) > 0) {
          while ($row = mysqli_fetch_array($notificationquery)) { ?>
            <!-- Message Start -->
            <a href="#" class="dropdown-item">
              <div class="media">
                <?php echo "<img src='" . $user_profilepic_dir . $profileData['USER_PROFILEPIC'] . "' alt='User Avatar' class='img-size-50 mr-3 img-circle'>"; ?>
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    <?php echo $row['USER_NAME']; ?>
                  </h3>
                  <p class="text-sm"><?php echo $row['SYSTEM_INFO']; ?></p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i><?php echo $row['SYSTEM_INFO_DATETIME']; ?></p>
                </div>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <!-- Message End -->
          <?php }
        } else { ?>
          <!-- Message Start -->
          <a href="#" class="dropdown-item bg-gray">
            <div class="media ">
              <div class="media-body">
                <p class="text-sm text-center">No notifcations have found</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <!-- Message End -->
        <?php } ?>
        <!-- Mark all notif as read -->
        <a href="#" class="dropdown-item dropdown-footer">Mark all as a Read</a>
      </div>
    </li>
    <!-- Notif -->

    <li class="nav-item">
      <a class="nav-link fullscreen" data-widget="fullscreen" href="#" role="button" id="fullscreen">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="fas fa-th-large"></i>
      </a>
    </li>

    <!-- Sign-out -->
    <li class="nav-item">
      <a id="logoutBtn" class="nav-link" data-widget="Sign-out" href="#" role="button">
        <i class="fas fa-sign-out-alt"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->