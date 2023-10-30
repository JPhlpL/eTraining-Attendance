//*Focus only on rfid number input

  $(document).ready(function () {

    $('#focusbtn').click(function() {
      $("#ATTN_RFID_NUM").focus()
    });
  
  
    //! Select Current Data
    let url = window.location.href.split("=");
    param = url[1];

    $.ajax({ //                                  |                              
        url: "../controller/controller_training_sess.php?mode=fetchSessionType", //    |
        type: "POST", //                                  |
        data: { //                                   |
            param: param
        },
        dataType: 'json',
        success: function(result) {
          var sess_type_val = result.SESS_TYPE;
            $('#SESS_TYPE').val(sess_type_val);
            if(sess_type_val == 'TIME-OUT'){
              $('#STATUS_SESS_TYPE').removeClass("btn-success");
              $('#STATUS_SESS_TYPE').addClass("btn-warning");
              $('#training_panel').css("display","");
              $('#focusbtn').click();
            }
            else if(sess_type_val == 'ENDTRAINING'){
              $('#STATUS_SESS_TYPE').removeClass("btn-warning");
              $('#STATUS_SESS_TYPE').addClass("btn-danger");
              $('#training_panel').css("display","");
              $('#focusbtn').click();
            }
            else if(sess_type_val == "DONE"){
              $('#STATUS_SESS_TYPE').attr('hidden', true);
              $('#training_panel').css("display","none");
              Swal.fire(
                'Alert!','Done session. Directing to training list..','warning').then(function() {
                location.href = 'traininglist.php';
              });
            }
        }
    });

    $("#STATUS_SESS_FORM").on('submit', function(e) {
      e.preventDefault();

      Swal.fire({
          title: "Confirmation",
          text: "Are you sure?",
          footer: '',
          type: "info",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes",
          cancelButtonText: "No",
          closeOnConfirm: false,
          closeOnCancel: false
      }).then(function(result) {
          if (result.value) {
              //
              $.ajax({
                  url: "../controller/controller_training_sess.php?mode=changeSess",
                  method: "POST",
                  data: new FormData(document.getElementById("STATUS_SESS_FORM")), // get all form field value in serialize form
                  contentType: false,
                  cache: false,
                  processData: false,
                  dataType: "json",
                  success: function(response) {
                    var title;
                    var content;
                    var logo;
                    if(response.SESS_TYPE == 'TIME-IN'){
                      title = 'Alert!';
                      content = 'Time In!';
                      logo = 'success';
                    }
                    else if(response.SESS_TYPE == 'TIME-OUT'){
                      title = 'Alert!';
                      content = 'Time Out!';
                      logo = 'info';
                    }
                    else if(response.SESS_TYPE == 'ENDTRAINING'){
                      title = 'Alert!';
                      content = "The training session is now end. Thank you!";
                      logo = 'warning';
                    }
                    Swal.fire(title,content,logo).then(function() {
                        location.reload();
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
          } else if (result.value === "") {
              Swal.fire("Cancelled", "Cancel", "error");
              return false;
          }
      });
      return false;
    });
    
  
    //* FOR RFID
    $("#sendAttendanceRFID").click(function (e) {
      e.preventDefault();
  
      //!Send Attendance
      var EMPLOYEE_ID = $("#EMPLOYEE_ID").val();
      var TRAINING_NUM = $("#TRAINING_NUM").val();
      var ATTN_RFID_NUM = $("#ATTN_RFID_NUM").val();
      var SESS_TYPE = $("#SESS_TYPE").val();
  
      setTimeout(function () {
        if (EMPLOYEE_ID === "" || EMPLOYEE_ID === null) {
          $('#ATTN_RFID_NUM').val('');
          Swal.fire({
            icon: "error",
            title: "Error!",
            text: "No Employee Number Found!",
            timer: 1000,
            didOpen: () => {
              Swal.showLoading();
  
              timerInterval = setInterval(() => {
                Swal.getHtmlContainer().querySelector("strong").textContent =
                  (Swal.getTimerLeft() / 1000).toFixed(0);
              }, 100);
            },
            willClose: () => {
              clearInterval(timerInterval);
            }
          });
          return false;
        }
        $.ajax({
          url: "../controller/controller_training_sess.php?mode=rfid",
          type: "POST",
          data: {
            EMPLOYEE_ID: EMPLOYEE_ID,
            TRAINING_NUM: TRAINING_NUM,
            ATTN_RFID_NUM: ATTN_RFID_NUM,
            SESS_TYPE: SESS_TYPE
          },
          // contentType: false,
          // cache: false,
          // processData: false,
          dataType: 'json',
          success: function (response) {
  
            let timerInterval;
            
            //* If duplicate
            if (response.error == 'Duplicate') 
            {
            //
            $('#ATTN_RFID_NUM').val('');
            Swal.fire({
              icon: "error",
              title: "Error!",
              text: "Duplicate RFID Detected!",
              footer: "Powered by DNPH - IS",
              timer: 1000,
              didOpen: () => {
                Swal.showLoading();

                timerInterval = setInterval(() => {
                  Swal.getHtmlContainer().querySelector("strong").textContent =
                    (Swal.getTimerLeft() / 1000).toFixed(0);
                }, 100);
              },
              willClose: () => {
                clearInterval(timerInterval);
              },
            }).then(function () {
              // location.reload();
              document.getElementById("qrscan").src="";
              $('#EMPLOYEE_NAME').val('');
              $('#EMPLOYEE_ID').val('');
              $('#EMPLOYEE_DEPT').val('');
              $('#EMPLOYEE_SECTION').val('');
              $('#EMPLOYEE_POSITION').val('');
              $('#EMPLOYEE_STATUS').val('');
              return false;
            });
            // 
            } 
            else if(response.error == 'NotExist')
            {
            //
            $('#ATTN_RFID_NUM').val('');
            Swal.fire({
              icon: "error",
              title: "Error!",
              text: "The associate is not registered",
              footer: "Powered by DNPH - IS",
              timer: 1000,
              didOpen: () => {
                Swal.showLoading();

                timerInterval = setInterval(() => {
                  Swal.getHtmlContainer().querySelector("strong").textContent =
                    (Swal.getTimerLeft() / 1000).toFixed(0);
                }, 100);
              },
              willClose: () => {
                clearInterval(timerInterval);
              },
            }).then(function () {
              // location.reload();
              document.getElementById("qrscan").src="";
              $('#EMPLOYEE_NAME').val('');
              $('#EMPLOYEE_ID').val('');
              $('#EMPLOYEE_DEPT').val('');
              $('#EMPLOYEE_SECTION').val('');
              $('#EMPLOYEE_POSITION').val('');
              $('#EMPLOYEE_STATUS').val('');
              return false;
            });
            // 
            }
            //* If first time to in
            else if(response.error == 'none'){
              $('#ATTN_RFID_NUM').val('');
              const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener("mouseenter", Swal.stopTimer);
                      toast.addEventListener("mouseleave", Swal.resumeTimer);
                    },
                  });
                  Toast.fire({
                    icon: "success",
                    title: "QR Read Successfully. Verifying...",
                  }).then(function () {
                    // location.reload();
                    return false;
         
                  });
            }
          }
          
          ,error: function () {
            $('#ATTN_RFID_NUM').val('');
            const Toast = Swal.mixin({
              toast: true,
              position: "top-end",
              showConfirmButton: false,
              timer: 1500,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener("mouseenter", Swal.stopTimer);
                toast.addEventListener("mouseleave", Swal.resumeTimer);
              },
            });
            Toast.fire({
              icon: "error",
              title: "Check again your inputs. Thank you!",
            }).then(function () {
              // location.reload();
              return false;
            });
          }
  
        });
      }, 1);
    });
  
  });
  