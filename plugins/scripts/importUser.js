$(document).ready(function(){  

    //! For Validation of File Extension in Image
    $("#file").change(function() {
        var fileExtension = ['xlsx', 'xls'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            Swal.fire({
                icon: 'error',
                title: 'Wrong file extension',
                text: 'Only formats are allowed : ' + fileExtension.join(', ')
            })
            $('#file').val(''); //for clearing with Jquery
        }
    });
    //!For File Size Validation (Not more than 5mb)
    function validateSize(input) {
        const fileSize = input.files[0].size / 1024 / 1024; // in MiB
        if (fileSize > 5) {
            //! Create Sweet Alert Instead
            Swal.fire({
                icon: 'error',
                title: 'File Size Exceed!',
                text: 'The Maximum allowed file is 5mb. Thank you!'
            })
            $('#file').val(''); //for clearing with Jquery
        }
    }

    $("#frmExcelImport").submit(function(e) {
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
            closeOnCancel: false,
            allowOutsideClick: () => !Swal.isLoading(),
            preConfirm: function(result) {
                if (result) {
                    Swal.fire({
                        title: '',
                        imageUrl: "../../../dist/img/loading6.gif",
                        imageHeight: 200,
                        allowOutsideClick: false,
                        showCancelButton: false,
                        showConfirmButton: false,
                        onBeforeOpen: () => {
                            Swal.showLoading()
                        },
                    });
                }
            },
        }).then(function (result) {
            if (result.value) {
                //
                var form_data = new FormData(document.getElementById("frmExcelImport"));
                $.ajax({
                    url: '../controller/controller_import_user.php',
                    type: 'POST',
                    data: form_data,
                    contentType: false,
                    processData:false,
                    success: function(response){

                        if (response){
                            Swal.fire(
                                'Error',
                                'Invalid Excel File',
                                'error'
                            )
                        } 
                        else{
                        Swal.fire(
                            'Success',
                            'The File is now imported. Thank you!',
                            'success'
                            ).then(function()
                            {  
                            var oTable = $('#mainTable').dataTable(); 
                                oTable.fnDraw(false);
                                $('#import_excel').modal('hide');
                                $('#frmExcelImport').trigger("reset");
                            });
                        }
                    },
                    
                    error: function(xhr, status, error) {
                        if(xhr.status === 400) {
                            alert("Invalid Request");
                                Swal.fire(
                                    'Error',
                                    'Invalid Input',
                                    'error'
                                )
                            } else {
                            Swal.fire(
                                'Error',
                                'An Error Occured!',
                                'error'
                            )
                        }
                   
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
  