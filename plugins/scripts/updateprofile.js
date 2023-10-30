 // Redirect to Advance Profile
 $('#btn-advanceprofile').click(function(e){
  e.preventDefault();
  $.ajax({
    url: "../controller/controller_param_hashed.php",
    type: "POST",
    data:{
      param: param
    },
    success: function(result){
      location.href = 'advanceprofile.php?' + $('#EMPLOYEE_HASHED').val();
    }
  });
})

//! For Validation of File Extension in Attachment
$("#file_attachment").change(function () {
  var fileExtension = ['pdf'];
  if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {

    Swal.fire({
      icon: 'error',
      title: 'Wrong file extension',
      text: 'Only formats are allowed : '+fileExtension.join(', ')
    })
    $('#file_attachment').val(''); //for clearing with Jquery
  }
});

$(document).ready(function() {

//! Update Profile
$("#profileform").submit(function(e) {

  e.preventDefault();

  var Name = $("#Name").val();
  var Employee_num = $("#Employee_num").val();
  var gender = $("#gender").val();
  var Email = $("#Email").val();
  var cpnum = $("#cpnum").val();
  var Dept = $("#Dept").val();
  var Section = $("#Section").val();
  var Position = $("#Position").val();

  if(Name == '') {
      Swal.fire(
          'Error',
          'Check again your inputs. Thank you!',
          'error'
        )
      return false;
  }

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
            url:"../controller/controller_updateprofile",  
            method:"POST",  
            data: new FormData($('#profileform')[0]), // get all form field value in serialize form
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
                        timer: 1000,
                        timerProgressBar: true
                      });
                      
                      Toast.fire({
                        icon: 'success',
                        title: 'Refreshing...'
                      }).then(function(){
                        location.reload();
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
//! Update Profile 
});
