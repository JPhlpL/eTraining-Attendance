$(document).ready(function() {
    
    $('select[name=IT_BORROW_TYPE]').click(function(){
        if($(this).val() == "External Bring In and Out")
        $('.hidden_remark').show();
            else
            $('.hidden_remark').hide();
        });
    
    //! Create
    $("#cartBtn").click(function(e) {

        e.preventDefault();

        var IT_TRANSACTION_ID = $("#IT_TRANSACTION_ID").val();
        var IT_BORROWER_NAME = $("#IT_BORROWER_NAME").val();
        var IT_DATE_FROM = $("#IT_DATE_FROM").val();
        var IT_DATE_TO = $("#IT_DATE_TO").val();
        var IT_BORROW_TYPE = $("#IT_BORROW_TYPE").val();
        var IT_REMARKS = $("#IT_REMARKS").val();
        var IT_PURPOSE = $("#IT_PURPOSE").val();
        var IT_FORM_APPROVER = $("#IT_FORM_APPROVER").val();
        var IT_APPROVER_EMAIL = $("#IT_APPROVER_EMAIL").val();
   
        
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
                    $.ajax({
                        type: "POST",
                        url: "../controller/controller_addtocart.php",
                        data: {
                            IT_TRANSACTION_ID: IT_TRANSACTION_ID,
                            IT_BORROWER_NAME: IT_BORROWER_NAME,
                            IT_DATE_FROM: IT_DATE_FROM,
                            IT_DATE_TO: IT_DATE_TO,
                            IT_BORROW_TYPE: IT_BORROW_TYPE,
                            IT_REMARKS: IT_REMARKS,
                            IT_PURPOSE: IT_PURPOSE,
                            IT_FORM_APPROVER: IT_FORM_APPROVER,
                            IT_APPROVER_EMAIL: IT_APPROVER_EMAIL
                        },
                        success: function()
                        { 
                            Swal.fire(
                                'Success',
                                'Your request is now sent. Thank you!',
                                'success'
                            ).then(function()
                            {  location.reload();
                                return false;
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
   });
   return false;  
});

