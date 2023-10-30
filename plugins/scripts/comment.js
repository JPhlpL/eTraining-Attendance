$(document).ready(function() {
    
    //! Create
    $("#commentBtn").click(function(e) {
   
       e.preventDefault();

       var comment_announce_id = $("#comment_announce_id").val();
       var comment_name = $("#comment_name").val();
       var commentContent = $("#commentContent").val();


       if(commentContent == ''||comment_name == ''|| comment_announce_id == '') {
       Swal.fire( 
       'Error',
       'No Input Found!',
       'error');
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
                    url: "../controller/controller_sendComment.php",
                    data: {
                        comment_announce_id: comment_announce_id,
                        comment_name: comment_name,
                        commentContent: commentContent
                    },
                    success: function()
                    { 
                        Swal.fire(
                            'Success',
                            'Your comment is now sent. Thank you!',
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

