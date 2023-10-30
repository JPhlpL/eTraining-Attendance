$(document).ready(function(){  

    $("#add_emp").submit(function(e) {

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
            
                url:"../controller/controller_crud_tblemplist.php",  
                method:"POST",  
                data: new FormData($('#add_emp')[0]), // get all form field value in serialize form
                contentType: false,
                cache: false,
                processData:false,
                success: function(response)
                { 
                    const empHash = response.replaceAll('"', '');
                    console.log(empHash);

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
                             //! Direct to employee view emp that can add skills/previous job etc..
                            location.href = 'tblemplist_profile.php?'+empHash;
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
  