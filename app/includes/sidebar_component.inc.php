<!-- Department Use Only -->
<?php if (strstr($_SESSION['USER_ACCOUNT_TYPE'], 'sys_admin') || strstr($_SESSION['USER_ACCOUNT_TYPE'], 'sys_trainor') || strstr($_SESSION['USER_ACCOUNT_TYPE'], 'sys_approver')) { ?>
  <li class="nav-item">
    <a href="dashboard.php" class="nav-link <?php echo (param_title() == "dashboard.php") ? " active" : " "; ?>">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Dashboard
      </p>
    </a>
  </li>
<?php } ?>

<!-- News Feed (MAIN) -->
<li class="nav-item">
  <a href="announcement.php" class="nav-link <?php echo (param_title() == "announcement.php" || param_title() == "comment.php") ? " active" : " "; ?>">
    <i class="nav-icon fas fa-newspaper"></i>
    <p>
      Announcement
    </p>
  </a>
</li>

<li class="nav-header">Main</li>

<!-- If Approver / Admin -->
<?php if (strstr($_SESSION['USER_ACCOUNT_TYPE'], 'sys_admin') || strstr($_SESSION['USER_ACCOUNT_TYPE'], 'sys_trainor') || strstr($_SESSION['USER_ACCOUNT_TYPE'], 'sys_approver')) { ?>

  <!-- Training Creation -->
  <li class="nav-item">
    <a href="createtraining.php" class="nav-link <?php echo (param_title() == "createtraining.php") ? " active" : " "; ?>">
      <i class="nav-icon fas fa-chalkboard"></i>
      <p>
        Create Training 
      </p>
    </a>
  </li>

    <!-- Training Creation -->
    <li class="nav-item">
    <a href="assochistory.php" class="nav-link <?php echo (param_title() == "assochistory.php" || param_title() == "assocprofile.php") ? " active" : " "; ?>">
      <i class="nav-icon fas fa-scroll"></i>
      <p>
        Associate's History
      </p>
    </a>
  </li>

  <!-- If User Only -->
<?php } else { ?>

<?php } ?>
<!-- Training Creation -->
<li class="nav-item">
  <a href="traininglist.php" class="nav-link <?php echo (param_title() == "training_sess.php" || param_title() == "traininglist.php" || param_title() == "traininginfo.php"  ) ? " active" : " "; ?>">
    <i class="nav-icon fas fa-clipboard"></i>
    <p>
      Offered Training List 
    </p>
  </a>
</li>

<!-- List of Response -->
<li class="nav-item">
  <a href="submittedlist.php" class="nav-link <?php echo (param_title() == "submittedlist.php" || param_title() == "registration_assoc.php" || param_title() == "reg_form.php" ) ? " active" : " "; ?>">
    <i class="nav-icon fas fa-cloud-upload-alt"></i>
    <p>
      Submitted List
    </p>
  </a>
</li>

<li class="nav-header">Misc</li>

<!-- Calendar Table -->
<li class="nav-item">
  <a href="calendar.php" class="nav-link <?php echo (param_title() == "calendar.php") ? " active" : " "; ?>">
    <i class="nav-icon fas fa-calendar"></i>
    <p>
      Calendar
    </p>
  </a>
</li>

<!-- System Manual -->
<li class="nav-item">
  <a href="manual.php" class="nav-link <?php echo (param_title() == "manual.php") ? " active" : " "; ?>">
    <i class="nav-icon fas fa-book"></i>
    <p>
      System Manual
    </p>
  </a>
</li>


<!-- Contacts Page -->
<li class="nav-item">
  <a href="contacts.php" class="nav-link <?php echo (param_title() == "contacts.php") ? " active" : " "; ?>">
    <i class="nav-icon fas fa-address-card"></i>
    <p>
      Contacts
    </p>
  </a>
</li>

<!-- Ask Support -->
<li class="nav-item">
  <a href="support.php" class="nav-link <?php echo (param_title() == "support.php") ? " active" : " "; ?>">
    <i class="nav-icon fas fa-phone"></i>
    <p>
      Ask Support
    </p>
  </a>
</li>

<!-- About -->
<li class="nav-item">
  <a href="about.php" class="nav-link <?php echo (param_title() == "about.php") ? " active" : " "; ?>">
    <i class="nav-icon fas fa-info-circle"></i>
    <p>
      About
    </p>
  </a>
</li>

<!-- Super Admin   -->
<?php if (strstr($_SESSION['USER_ACCOUNT_TYPE'], 'sys_admin')) { ?>
  <li class="nav-item <?php echo $menuSet; ?>">
    <a href="#" class="nav-link <?php echo $navLink; ?>">
      <i class="nav-icon fas fa-user-cog"></i>
      <p>
        Admin Tools
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <!-- User Management  -->
      <li class="ml-1 nav-item">
        <a href="userManagement.php" class="nav-link 
          <?php echo (param_title() == "userManagement.php" || param_title() == "userManagement_addUser.php" || param_title() == "userManagement_editUser.php") ? " active" : " "; ?>">
          <i class="nav-icon fas fa-users"></i>
          <p>
            User Management
          </p>
          <span class="badge badge-light right">
            <?php countAllUsers($link); ?>
          </span>
        </a>
      </li>
      <!-- User Management  -->
      <li class="ml-1 nav-item">
        <a href="tblemplist.php" class="nav-link 
          <?php echo (param_title() == "tblemplist.php" || param_title() == "tblemplist_edu.php" || param_title() == "tblemplist_license.php" || param_title() == "tblemplist_com.php" || param_title() == "tblemplist_profile.php" || param_title() == "tblemplist_tech_skill.php" || param_title() == "tblemplist_comp_skill.php") ? " active" : " "; ?>">
          <i class="nav-icon fas fa-user-tag"></i>
          <p>
            Employee List
          </p>
          <span class="badge badge-light right">
            <?php countAllEmployees($link); ?>
          </span>
        </a>
      </li>
      <!-- Email Configuration  -->
      <li class="ml-1 nav-item">
        <a href="emailConfig.php" class="nav-link 
          <?php echo (param_title() == "emailConfig.php") ? " active" : " "; ?>">
          <i class="nav-icon fas fa-mail-bulk"></i>
          <p>
            Email Configuration
          </p>
        </a>
      </li>
      <!-- System Configuration  -->
      <li class="ml-1 nav-item">
        <a href="systemConfig.php" class="nav-link 
          <?php echo (param_title() == "systemConfig.php") ? " active" : " "; ?>">
          <i class="nav-icon fas fa-cog"></i>
          <p>
            System Config
          </p>
        </a>
      </li>
      <!-- <li class="ml-1 nav-item <?php echo (param_title() == "toDoList.php" || param_title() == "fileManagement.php" || param_title() == "tblfiles.php" || param_title() == "tbltoDoList.php" || param_title() == "viewToDoList.php") ? " menu-open" : "menu"; ?>">
        <a href="#" class="nav-link  <?php echo (param_title() == "toDoList.php" || param_title() == "fileManagement.php" || param_title() == "tblfiles.php" || param_title() == "tbltoDoList.php") || param_title() == "viewToDoList.php" ? " active" : " "; ?>">
          <i class="nav-icon fas fa-list"></i>
          <p>
            Documents
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="ml-1 nav nav-treeview">
          <li class="nav-item <?php echo (param_title() == "toDoList.php" || param_title() == "tbltoDoList.php" || param_title() == "viewToDoList.php") ? " menu-open" : "menu"; ?>">
            <a href="#" class="nav-link  <?php echo (param_title() == "toDoList.php" || param_title() == "tbltoDoList.php" || param_title() == "viewToDoList.php") ? " active" : " "; ?>">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                To-Do List
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="tbltoDoList.php" class="nav-link  <?php echo (param_title() == "tbltoDoList.php" || param_title() == "viewToDoList.php") ? " active" : " "; ?>">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>List of Reminders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="toDoList.php" class="nav-link  <?php echo (param_title() == "toDoList.php") ? " active" : " "; ?>">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Add To-Do List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="ml-1 nav-item <?php echo (param_title() == "fileManagement.php" || param_title() == "tblfiles.php") ? " menu-open" : "menu"; ?>">
            <a href="#" class="nav-link  <?php echo (param_title() == "fileManagement.php" || param_title() == "tblfiles.php") ? " active" : " "; ?>">
              <i class="nav-icon fas fa-upload"></i>
              <p>
                File Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="tblfiles.php" class="nav-link  <?php echo (param_title() == "tblfiles.php") ? " active" : " "; ?>">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>List of Files</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fileManagement.php" class="nav-link  <?php echo (param_title() == "fileManagement.php") ? " active" : " "; ?>">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Upload Files</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li> -->
    </ul>
  </li>
<?php } ?>