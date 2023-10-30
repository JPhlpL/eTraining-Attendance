$(document).ready(function() {

    //! Delete
    $('body').on('click', '#btn-delete', function() {
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
        }).then(function(result) {
            if (result.value) {
                //
                $.ajax({
                    url: "../controller/controller_crud_tblUser.php",
                    type: "POST",
                    data: {
                        id: id,
                        mode: 'delete'
                    },
                    dataType: 'json',
                    success: function() {
                        Swal.fire(
                            'Success',
                            'The data is now deleted. Thank you!',
                            'success'
                        ).then(function() {
                            var oTable = $('#mainTable').dataTable();
                            oTable.fnDraw(false);
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
    
    //! Datatables
    //! Setup - add a text input to each footer cell
    $('#mainTable tfoot th').not(":eq(0), #mainTable th:last-child") //Exclude First and Last Column
        .each(function() {
            var title = $('#mainTable thead th').eq($(this).index()).text();
            $(this).html('<input type="text" />');
            $('input').css('border-radius', '5px');
        });
    // Main
    var dataTable = $('#mainTable').DataTable({
        "ajax": "../controller/controller_fetch_tblUser.php",
        "type": "POST",
        "processing": true,
        "dom": 'Bfrtip',
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
        "responsive": {
            "details": {
                "type": 'column',
                "target": -1
            }
        },
        "select": {
            "style": 'multi',
            "selector": 'td:nth-child(1) input[type="checkbox"]',
            "className": 'selected-row'
        },
        "columnDefs": [{
                "orderable": false,
                "targets": 0,
                "searchable": false
            },
            {
                "className": 'dtr-control',
                "orderable": false,
                "targets": -1
            }
        ],
        buttons: [{
                extend: 'collection',
                text: 'Actions',
                autoClose: true, //<--- Key for autoclose 
                buttons: [
                    {
                        text: 'Add',
                        action: function(e, dt, node, config) {
                            location.href = 'userManagement_addUser.php';
                        }
                    },
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
            },
            {
                extend: 'collection',
                text: 'Extensions',
                buttons: [
                    'createState',
                    'savedStates',
                    'colvis',
                ]
            }
        ],
        //! For Searching
        initComplete: function() {
            var r = $('#mainTable tfoot tr');
            r.find('th').each(function() {
                $(this).css('padding', 8);
            });
            $('#mainTable thead').append(r);
            $('#search_0').css('text-align', 'center');

            // Apply the search
            this.api().columns().every(function() {
                var that = this;

                $('input', this.footer()).on('keyup change clear', function() {
                    if (that.search() !== this.value) {
                        that
                            .search(this.value)
                            .draw();
                    }
                });
            }).buttons().container().appendTo('#mainTable_wrapper .col-md-6:eq(0)');
        }
    })

    //! Select All w/ Selected
    $(".selectAll").on('click', function() { // bulk checked
        var status = this.checked;
        $(".selectedRow").each(function() {
            $(this).prop("checked", status);
        });
    });

    $(".selectAll").on('change', function() { // bulk checked
        if (this.checked) {
            $('#mainTable').DataTable().rows().select();
        } else {
            $('#mainTable').DataTable().rows().deselect();
        }
    });


    //!Functions
    
    //! For Validation of File Extension in Image
    $("#USER_PROFILEPIC").change(function() {
        var fileExtension = ['jpeg', 'jpg', 'png'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            Swal.fire({
                icon: 'error',
                title: 'Wrong file extension',
                text: 'Only formats are allowed : ' + fileExtension.join(', ')
            })
            $('#USER_PROFILEPIC').val(''); //for clearing with Jquery
        }
    });
    //!For Image File Size Validation (Not more than 5mb)
    function validateSize(input) {
        const fileSize = input.files[0].size / 1024 / 1024; // in MiB
        if (fileSize > 5) {
            //! Create Sweet Alert Instead
            Swal.fire({
                icon: 'error',
                title: 'File Size Exceed!',
                text: 'The Maximum allowed file is 5mb. Thank you!'
            })
            $('#imageprof').val(''); //for clearing with Jquery

        }
    }

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
                        url: "../controller/controller_bulkDelete_tbluser.php",
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
    //!Functions
});