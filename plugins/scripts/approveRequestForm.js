//! Decline
$('body').on('click', '#declineBtn', function () {
    var id = $(this).data('id'); // Primary ID 
    $.ajax({
        url:"../controller/controller_declineRequestForm.php",
        type: "POST",
        data: {
            id: id,
            mode: 'edit' 
        },
        dataType : 'json',
        success: function(result){
        $('#id').val(result.id);
        $('#IT_TRANSACTION_ID').val(result.IT_TRANSACTION_ID);
        $('#IT_DECLINE_REASON').val(result.IT_DECLINE_REASON);
        $('#edit-modal').modal('show');
        }
    });
});

$('#update-form').submit(function(e){
    e.preventDefault();
    // ajax
    $.ajax({
        url:"../controller/controller_declineRequestForm.php",
        type: "POST",
        data: $(this).serialize(), // get all form field value in serialize form
        success: function(){
            Swal.fire(
                'Success',
                'The data is now declined. Thank you!',
                'success'
            ).then(function()
            {  
               location.href='tblapprove.php';
            });
        }
    });
});  

//! Approver Side
$('body').on('click', '#approvalSupBtn', function () {

    var IT_TRANSACTION_CODE_HASHED = $("#IT_TRANSACTION_CODE_HASHED").val();

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
                url:"../controller/controller_approveSupRequestForm.php",
                type: "POST",
                data: {
                    IT_TRANSACTION_CODE_HASHED: IT_TRANSACTION_CODE_HASHED
                },
                success: function()
                { 
                    Swal.fire(
                        'Success',
                        'The data is now approved. Thank you!',
                        'success'
                    ).then(function()
                    {  
                       location.href = 'tblapprove.php';
                    });
                },
                
                error: function() {
                    Swal.fire(
                        'Success',
                        'The data is now approved. Thank you!',
                        'success'
                    ).then(function()
                    {  
                        location.href = 'tblapprove.php';
                    });
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

//! Decline Side
$('body').on('click', '#declineSupBtn', function () {

    var IT_TRANSACTION_CODE_HASHED = $("#IT_TRANSACTION_CODE_HASHED").val();

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
                url:"../controller/controller_declineSupRequestForm.php",
                type: "POST",
                data: {
                    IT_TRANSACTION_CODE_HASHED: IT_TRANSACTION_CODE_HASHED
                },
                success: function()
                { 
                    Swal.fire(
                        'Success',
                        'The data is now declined. Thank you!',
                        'success'
                    ).then(function()
                    {  
                       location.href = 'tblapprove.php';
                    });
                },
                
                error: function() {
                    Swal.fire(
                        'Success',
                        'The data is now declined. Thank you!',
                        'success'
                    ).then(function()
                    {  
                        location.href = 'tblapprove.php';
                    });
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

//! Approve ISD
$('body').on('click', '#approvalBtn', function () {

    var IT_TRANSACTION_CODE_HASHED = $("#IT_TRANSACTION_CODE_HASHED").val();

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
                url:"../controller/controller_approveRequestForm.php",
                type: "POST",
                data: {
                    IT_TRANSACTION_CODE_HASHED: IT_TRANSACTION_CODE_HASHED
                },
                success: function()
                { 
                    Swal.fire(
                        'Success',
                        'The data is now approved. Thank you!',
                        'success'
                    ).then(function()
                    {  
                       location.href = 'tblapprove.php';
                    });
                },
                
                error: function() {
                    Swal.fire(
                        'Success',
                        'The data is now approved. Thank you!',
                        'success'
                    ).then(function()
                    {  
                        location.href = 'tblapprove.php';
                    });
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
