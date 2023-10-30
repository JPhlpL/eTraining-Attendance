<?php 
switch($_SESSION['USER_ACCOUNT_TYPE'])
{
    case 3:
        echo '<body oncontextmenu="return false;" class="hold-transition sidebar-collapse layout-top-nav">';
        break;
    default:
        echo '<body oncontextmenu="return false;" class="hold-transition sidebar-mini layout-fixed">';
        break;
}
?>
