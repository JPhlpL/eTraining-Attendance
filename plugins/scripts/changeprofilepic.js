//!For Image File Size Validation (Not more than 5mb)
function validateSize(input) {
    const fileSize = input.files[0].size / 1024 / 1024 ; // in MiB
    if (fileSize > 5) {

      //! Create Sweet Alert Instead

      Swal.fire({
        icon: 'error',
        title: 'File Size Exceed!',
        text: 'The Maximum allowed file is 5mb. Thank you!'
      })

      $('#file-upload').val(''); //for clearing with Jquery

    } 
  }

  //! For Validation of File Extension in Image
  $("#file-upload").change(function () {
    var fileExtension = ['jpeg', 'jpg', 'png'];
    if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {

      Swal.fire({
        icon: 'error',
        title: 'Wrong file extension',
        text: 'Only formats are allowed : '+fileExtension.join(', ')
      })
      $('#file-upload').val(''); //for clearing with Jquery
    }
  });

$(document).ready(function() {
 
    $("#uploadBtn").click(function(e) {

      e.preventDefault();

        Swal.fire({
            title: "Confirm",
            text: "Are you sure you want to upload?",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function (result) {
            if (result.value) {
              $.ajax({
                  url:"../controller/controller_changeprofilepic.php",
                  type: "POST",
                  data: new FormData(document.getElementById("changeprofilepicform")), // get all form field value in serialize form
                  contentType: false,
                  cache: false,
                  processData:false,
                  success: function()
                  { 
                      Swal.fire(
                          'Success',
                          'The data is now updated. Thank you!',
                          'success'
                      ).then(function()
                      {  
                          location.href='changeprofilepic.php';
                      });
                  },
              
              });
            } 
            else if (result.value === "")
            {
                Swal.fire("Cancelled", "Cancel", "error");
                return false;  
            }
            });
   });
   return false;  
});