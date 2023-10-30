let param;
$(document).ready(function () {
  //! Select Current Data
  let url = window.location.href.split("=");
  param = url[1]; // <--------------------------------

  $.ajax({
    //                                  |
    url: "../controller/controller_reg_form.php?action=mainRegForm", //    |
    type: "POST", //                                  |
    data: {
      //                                   |
      param: param, // <----------------------------------  param: <---- POST    param:param <---- the value
      mode: "mainRegForm",
    },
    dataType: "json",
    success: function (result) {
      trainingnum = result.REG_TRAINING_NUM;
      $("#BURR_SHEET_TRANSACT_STATUS").val(result.BURR_SHEET_TRANSACT_STATUS);
      $("#REG_NUM").val(result.REG_NUM);
      $("#REG_TRAINING_NUM").val(trainingnum);
      $("#REG_LEADER_NAME").val(result.REG_LEADER_NAME);
      $("#REG_LEADER_ID").val(result.REG_LEADER_ID);
      $("#REG_EMP_DEPT").val(result.REG_EMP_DEPT);
      $("#REG_EMP_SECT").val(result.REG_EMP_SECT);
      $("#TRAINING_NAME").val(result.TRAINING_NAME);
      $("#REG_TIMESTAMP").val(result.REG_TIMESTAMP);
      $("#TRAINING_START_DATE").val(result.TRAINING_START_DATE);
      $("#TRAINING_END_DATE").val(result.TRAINING_END_DATE);
      $("#TRAINING_MIN_REQ").val(result.TRAINING_MIN_REQ);
      $("#TRAINING_MAX_REQ").val(result.TRAINING_MAX_REQ);
      $("#TRAINING_TRAINOR").val(result.TRAINING_TRAINOR);
      $("#TRAINING_LOCATION").val(result.TRAINING_LOCATION);
    },
  });

  var dataTable = $("#mainTable").DataTable({
    ajax:
      "../controller/controller_reg_form.php?action=mainRegTable&param=" +
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
    responsive: {
      details: {
        type: "column",
        target: -1,
      },
    },
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
        text: "Register",
        action: function (e, dt, node, config) {
          location.href = "registration_assoc.php?tnum=" + trainingnum;
        },
      },
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
});
