
<!-- //! For Tables -->
<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- <script src="../../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script> -->
<script src="../../../plugins/datatables/jquery.dataTables.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../../plugins/datatables-searchpanes/js/dataTables.searchPanes.min.js"></script>
<script src="../../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../plugins/datatables-staterestore/js/dataTables.staterestore.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../plugins/jszip/jszip.min.js"></script>
<script src="../../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="../../../plugins/datatables-select/js/dataTables.select.min.js"></script>
<script src="../../../plugins/datatables-searchbuilder/js/dataTables.searchbuilder.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>

<!-- AdminLTE for demo purposes -->
<!-- <script src="../../../dist/js/demo.js"></script> -->
<!-- Select2 -->
<script src="../../../plugins/select2/js/select2.full.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<!-- <script src="../../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<script src="../../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../../plugins/moment/moment.min.js"></script>
<script src="../../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- SweetAlert2 -->
<script src="../../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- SweetAlert2 -->
<script src="../../../plugins/jquery-flexdatalist/jquery.flexdatalist.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="../../../dist/js/pages/dashboard.js"></script> -->
<!-- Filterizr-->
<!-- <script src="../../../plugins/filterizr/jquery.filterizr.min.js"></script> -->
<!-- Ekko Lightbox -->
<script src="../../../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- Bootstrap Tags Input -->
<!-- <script src="../../../plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script> -->
<!-- Selectize -->
<script src="../../../plugins/selectize/0.15.2/js/selectize.min.js" ></script>


<!-- Date Picker -->
<script>
    $(document).ready(function() {
        $(function() {
            $("#IT_DATE_FROM").datepicker({
                defaultDate: new Date(),
                minDate: new Date(),
                dateFormat: 'yy-mm-dd',
                onSelect: function(dateStr) 
                {         
                    $("#IT_DATE_TO").val(dateStr);
                    $("#IT_DATE_TO").datepicker("option",{ minDate: new Date(dateStr)})
                }
            });
            $("#IT_DATE_TO").datepicker({
                defaultDate: new Date(),
                dateFormat: 'yy-mm-dd',
                onSelect: function(dateStr) {
                    toDate = new Date(dateStr);
                    // Converts date objects to appropriate strings
                    fromDate = ConvertDateToShortDateString(fromDate);
                    toDate = ConvertDateToShortDateString(toDate);
                }
            });
        });
    })
</script>


<!-- dropzonejs -->
<script src="../../../plugins/dropzone/min/dropzone.min.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="../../../plugins/moment/moment.min.js"></script>
<script src="../../../plugins/fullcalendar/main.js"></script>

<!-- bs-custom-file-input -->
<script src="../../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Modal Multitab -->
<script src="../../../plugins/scripts/modal_multitab.js"></script>
<!-- Personal Scripts -->
  <!-- bs-custom-file-input -->
  <script src="../../../plugins/scripts/customFileInput.js"></script>

  <!-- Dropzone JS -->
  <!-- <script src="../../../plugins/scripts/mydropzone.js"></script>--> <!---Check for other needing script -->
  <!-- For Summernote -->
  <script src="../../../plugins/scripts/mysummernote.js"></script>
  <!-- For Profile Picture Preview -->
  <script>
    function preview() {
  thumb1.src=URL.createObjectURL(event.target.files[0]);
}
function previewUserPhoto() {
  photoPreview.src=URL.createObjectURL(event.target.files[0]);
}
    function previewUserPhotoEdit() {
  photoPreviewEdit.src=URL.createObjectURL(event.target.files[0]);
}

function previewEmpPhoto() {
  photoPreview.src=URL.createObjectURL(event.target.files[0]);
}
function previewEmpPhotoEdit() {
    photoPreviewEdit.src=URL.createObjectURL(event.target.files[0]);
}
    function previewItemPhoto() {
  photoPreview.src=URL.createObjectURL(event.target.files[0]);
}
    function previewItemPhotoEdit() {
  photoPreviewEdit.src=URL.createObjectURL(event.target.files[0]);
}
  </script>

  <script>
    $('.flexdatalist').flexdatalist({
     minLength: 1 });
  </script>

  <script src="../../../plugins/scripts/checkboxAgreement.js"></script>


  <script src="../../../plugins/scripts/updateprofile.js"></script>
  <script src="../../../plugins/scripts/changeprofilepic.js"></script>
  <script src="../../../plugins/scripts/forgot_password.js"></script>

  <!-- <script src="../../../plugins/scripts/digital-clock.js"></script> -->
  <!-- <script src="../../../plugins/scripts/display-date.js"></script> -->

  <script src="../../../plugins/scripts/logout.js"></script>
  <script src="../../../plugins/scripts/support.js"></script>
  <script src="../../../plugins/scripts/emailConfig.js"></script>
  <script src="../../../plugins/scripts/systemConfig.js"></script>
  <script src="../../../plugins/scripts/import_xlsx.js"></script>
  <script src="../../../plugins/scripts/preventRefreshSubmit.js"></script>

  <?php switch (param_title()) {
      case "changeuserpass.php":
          echo '<script src="../../../plugins/scripts/validatepass.js"></script>';
          echo '<script src="../../../plugins/scripts/changeuserpass.js"></script>';
          break;
      case "register.php":
      case "login.php":
          echo '<script src="../../../plugins/scripts/account-registration-stepper.js"></script>';
          echo '<script src="../../../plugins/scripts/autofill_info.js"></script>';
          echo '<script src="../../../plugins/scripts/countTrainingValidation.js"></script>';
          echo '<script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>';
          break;
      case "recover-password.php":
          echo '<script src="../../../plugins/scripts/recover_password.js"></script>';
          echo '<script src="../../../plugins/scripts/validate_recover_password.js"></script>';
          break;
      case "recover-password.php":
          echo '<script src="../../../plugins/scripts/recover_password.js"></script>';
          break;
      //Personal 
      case "calendar.php":
        include('../../includes/parseJsonCalendar.inc.php');
        echo '<script src="../../../plugins/scripts/calendar.js"></script>';
        break;
      case "dashboard.php":
        include ('../controller/controller_dashboard.php');
        break;
      // CRUD
      case "userManagement.php":
          echo '<script src="../../../plugins/scripts/importUser.js"></script>';
          echo '<script src="../../../plugins/scripts/upload_photo.js"></script>';
          echo '<script src="../../../plugins/scripts/crud_datatables_tbluser.js"></script>';
          echo '<script src="../../../plugins/scripts/autofill_info_tbluser.js"></script>';
          break;
      case "userManagement_addUser.php":
          echo '<script src="../../../plugins/scripts/addUser.js"></script>';
          echo '<script src="../../../plugins/scripts/selectize-role.js"></script>';
          echo '<script src="../../../plugins/scripts/autofill_info_tbluser.js"></script>';
          break;
      case "userManagement_editUser.php":
          echo '<script src="../../../plugins/scripts/editUser.js"></script>';
          echo '<script src="../../../plugins/scripts/selectize-role.js"></script>';
          echo '<script src="../../../plugins/scripts/autofill_info_tbluser.js"></script>';
          break;
      case "tblemplist.php":
          echo '<script src="../../../plugins/scripts/ekko-lightbox.js"></script>';
          echo '<script src="../../../plugins/scripts/crud_datatables_tblemplist.js"></script>';
          break;
      case "tblemplist_addemp.php":
          echo '<script src="../../../plugins/scripts/addEmp.js"></script>';
          break;
      case "tblemplist_editemp.php":
          echo '<script src="../../../plugins/scripts/editEmp.js"></script>';
          break;
      case "tblemplist_profile.php":
          echo '<script src="../../../plugins/scripts/tblemplist_profile.js"></script>';
          break;
      case "advanceprofile.php":
          echo '<script src="../../../plugins/scripts/advanceprofile.js"></script>';
          break;
      case "tblemplist_edu.php":
          include ('../controller/controller_tblemplist_edu.php');
          echo '<script src="../../../plugins/scripts/importUser.js"></script>';
          break;
      case "tblemplist_com.php":
          include ('../controller/controller_tblemplist_com.php');
          echo '<script src="../../../plugins/scripts/importUser.js"></script>';
          break;
      case "tblemplist_license.php":
          include ('../controller/controller_tblemplist_lic.php');
          echo '<script src="../../../plugins/scripts/importUser.js"></script>';
          break;
      case "tblemplist_comp_skill.php":
          include ('../controller/controller_tblemplist_comp_skill.php');
          echo '<script src="../../../plugins/scripts/importUser.js"></script>';
          break;
      case "tblemplist_tech_skill.php":
          include ('../controller/controller_tblemplist_tech_skill.php');
          echo '<script src="../../../plugins/scripts/importUser.js"></script>';
          break;
      case "tblemplist_license.php":
          include ('../controller/controller_tblemplist_license.php');
          break;
      case "tbltoDoList.php":
          echo '<script src="../../../plugins/scripts/crud_datatables_tbltodolist.js"></script>';
          break;
      case "tblfiles.php":
          echo '<script src="../../../plugins/scripts/crud_datatables_tblfiles.js"></script>';
          break;
      case "toDoList.php":
          echo '<script src="../../../plugins/scripts/add_tbltodolist.js"></script>';
          break;
      case "announcement.php":
          echo '<script src="../../../plugins/scripts/announcement.js"></script>';
          echo '<script src="../../../plugins/scripts/deleteannouncement.js"></script>';
          break;
      case "comment.php":
          echo '<script src="../../../plugins/scripts/comment.js"></script>';
          echo '<script src="../../../plugins/scripts/deletecomment.js"></script>';
          break;
      // MAIN
      // request table
      case "createtraining.php":
          echo '<script src="../../../plugins/scripts/crud_datatables_createtraining.js"></script>';
          break;
      case "reg_form.php":
          echo '<script src="../../../plugins/scripts/reg_form.js"></script>';
          break;
      case "assochistory.php":
          echo '<script src="../../../plugins/scripts/crud_datatables_assochistory.js"></script>';
          break;
      case "assocprofile.php":
          include('../controller/controller_assocprofile_js.php');
          break;
      case "traininglist.php":
          echo '<script src="../../../plugins/scripts/crud_datatables_traininglist.js"></script>';
          break;
      case "submittedlist.php":
          echo '<script src="../../../plugins/scripts/crud_datatables_submittedlist.js"></script>';
          break;
      case "traininginfo.php":
          echo '<script src="../../../plugins/scripts/crud_datatables_traininginfo.js"></script>';
          break;
      case "registration_assoc.php":
          echo '<script src="../../../plugins/scripts/ekko-lightbox.js"></script>';
          include ('../controller/controller_registerassoc_js.php');
          break;
      case "tblrequest.php":
          echo '<script src="../../../plugins/scripts/crud_datatables_tblrequest.js"></script>';
          break;
      case "tblitem_monitor.php":
          echo '<script src="../../../plugins/scripts/crud_datatables_tblitem_monitor.js"></script>';
          break;
      case "tblitem_logs.php":
          echo '<script src="../../../plugins/scripts/crud_datatables_tblitem_logs.js"></script>';
          break;
      // Inventory
      case "tblinventory.php":
          echo '<script src="../../../plugins/scripts/crud_datatables_tblinventory.js"></script>';
          break;
      case "training_sess.php":
          echo '<script src="../../../plugins/scripts/autofill_assoc_info.js"></script>';
          echo '<script src="../../../plugins/scripts/training_sess.js"></script>';
     
          break;
      // Approve Table
      case "tblapprove.php":
          echo '<script src="../../../plugins/scripts/crud_datatables_tblapprove.js"></script>';
          break;
      case "addRequestForm.php":
          echo '<script src="../../../plugins/scripts/addRequestForm.js"></script>';
          break;
      case "editRequestForm.php":
          echo '<script src="../../../plugins/scripts/editRequestForm.js"></script>';
          break;
      case "approveRequestForm.php":
          echo '<script src="../../../plugins/scripts/approveRequestForm.js"></script>';
          break;
      case "returnRequestForm.php":
          echo '<script src="../../../plugins/scripts/returnRequestForm.js"></script>';
          break;
      case "addMultipleItem.php":
          echo '<script src="../../../plugins/scripts/addMultiple_tblinventory.js"></script>';
          break;
      case "cartrequest.php":
          echo '<script src="../../../plugins/scripts/cartrequest.js"></script>';
          break;
      case "addtocart.php":
          echo '<script src="../../../plugins/scripts/addtocart.js"></script>';
          echo '<script src="../../../plugins/scripts/controlNumber.js"></script>';
          break;
      case "request_comment.php":
          echo '<script src="../../../plugins/scripts/request_comment.js"></script>';
          echo '<script src="../../../plugins/scripts/delete_requestComment.js"></script>';
          break;
      case "itemQRScan.php":
          echo '<script src="../../../plugins/qr-scanner/examples/html5/html5-qrcode.min.js"></script>';
          echo '<script src="../../../plugins/scripts/qr_scan.js"></script>';
          echo '<script src="../../../plugins/scripts/autofill_itemQRScan.js"></script>';
          break;
      // Approver Table
      case "tblapprove.php":
          echo '<script src="../../../plugins/scripts/crud_datatables_tblapprove.js"></script>';
          break;
  }
?>
<!-- Personal Scripts -->

<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>

