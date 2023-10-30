<script>
$(document).ready(function () {
  //! Select Current Data
  let url = window.location.href.split("=");
  const param = url[1]; // <--------------------------------
  $.ajax({
    //                                  |
    url: "../controller/controller_fetch_assocprofile.php?action=fetchMain", //    |
    type: "POST", //                                  |
    data: {
      param: param,
    },
    dataType: "json",
    success: function (result) {
      $("#REG_SUB_EMP_ID").val(result.REG_SUB_EMP_ID);
      $("#REG_SUB_EMP_NAME").val(result.REG_SUB_EMP_NAME);
      $("#REG_SUB_EMP_DEPT").val(result.REG_SUB_EMP_DEPT);
      $("#REG_SUB_EMP_SECT").val(result.REG_SUB_EMP_SECT);
      $("#REG_SUB_EMP_POSITION").val(result.REG_SUB_EMP_POSITION);
      $("#param").val(result.REG_SUB_EMP_ID);
      // console.log(id_num);
      document.getElementById("photoPreviewEdit").src =
        "../../uploads/employee_photo/" + $("#REG_SUB_EMP_ID").val();
    },
  });

  //! Table History Configuration
  $("#history_table").DataTable({
    ajax: "../controller/controller_fetch_assocprofile.php?action=fetchSubMain&empnum="+param,
    type: "POST",
    processing: true,
    dom: "Bfrt",
    serverSide: true,
    lengthChange: false,
    autoWidth: false,
    deferRender: true,
    responsive: {
      details: {
        type: "column",
        target: -1,
      },
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
        text: "Export",
        buttons: ["copy", "excel", "csv", "pdf", "print"],
      },
      {
        text: "History",
        action: function (e, dt, node, config) {
          $("#burrbtn").click();
        },
      },
    ],
  });
});

</script>