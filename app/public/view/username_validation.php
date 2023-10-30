<?php include '../controller/register_account.php';

  include '../../classes/functions.php'; ?>

<!DOCTYPE html>

<html lang="en">

<?php include '../../includes/header.css.inc.php'; ?>

    <body class="hold-transition">
    
      <?php //include '../model/model_register.php';?>
  
    </body>

  <?php include '../../includes/javaScript.inc.php'; ?>

  <script>
        Swal.fire({
        title: 'Error!',
        text: 'Details already existed. Thank you!',
        icon: 'error',
        confirmButtonText: 'OK' 
        }).then(function(){
            window.location.href='register.php';
        });
  </script>

</html>
