<div class="card-header p-2">
<ul class="nav nav-pills">

    <li class="nav-item">
        <a class="nav-link  <?php echo (param_title() == "timeline.php") ? " active" : " "; ?> " href="timeline.php" >Timeline</a>
    </li>

    <li class="nav-item">
        <a class="nav-link <?php echo (param_title() == "activity.php") ? " active" : " "; ?> " href="activity.php">Activity</a>
    </li>

    <li class="nav-item">
        <a class="nav-link <?php echo (param_title() == "updateprofile.php" || param_title() == "advanceprofile.php") ? " active" : " "; ?> " href="updateprofile.php">Update Profile</a>
    </li>

    <li class="nav-item">
        <a class="nav-link <?php echo (param_title() == "changeuserpass.php") ? " active" : " "; ?> " href="changeuserpass.php">Change Password</a>
    </li>

    <li class="nav-item">
        <a class="nav-link <?php echo (param_title() == "changeprofilepic.php") ? " active" : " "; ?> " href="changeprofilepic.php">Change Profile Picture</a>
    </li>

</ul>
</div><!-- /.card-header -->