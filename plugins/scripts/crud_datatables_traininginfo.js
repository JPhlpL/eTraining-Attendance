$(document).ready(function(){
    //! Select Current Data
    let url = window.location.href.split("=");
    const param = url[1]; // <--------------------------------
    $.ajax({ //                                  |                              
        url: "../controller/controller_traininginfo.php?action=fetchtraininginfo", //    |
        type: "POST", //                                  |
        data: { //                                   |
            param: param // <----------------------------------  param: <---- POST    param:param <---- the value 
        },
        dataType: 'json',
        success: function(result) {
            $('#TRAINING_NUM').val(result.TRAINING_NUM);
            $('#TRAINING_NAME').val(result.TRAINING_NAME);
            $('#TRAINING_LOCATION').val(result.TRAINING_LOCATION);
            $('#TRAINING_DETAIL').val(result.TRAINING_DETAIL);
            $('#TRAINING_STATUS').val(result.TRAINING_STATUS);
            $('#TRAINING_OCCUR').val(result.TRAINING_OCCUR);
            $('#TRAINING_OCCUR_NUM').val(result.TRAINING_OCCUR_NUM);
            $('#TRAINING_START_DATE').val(result.TRAINING_START_DATE);
            $('#TRAINING_END_DATE').val(result.TRAINING_END_DATE);
            $('#TRAINING_START_TIME').val(result.TRAINING_START_TIME);
            $('#TRAINING_END_TIME').val(result.TRAINING_END_TIME);
            $('#TRAINING_REMARKS').val(result.TRAINING_REMARKS);
            $('#TRAINING_MIN_REQ').val(result.TRAINING_MIN_REQ);
            $('#TRAINING_MAX_REQ').val(result.TRAINING_MAX_REQ);
            $('#TRAINING_TRAINOR').val(result.TRAINING_TRAINOR);
        }
    });

    var dataTable = $("#mainTable").DataTable({
        ajax:
          "../controller/controller_traininginfo.php?action=listattendees&tnum=" +
          param,
        type: "POST",
        processing: true,
        dom: "Bfrtip",
        serverSide: true,
        lengthChange: false,
        autoWidth: false,
        stateSave: true,
        stateSaveCallback: function (settings, data) {
          localStorage.setItem(
            "DataTables_" + settings.sInstance,
            JSON.stringify(data)
          );
        },
        stateLoadCallback: function (settings) {
          return localStorage.getItem("DataTables_" + settings.sInstance);
        }, // other DataTables options go here });
        deferRender: true,
        language: {
          infoFiltered: "",
        },
        select: {
          style: "multi",
          selector: 'td:nth-child(1) input[type="checkbox"]',
          className: "selected-row",
        },
        columnDefs: [
          {
            className: "dtr-control",
            orderable: false,
            targets: -1,
          },
        ],
        buttons: [
  
          {
            extend: "collection",
            text: "Select Rows",
            buttons: [
              //! Display All Row
              {
                text: "All Rows",
                action: function (e, dt, node, config) {
                  dataTable.page.len(-1).draw();
                },
              },
              //! Display Current Row
              {
                text: "Current Rows",
                action: function (e, dt, node, config) {
                  dataTable.page.len(10).draw();
                },
              },
            ],
          },
           {
            text: "All Rows",
            action: function (e, dt, node, config) {
              dataTable.page.len(-1).draw();
            },
          },
          {
            extend: "collection",
            text: "Export",
            buttons: ["copy", "excel", "csv", "pdf", "print"],
          },
          {
            extend: "collection",
            text: "Extensions",
            buttons: ["createState", "savedStates", "colvis"],
          },
        ],
      });
    
    $("#cancelForm").on('submit', function(e) {

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
                    url: "../controller/controller_traininginfo.php?action=cancelTraining",
                    method: "POST",
                    data: new FormData(document.getElementById("cancelForm")), // get all form field value in serialize form
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function() {
                        Swal.fire(
                            'Success',
                            'The training is now cancelled. Thank you!',
                            'success'
                        ).then(function() {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 2000,
                                timerProgressBar: true
                            });

                            Toast.fire({
                                icon: 'success',
                                title: 'Redirecting to Training List...'
                            }).then(function() {
                                location.href = "traininglist.php";
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
            } else if (result.value === "") {
                Swal.fire("Cancelled", "Cancel", "error");
                return false;
            }
        });
        return false;
    });

});