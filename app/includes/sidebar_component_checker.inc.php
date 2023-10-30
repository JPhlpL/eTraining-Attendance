

<!-- Department/Checker can only access  -->
<?php if($_SESSION['USER_ACCOUNT_TYPE'] == 0 || $_SESSION['USER_ACCOUNT_TYPE'] == 1 || $_SESSION['USER_ACCOUNT_TYPE'] == 3) {?>
  <li class="nav-item">
    <a href="tblitem_monitor.php" class="nav-link <?php echo (param_title() == "tblitem_monitor.php" || param_title() == "monitorRequestForm.php" ) ? " active" : " "; ?>">
      <i class="nav-icon fas fa-clipboard-check"></i>
      <p>
        Item Monitoring
      </p>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="nav-icon fas fa-th-large"></i>
        <p>
            Menu
        </p>
    </a>
  </li>
  <li class="nav-item">
    <a id="logoutBtn" class="nav-link" data-widget="Sign-out" href="#" role="button">
        <i class="nav-icon fas fa-sign-out-alt">  </i>
        <p>
            Sign-out
        </p>
    </a>
  </li>
<?php } ?>



 
