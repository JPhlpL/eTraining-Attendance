$(document).ready(function(){  

    $("#add_user").submit(function(e) {

       e.preventDefault();

       Swal.fire({
        title: "Confirmation",
        text: "Are you sure?",
        type: "info",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes",
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: false
    }).then(function (result) {

        if (result.value) {
            //
            $.ajax({
            
                url:"../controller/controller_crud_tbluser.php",  
                method:"POST",  
                data: new FormData($('#add_user')[0]), // get all form field value in serialize form
                contentType: false,
                cache: false,
                processData:false,
                success: function()
                { 
                    Swal.fire(
                        'Success',
                        'Your form is submitted. Thank you!',
                        'success'
                      ).then(function()
                      {  
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 2000,
                            timerProgressBar: true
                          });
                          
                          Toast.fire({
                            icon: 'success',
                            title: 'Refreshing...'
                          }).then(function(){
                            location.href = 'userManagement.php';
                            return false;
                          });
                      });
                },
                
                error: function() {
                    Swal.fire(
                        'Error',
                        'Check again your inputs. Thank you!',
                        'error'
                      )
                }
             });
            //
        } 
        else if (result.value === "")
        {
            Swal.fire("Cancelled", "Cancel", "error");
            return false;  
        }
        
        });

    return false;  

    });  
});  
  