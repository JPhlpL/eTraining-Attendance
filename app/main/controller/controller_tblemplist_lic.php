<script>
//declaring function
var SmartMultiFiled = (function() {
    var rowcount, html, addBtn, tableBody;

    addBtn = $(".addNew"); //for add button
    rowcount = $("#autocomplete_table tbody tr").length + 1; //row count
    tableBody = $("#autocomplete_table tbody"); // table body

    //format of table
    function formHtml() {
        html = '<tr id="row_' + rowcount + '">';    
            html += '<td><div class="form-check exampleCheck"><input type="checkbox" class="form-check-input selectedRow" id="exampleCheck" value="" disabled><label class="form-check-label" for="exampleCheck"></label></div></td>';
            html += '<td><textarea required name="EMPLOYEE_LICENSE[]" id="EMPLOYEE_LICENSE_' + rowcount + '" class="form-control autocomplete_txt EMPLOYEE_LICENSE" autocomplete="off" cols="70" rows="2"></textarea></td>';
            html += '<td><textarea required name="EMPLOYEE_LIC_DESCRIPTION[]" id="EMPLOYEE_LIC_DESCRIPTION_' + rowcount + '" class="form-control autocomplete_txt EMPLOYEE_LIC_DESCRIPTION" autocomplete="off" cols="70" rows="2"></textarea></td>';
            html += '<td><input required type="date" name="EMPLOYEE_LIC_START_DATE[]" id="EMPLOYEE_LIC_START_DATE_' + rowcount + '" class="form-control autocomplete_txt EMPLOYEE_LIC_START_DATE" autocomplete="off"></td>';
            html += '<td><input required type="date" name="EMPLOYEE_LIC_EXP_DATE[]" id="EMPLOYEE_LIC_EXP_DATE_' + rowcount + '" class="form-control autocomplete_txt EMPLOYEE_LIC_EXP_DATE" autocomplete="off"></td>';    
            html += '<td><button id="delete_' + rowcount + '" class="delete_row border border-secondary text-dark rounded" style="cursor:pointer;">  <i class="p-2 nav-icon fas fa-trash-alt"></i></button></td>';
        html += '</tr>';
        rowcount++;
        return html;
    }

    //getting the id
    function getId(element) {
        var id, idArr;
        id = element.attr('id');
        idArr = id.split("_");
        return idArr[idArr.length - 1];
    }

    // add new row
    function addNewRow() {
        tableBody.append(formHtml());
        console.log(rowcount);
    }

    // deleting row
    function deleteRow() {
        var currentEle, rowNo;
        currentEle = $(this);
        rowNo = getId(currentEle);
        $("#row_" + rowNo).remove();
    }

    // Event Register
    function registerEvents() {
        addBtn.on("click", addNewRow);
        $(document).on('click', '.delete_row', deleteRow);
    }

    function init() {
        registerEvents();
    }

    return {
        init: init
    };
})();

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


    //For Submitting The Insert Form
    SmartMultiFiled.init();

    $("#add_lic").on('submit', function(e) {
        e.preventDefault();

        let EMPLOYEE_LICENSE = $('.EMPLOYEE_LICENSE').val();
        let EMPLOYEE_LIC_DESCRIPTION = $('.EMPLOYEE_LIC_DESCRIPTION').val();
        let EMPLOYEE_LIC_START_DATE = $('.EMPLOYEE_LIC_START_DATE').val();
        let EMPLOYEE_LIC_EXP_DATE = $('.EMPLOYEE_LIC_EXP_DATE').val();

        if(EMPLOYEE_LICENSE == ''||EMPLOYEE_LIC_DESCRIPTION == ''|| EMPLOYEE_LIC_START_DATE == '' || EMPLOYEE_LIC_EXP_DATE == '' ) {
            Swal.fire( 
            'Error',
            'No Input Found!',
            'error');
            return false;
        }

        
        $.ajax({
                url:"../controller/controller_insert_lic.php",  
                method:"POST",  
                data: new FormData(this), // get all form field value in serialize formz
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
                        var Table = $('#autocomplete_table').dataTable(); 
                        Table.fnDraw(false);
                        $('.EMPLOYEE_LICENSE').trigger("reset");
                        $('.EMPLOYEE_LIC_DESCRIPTION').trigger("reset");
                        $('.EMPLOYEE_LIC_START_DATE').trigger("reset");
                        $('.EMPLOYEE_LIC_EXP_DATE').trigger("reset");
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
    });  
    //For Submitting Form

    //! For Profile Picture
    function previewUserPhoto() {
        photoPreview.src=URL.createObjectURL(event.target.files[0]);
    }

    //! Create Edit and Delete Function
        //! Edit 
        $('body').on('click', '#btn-edit', function () {
            var id = $(this).data('id'); // Primary ID 
            $.ajax({
                url:"../controller/controller_crud_tblemplist_lic.php",
                type: "POST",
                data: {
                    id: id,
                    mode: 'edit' 
                },
                dataType : 'json',
                success: function(result){
                $('#id').val(result.id);
                $('#EMPLOYEE_LICENSE').val(result.EMPLOYEE_LICENSE);
                $('#EMPLOYEE_LIC_DESCRIPTION').val(result.EMPLOYEE_LIC_DESCRIPTION);
                $('#EMPLOYEE_LIC_START_DATE').val(result.EMPLOYEE_LIC_START_DATE);
                $('#EMPLOYEE_LIC_EXP_DATE').val(result.EMPLOYEE_LIC_EXP_DATE);
                $('#edit-modal').modal('show');
                }
            });
        });
        
        $('#update-form').submit(function(e){
            e.preventDefault();
            // ajax
            $.ajax({
                url:"../controller/controller_crud_tblemplist_lic.php",
                type: "POST",
                data: new FormData(this), // get all form field value in serialize form
                contentType: false,
                cache: false,
                processData:false,  // get all form field value in serialize form
                success: function(){
                    Swal.fire(
                        'Success',
                        'The data is now updated. Thank you!',
                        'success'
                    ).then(function()
                    {  
                        var Table = $('#autocomplete_table').dataTable(); 
                        Table.fnDraw(false);
                        $('#edit-modal').modal('hide');
                        $('#update-form').trigger("reset");

                    });
                }
            });
        });  

        //! Delete
        $('body').on('click', '#btn-delete', function () {
            var id = $(this).data('id');
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
                        url:"../controller/controller_crud_tblemplist_lic.php", //<----- Create this controller file
                        type: "POST",
                        data: {
                            id: id,
                            mode: 'delete' 
                        },
                        dataType : 'json',
                        
                        success: function()
                        { 
                            Swal.fire(
                                'Success',
                                'The data is now deleted. Thank you!',
                                'success'
                            ).then(function()
                            {  
                                var Table = $('#autocomplete_table').dataTable(); 
                                Table.fnDraw(false);
                            });
                        },
                        
                        error: function() {
                            Swal.fire(
                                'Success',
                                'The data is now deleted. Thank you!',
                                'success'
                            ).then(function()
                            {  
                                var Table = $('#autocomplete_table').dataTable(); 
                                Table.fnDraw(false);
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

        // For Selecting Table Company Backgroud
        $(".selectAll").on('click', function() { // bulk checked
            var status = this.checked;
            $(".selectedRow").each(function() {
                $(this).prop("checked", status);
            });
        });

        $(".selectAll").on('change', function() { // bulk checked
            if (this.checked) {
                $('#autocomplete_table').DataTable().rows().select();
            } else {
                $('#autocomplete_table').DataTable().rows().deselect();
            }
        });

        // Delete Selected Rows
        function deleteSelectedRows() {
        //! Script              
        if ($('.selectedRow:checked').length > 0) { // at-least one checkbox checked
            var ids = [];
            $('.selectedRow').each(function() {
                if ($(this).is(':checked')) {
                    ids.push($(this).val());
                }
            });
            var ids_string = ids.toString(); // array to string conversion 

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
            }).then(function(result) {
                if (result.value) {
                    //
                    $.ajax({
                        type: "POST",
                        url: "../controller/controller_bulkDelete_tblemplist_lic.php",
                        data: {
                            data_ids: ids_string
                        },

                        success: function() {
                            Swal.fire(
                                'Success',
                                'The data is now deleted. Thank you!',
                                'success'
                            ).then(function() {
                                dataTable.draw();
                            });
                            async: false
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
        }
        //! Script                  
    }

    //! Table Configuration
    var dataTable = $('#autocomplete_table').DataTable({
        "ajax": "../controller/controller_fetch_tblemplist_lic.php",
        "type": "POST",
        "processing": true,
        "dom": 'Bfrtp',
        "serverSide": true,
        "lengthChange": false,
        "autoWidth": false,
        "stateSave": true,
            stateSaveCallback: function(settings, data) {
                localStorage.setItem('DataTables_' + settings.sInstance, JSON.stringify(data));
            },
            stateLoadCallback: function(settings) {
            return (localStorage.getItem('DataTables_' + settings.sInstance));
        }, // other DataTables options go here });
        "deferRender": true,
        "select": {
            "style": 'multi',
            "selector": 'td:nth-child(1) input[type="checkbox"]',
            "className": 'selected-row'
        },
        buttons: [
          
            {
                extend: 'collection',
                text: 'Actions',
                buttons: [    
                    //! Bulk Delete
                    {
                        text: 'Delete',
                        action: function(e, dt, node, config) {
                            deleteSelectedRows()
                        }
                    },
                    {
                        text: 'Import Excel',
                        action: function(e, dt, node, config) {
                            $('#import_excel').modal('show');
                        }
                    },
                        {   
                        text: 'Add Rows +',
                        action: function(e, dt, node, config) {
                            $('.addNew').click();
                            }
                        },
                        {
                            text: 'Update',
                            action: function(e, dt, node, config) {
                                $('#licBtn').click();
                            }
                        },
                        {
                            text: 'Select All',
                            action: function(e, dt, node, config) {
                                $('.selectAll').click();
                            }
                        }
                ]
            },
            {
                extend: 'collection',
                text: 'Select Rows',
                buttons: [
                    //! Display All Row
                    {
                        text: 'All Rows',
                        action: function(e, dt, node, config) {
                            dataTable.page.len(-1).draw();
                        }

                    },
                    //! Display Current Row
                    {
                        text: 'Current Rows',
                        action: function(e, dt, node, config) {
                            dataTable.page.len(10).draw();
                        }

                    }
                ]
            },

            {
                extend: 'collection',
                text: 'Export',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
            }
        ]
    })
    // For Selecting Table Backgroud

});  
</script>