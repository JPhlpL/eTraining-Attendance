

$(document).ready(function(){  


  //! Open modal for Question Circle User Guide for
  $('#usertip').click(function(e){
    $('#usertipmodal').modal('show');
  });


  //! Select Current Data
    let url = window.location.href.split("?");
    const param = url[1];  // <--------------------------------
    $.ajax({               //                                  |                              
        url:"../controller/controller_crud_tblUser.php", //    |
        type: "POST",      //                                  |
        data: {           //                                   |
            param: param, // <----------------------------------  param: <---- POST    param:param <---- the value 
            mode: 'edit'   
        },
        dataType : 'json',
        success: function(result){
        $('#param').val(result.USER_PROFILE_HASHED);
        $('#USER_ID').val(result.USER_ID);
        $('#USER_NAME').val(result.USER_NAME);
        $('#USER_GENDER').val(result.USER_GENDER);
        $('#USER_EMAIL').val(result.USER_EMAIL);
        $('#USER_DEPT').val(result.USER_DEPT);
        $('#USER_SECTION').val(result.USER_SECTION);
        $('#USER_POSITION').val(result.USER_POSITION);
        $('#USER_MOBILE').val(result.USER_MOBILE);
        $('#USER_ACCOUNT_TYPE').val(result.USER_ACCOUNT_TYPE);
        $('#USER_PHOTO').val(result.USER_PROFILEPIC);
  
        document.getElementById("photoPreview").src="../../uploads/user_profilepic/"+$('#USER_PHOTO').val();


        }
    });

    

    //! Update Data
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
            
              url:"../controller/controller_crud_tblUser.php", 
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
                            location.reload(true);
                            // return false;
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
  

//! For Profile Picture
function previewUserPhoto() {
  photoPreview.src=URL.createObjectURL(event.target.files[0]);
}
        