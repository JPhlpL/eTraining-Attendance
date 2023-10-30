<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="javascript:window.location.reload(true)" class="brand-link">
    <img src="../../../dist/img/dnph.jpg" alt="AdminLTE Logo" style="height:25px;width:55px;border-radius:3px;">
    <?php //echo $systemLogo; ?>
    <span class="brand-text font-weight-light ml-1">Welcome!</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar ">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
      <div class="image">
      <?php
        echo "<a href='timeline.php' class='d-block'>".
              "<img alt='User Image' class='img-circle elevation-2' src='".$user_profilepic_dir.$profileData['USER_PROFILEPIC']."'>".
              "</a>";
        ?>
      </div>
      <div class="info">
        <?php switch($_SESSION['USER_ACCOUNT_TYPE'])
        {
          case 3:
            echo '<a href="javascript:window.location.reload(true)" class="d-block disabled">'.$_SESSION['USER_NAME'].'</a>';
            break;
          default:
            echo '<a href="javascript:window.location.reload(true)" class="d-block">'.greetProfile($_SESSION['USER_NAME']).'</a>';
            break;
        }?>
        
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library 

       <!-- Dashboard (MAIN) -->
       <?php 
       switch($_SESSION['USER_ACCOUNT_TYPE'])
       {
        case 3:
          include 'sidebar_component_checker.inc.php';
          break;
        default:
            include 'sidebar_component.inc.php';
            break;
       }
        ?>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
