<?php include '../controller/login_script.php';

  include '../../classes/functions.php'; ?>

<!DOCTYPE html>

<html lang="en">

<?php include '../../includes/header.css.inc.php'; ?>

    <body class="hold-transition login-page">
    
      <?php //include '../model/model_login.php';?>
  
    </body>

  <?php include '../../includes/javaScript.inc.php'; ?>

  <script>
        Swal.fire({
        title: 'Error!',
        text: 'Your profile is still pending. Thank you!',
        icon: 'error',
        confirmButtonText: 'OK' 
        }).then(function(){
            window.location.href='login.php';
        });
  </script>

</html>
