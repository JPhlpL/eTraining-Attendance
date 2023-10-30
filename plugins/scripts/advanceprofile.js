

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
          $('#EMPLOYEE_EMAIL').val(result.EMPLOYEE_EMAIL); 
          $('#EMPLOYEE_MOBILE_NUM').val(result.EMPLOYEE_MOBILE_NUM); 
          $('#EMPLOYEE_AGE').val(result.EMPLOYEE_AGE); 
          $('#EMPLOYEE_GENDER').val(result.EMPLOYEE_GENDER); 
          $('#EMPLOYEE_DEPT').val(result.EMPLOYEE_DEPT); 
          $('#EMPLOYEE_SECTION').val(result.EMPLOYEE_SECTION); 
          $('#EMPLOYEE_POSITION').val(result.EMPLOYEE_POSITION); 
          $('#EMPLOYEE_JOB_LEVEL').val(result.EMPLOYEE_JOB_LEVEL); 
          $('#EMPLOYEE_STATUS').val(result.EMPLOYEE_STATUS); 
          $('#EMPLOYEE_DATE_HIRED').val(result.EMPLOYEE_DATE_HIRED);
          $('#EMPLOYEE_PHOTO').val(result.EMPLOYEE_PHOTO);
          $('#EMPLOYEE_HASHED').val(result.EMPLOYEE_HASHED);
          $('#param').val(result.EMPLOYEE_HASHED);
          // console.log(id_num);
          document.getElementById("photoPreviewEdit").src="../../uploads/employee_photo/"+$('#EMPLOYEE_PHOTO').val();
          }
       
      });

        //! Insert Employee Info
        $("#insert_empinfo").submit(function(e) {

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
                      data: new FormData($('#insert_empinfo')[0]), // get all form field value in serialize form
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

      // Unlock Update Profile
      $('#btn-update').click(function(e){
        $("#EMPLOYEE_NAME").removeAttr('disabled');
        $("#EMPLOYEE_AGE").removeAttr('disabled');
        $("#EMPLOYEE_GENDER").removeAttr('disabled');
        $("#EMPLOYEE_DEPT").removeAttr('disabled');
        $("#EMPLOYEE_SECTION").removeAttr('disabled');
        $("#EMPLOYEE_POSITION").removeAttr('disabled');
        $("#EMPLOYEE_JOB_LEVEL").removeAttr('disabled');
        $("#EMPLOYEE_STATUS").removeAttr('disabled');
        $("#EMPLOYEE_DATE_HIRED").removeAttr('disabled');
        $("#EMPLOYEE_EMAIL").removeAttr('disabled');
        $("#EMPLOYEE_MOBILE_NUM").removeAttr('disabled');

        $("#EMPLOYEE_PHOTOPIC").removeAttr('disabled');
        $("#labelPhoto").removeAttr('hidden');
        
        $("#btn-update").attr("hidden", true); 
        $("#btn-lock").removeAttr('hidden');
        $("#btn-submit").removeAttr('hidden');
      })

      // Lock Profile
      $('#btn-lock').click(function(e){
        $("#EMPLOYEE_NAME").attr("disabled", true); 
        $("#EMPLOYEE_AGE").attr("disabled", true); 
        $("#EMPLOYEE_GENDER").attr("disabled", true); 
        $("#EMPLOYEE_DEPT").attr("disabled", true); 
        $("#EMPLOYEE_SECTION").attr("disabled", true); 
        $("#EMPLOYEE_POSITION").attr("disabled", true); 
        $("#EMPLOYEE_JOB_LEVEL").attr("disabled", true); 
        $("#EMPLOYEE_STATUS").attr("disabled", true); 
        $("#EMPLOYEE_DATE_HIRED").attr("disabled", true); 
        $("#EMPLOYEE_EMAIL").attr("disabled", true); 
        $("#EMPLOYEE_MOBILE_NUM").attr("disabled", true); 

        $("#EMPLOYEE_PHOTOPIC").attr("disabled", true); 
        $("#labelPhoto").attr("hidden", true); 

        $("#btn-lock").attr("hidden", true); 
        $("#btn-submit").attr("hidden", true); 
        $("#btn-update").removeAttr('hidden');

      })

      // Redirect to Education Profile
      $('#edubtn').click(function(e){
        e.preventDefault();
        $.ajax({
          url: "../controller/controller_param_hashed.php",
          type: "POST",
          data:{
            param: param
          },
          success: function(result){
            location.href = 'tblemplist_edu.php?' + $('#EMPLOYEE_HASHED').val();
          }
        });
        // location.href = 'tblemplist_edu.php?' + $('#EMPLOYEE_HASHED').val();
      })

        // Redirect to Previous Company Profile
        $('#combtn').click(function(e){
          e.preventDefault();
          $.ajax({
            url: "../controller/controller_param_hashed.php",
            type: "POST",
            data:{
              param: param
            },
            success: function(result){
              location.href = 'tblemplist_com.php?' + $('#EMPLOYEE_HASHED').val();
            }
          });
          // location.href = 'tblemplist_edu.php?' + $('#EMPLOYEE_HASHED').val();
        })

        // Redirect to License
        $('#licbtn').click(function(e){
          e.preventDefault();
          $.ajax({
            url: "../controller/controller_param_hashed.php",
            type: "POST",
            data:{
              param: param
            },
            success: function(result){
              location.href = 'tblemplist_license.php?' + $('#EMPLOYEE_HASHED').val();
            }
          });
          // location.href = 'tblemplist_edu.php?' + $('#EMPLOYEE_HASHED').val();
        })

        // Redirect to License
        $('#techbtn').click(function(e){
          e.preventDefault();
          $.ajax({
            url: "../controller/controller_param_hashed.php",
            type: "POST",
            data:{
              param: param
            },
            success: function(result){
              location.href = 'tblemplist_tech_skill.php?' + $('#EMPLOYEE_HASHED').val();
            }
          });
          // location.href = 'tblemplist_edu.php?' + $('#EMPLOYEE_HASHED').val();
        })

        
        // Redirect to License
        $('#compskillbtn').click(function(e){
          e.preventDefault();
          $.ajax({
            url: "../controller/controller_param_hashed.php",
            type: "POST",
            data:{
              param: param
            },
            success: function(result){
              location.href = 'tblemplist_comp_skill.php?' + $('#EMPLOYEE_HASHED').val();
            }
          });
          // location.href = 'tblemplist_edu.php?' + $('#EMPLOYEE_HASHED').val();
        })

        // 

        //

        // Table for Educational Background
          var dataTable_approvalinfolist = $('#approvalinfotbl').DataTable({
            "ajax": "../controller/controller_fetch_tblemplist_history.php",
            "type": "POST",
            "serverSide": true,
            "responsive": {
            "details": {
                "type": 'column',
                "target": -1
                }
            },
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "searching": false,
            "bAutoWidth": false,
            "processing": true,
            "dom": 'Bfrtip',
            "serverSide": true,
            "fnDrawCallback":function () {
                  if ($('#edu_table tr').length = -1) {
                      $('.dataTables_paginate').hide();
                  }
              }, "columnDefs": [
                {
                    "className": 'dtr-control',
                    "orderable": false,
                    "targets": -1
                }
            ],
            buttons: [
              {extend: "excel", className: "buttonsToHide"},
              {extend: "pdf", className: "buttonsToHide"},
              {extend: "print", className: "buttonsToHide"}
            ]
          })
          dataTable_approvalinfolist.buttons( '.buttonsToHide' ).remove();
          dataTable_approvalinfolist.column(0).visible(false);
        // Table for Educational Background

        // Table for Educational Background
          var dataTable_edu = $('#edu_table').DataTable({
            "ajax": "../controller/controller_fetch_tblemplist_edu.php",
            "type": "POST",
            "serverSide": true,
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "searching": false,
            "bAutoWidth": false ,
            "processing": true,
            "dom": 'Bfrtip',
            "serverSide": true,
            "fnDrawCallback":function () {
                  if ($('#edu_table tr').length = -1) {
                      $('.dataTables_paginate').hide();
                  }
              },
            buttons: [
              {extend: "excel", className: "buttonsToHide"},
              {extend: "pdf", className: "buttonsToHide"},
              {extend: "print", className: "buttonsToHide"}
            ]
          })
          dataTable_edu.buttons( '.buttonsToHide' ).remove();
          dataTable_edu.column(0).visible(false);
        // Table for Educational Background

        // Table for Previous Company Background
        var dataTable_com = $('#com_table').DataTable({
          "ajax": "../controller/controller_fetch_tblemplist_com.php",
          "type": "POST",
          "serverSide": true,
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": true,
          "bInfo": false,
          "searching": false,
          "bAutoWidth": false ,
          "processing": true,
          "dom": 'Bfrtip',
          "serverSide": true,
          "fnDrawCallback":function () {
                if ($('#edu_table tr').length = -1) {
                    $('.dataTables_paginate').hide();
                }
            },
          buttons: [
            {extend: "excel", className: "buttonsToHide"},
            {extend: "pdf", className: "buttonsToHide"},
            {extend: "print", className: "buttonsToHide"}
          ]
        })
        dataTable_com.buttons( '.buttonsToHide' ).remove();
        dataTable_com.column(0).visible(false);
        // Table for Previous Company Background

        // Table for Professional License/Awards/Etc
          var dataTable_lic = $('#lic_table').DataTable({
            "ajax": "../controller/controller_fetch_tblemplist_lic.php",
            "type": "POST",
            "serverSide": true,
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "searching": false,
            "bAutoWidth": false ,
            "processing": true,
            "dom": 'Bfrtip',
            "serverSide": true,
            "fnDrawCallback":function () {
                  if ($('#edu_table tr').length = -1) {
                      $('.dataTables_paginate').hide();
                  }
              },
            buttons: [
              {extend: "excel", className: "buttonsToHide"},
              {extend: "pdf", className: "buttonsToHide"},
              {extend: "print", className: "buttonsToHide"}
            ]
          })
          dataTable_lic.buttons( '.buttonsToHide' ).remove();
          dataTable_lic.column(0).visible(false);
        // Table for Professional License/Awards/Etc

        //Populate Tech
        $.ajax({
          url: "../controller/controller_techskill_populate.php",
          type: "GET",
          dataType: "json",
          success: function (data) {
              $.each(data, function (index, value) {
                  // Iterate through each row of data
                  var label = $("<label>").text(value.EMPLOYEE_TECH_SKILL).addClass("label-margin");
                  $(".techSkill").append(label);
              });
          }
        });
        //Populate Tech

        //Populate Competency
        $.ajax({
          url: "../controller/controller_compskill_populate.php",
          type: "GET",
          dataType: "json",
          success: function (data) {
              $.each(data, function (index, value) {
                  // Iterate through each row of data
                  var label = $("<label>").text(value.EMPLOYEE_COMP_SKILL).addClass("label-margin");
                  $(".compSkill").append(label);
              });
          }
        });
        //Populate Competency

  });  


  
  