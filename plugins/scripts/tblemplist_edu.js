

$(document).ready(function(){  

    //! Select Current Data
      let url = window.location.href.split("?");
      const param = url[1];  // <--------------------------------
      $.ajax({               //                                  |                              
          url:"../controller/controller_crud_tblemplist.php", //    |
          type: "POST",      //                                  |
          data: {           //                                   |
              param: param, // <----------------------------------  param: <---- POST    param:param <---- the value 
              mode: 'edit'   
          },
          dataType : 'json',
          success: function(result){
          $('#EMPLOYEE_ID').val(result.EMPLOYEE_ID);
          $('#EMPLOYEE_NAME').val(result.EMPLOYEE_NAME); 
          $('#EMPLOYEE_PHOTO').val(result.EMPLOYEE_PHOTO);
          $('#EMPLOYEE_HASHED').val(result.EMPLOYEE_HASHED);
          // console.log(id_num);
          document.getElementById("photoPreview").src="../../uploads/employee_photo/"+$('#EMPLOYEE_PHOTO').val();
          }
       
      });

      $('#edubtn').click(function(e){
        e.preventDefault();
        $.ajax({
          url: "../controller/controller_edubtn_redirect.php",
          type: "POST",
          data:{
            param: param
          },
          success: function(result){
              alert('redirecting');
          }
        });
        // location.href = 'tblemplist_edu.php?' + $('#EMPLOYEE_HASHED').val();
      })

        //! For Profile Picture
      function previewUserPhoto() {
        photoPreview.src=URL.createObjectURL(event.target.files[0]);
      }

  });  


  
  