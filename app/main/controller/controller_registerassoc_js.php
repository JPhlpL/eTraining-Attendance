<script>
    //declaring function
    var SmartMultiFiled = (function() {
        var rowcount, html, addBtn, tableBody;

        addBtn = $(".addNew"); //for add button
        rowcount = $("#autocomplete_table tbody tr").length + 1; //row count
        tableBody = $("#autocomplete_table tbody"); // table body
        $('#totalTransactNum').val(rowcount - 1);

        //format of table
        function formHtml() {
            html = '<tr id="row_' + rowcount + '">';
            html += '<td><button id="delete_' + rowcount + '" class="delete_row border border-secondary text-dark rounded" style="cursor:pointer;">  <i class="p-2 nav-icon fas fa-trash-alt"></i></button></td>';
            html += '<td><div class="text-center"><a href="../../../dist/img/denmaru.png" id="img_link_' + rowcount + '" data-toggle="lightbox" data-gallery="gallery"><img src="../../../dist/img/denmaru.png" id="preview_img_' + rowcount + '" class="autocomplete_txt" width="100" height="100"/></a></div></td>';
            html += '<td><input type="text" required data-type="REG_SUB_EMP_ID" name="REG_SUB_EMP_ID[]" id="REG_SUB_EMP_ID_' + rowcount + '" class="form-control autocomplete_txt" /></td>';
            html += '<td><input type="text" required data-type="REG_SUB_EMP_NAME" name="REG_SUB_EMP_NAME[]" id="REG_SUB_EMP_NAME_' + rowcount + '" class="form-control autocomplete_txt" /></td>';
            html += '<td><input type="text" required data-type="REG_SUB_EMP_DEPT" name="REG_SUB_EMP_DEPT[]" id="REG_SUB_EMP_DEPT_' + rowcount + '" class="form-control autocomplete_txt" /></td>';
            html += '<td><input type="text" required data-type="REG_SUB_EMP_SECT" name="REG_SUB_EMP_SECT[]" id="REG_SUB_EMP_SECT_' + rowcount + '" class="form-control autocomplete_txt" /></td>';
            html += '<td><input type="text" required data-type="REG_SUB_EMP_POSITION" name="REG_SUB_EMP_POSITION[]" id="REG_SUB_EMP_POSITION_' + rowcount + '" class="form-control autocomplete_txt" /></td>';
            html += '<td><input type="text" value="REGISTERED" readonly data-type="REG_SUB_STATUS" name="REG_SUB_STATUS[]" id="REG_SUB_STATUS_' + rowcount + '" class="form-control autocomplete_txt" /></td>';
            html += '<td><input type="text" data-type="REG_SUB_REMARKS" name="REG_SUB_REMARKS[]" id="REG_SUB_REMARKS_' + rowcount + '" class="form-control autocomplete_txt" /></td>';
            html += '</tr>';
            rowcount++;
            return html;
        }

        // Function to update image source based on ID number
        function updateImageSource(rowNo, empID) {
            var imgSrc = '../../uploads/employee_photo/' + empID + '.jpg';
            $('#preview_img_' + rowNo).attr('src', imgSrc);
            $('#img_link_' + rowNo).attr('href', imgSrc);
        }

        // get the field no
        function getFieldNo(type) {
            var fieldNo;
            switch (type) {
                case 'REG_SUB_EMP_ID':
                    fieldNo = 0;
                    break;
                case 'REG_SUB_EMP_NAME':
                    fieldNo = 1;
                    break;
                case 'REG_SUB_EMP_DEPT':
                    fieldNo = 2;
                    break;
                case 'REG_SUB_EMP_SECT':
                    fieldNo = 3;
                    break;
                case 'REG_SUB_EMP_POSITION':
                    fieldNo = 4;
                    break;
                default:
                    break;
            }
            return fieldNo;
        }

        // handling autofill 
        function handleAutocomplete() {
            var type, fieldNo, currentEle;
            type = $(this).data('type');
            fieldNo = getFieldNo(type);
            currentEle = $(this);

            if (typeof fieldNo === 'undefined') {
                return false;
            }

            $(this).autocomplete({
                source: function(data, cb) {
                    $.ajax({
                        url: '../controller/controller_registerassoc.php?action=autocomplete',
                        method: 'GET',
                        dataType: 'json',
                        data: {
                            name: data.term,
                            fieldNo: fieldNo
                        },
                        success: function(res) {
                            var result;
                            result = [{
                                label: 'There is matching record found for ' + data.term,
                                value: ''
                            }];

                            if (res.length) {
                                result = $.map(res, function(obj) {
                                    var arr = obj.split("|");
                                    return {
                                        label: arr[fieldNo],
                                        value: arr[fieldNo],
                                        data: obj
                                    };
                                });
                            }
                            cb(result);
                        }
                    });
                },
                autoFocus: true,
                minLength: 1,
                select: function(event, ui) {
                    var resArr, rowNo;
                    rowNo = getId(currentEle);
                    resArr = ui.item.data.split("|");
                    $('#REG_SUB_EMP_ID_' + rowNo).val(resArr[0]);
                    $('#REG_SUB_EMP_NAME_' + rowNo).val(resArr[1]);
                    $('#REG_SUB_EMP_DEPT_' + rowNo).val(resArr[2]);
                    $('#REG_SUB_EMP_SECT_' + rowNo).val(resArr[3]);
                    $('#REG_SUB_EMP_POSITION_' + rowNo).val(resArr[4]);

                }
            });
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
            var newRow = tableBody.find('tr:last-child');
            console.log(rowcount);
            $('#totalTransactNum').val(rowcount - 1);

        }

        // deleting row
        function deleteRow() {
            var currentEle, rowNo;
            currentEle = $(this);
            rowNo = getId(currentEle);
            $("#row_" + rowNo).remove();
            rowcount--;
            console.log(rowcount);
            $('#totalTransactNum').val(rowcount - 1);
            // console.log(rowNo);
        }

        // Event Register
        function registerEvents() {
            addBtn.on("click", addNewRow);
            $(document).on('click', '.delete_row', deleteRow);
            $(document).on('focus', '.autocomplete_txt', handleAutocomplete);

            // Handle the selection of autocomplete items
            $(document).on('autocompleteselect', '.autocomplete_txt', function(event, ui) {
                var currentEle = $(this);
                var rowNo = getId(currentEle);
                var empID = ui.item.data.split("|")[0];
                updateImageSource(rowNo, empID);
            });
        }

        function init() {
            registerEvents();
        }

        //Getting the No. of Current Row


        return {
            init: init
        };


    })();

    let param;

    $(document).ready(function() {

        //! Select Current Data
        let url = window.location.href.split("=");
        param = url[1]; // <--------------------------------

        var dataTable = $('#autocomplete_table').DataTable({
            "ajax": "../controller/controller_registerassoc.php?action=fetchCurrentList&param=" + param,
            "type": "POST",
            "processing": true,
            "dom": 'Bfrtip',
            "serverSide": true,
            "lengthChange": false,
            "autoWidth": false,
            "deferRender": true,
            "language": {
                "infoFiltered": ""
            },
            "select": {
                "style": 'multi',
                "selector": 'td:nth-child(1) input[type="checkbox"]',
                "className": 'selected-row'
            },
            buttons: [{
                    text: 'Add',
                    action: function(e, dt, node, config) {
                        $('#addReg').click();
                    },
                },
                //! Bulk Delete
                {
                    text: 'Cancel',
                    action: function(e, dt, node, config) {
                        deleteSelectedRows()
                    }
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
            ]
        })

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
                    text: "Are you sure you want to cancel?",
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
                            url: "../controller/controller_registerassoc.php?action=delReg",
                            data: {
                                data_ids: ids_string
                            },

                            success: function() {
                                Swal.fire(
                                    'Success',
                                    'The attendee/s training is now cancelled. Thank you!',
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

        //For Submitting The Insert Form
        SmartMultiFiled.init();

        $("#import_btn").click(function() {
            $('#import_excel').modal('show');
        });

        $(document).on('change', 'input[type="file"][data-type="BS_ILLUSTRATION"]', function() {
            var file = this.files[0];
            var reader = new FileReader();
            var previewImg = $(this).closest('tr').find('.preview-img');

            reader.onloadend = function() {
                previewImg.attr('src', reader.result);
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                previewImg.attr('src', '');
            }
        });

        $("#submit_sheetform").on('submit', function(e) {
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
                        url: "../controller/controller_registerassoc.php?action=submitregistration",
                        method: "POST",
                        data: new FormData(document.getElementById("submit_sheetform")), // get all form field value in serialize form
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function() {
                            Swal.fire(
                                'Success',
                                'Your registration is now submitted and it will forwarded to GENBA Training. Thank you!',
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
                                    title: 'Refreshing...'
                                }).then(function() {
                                    location.href = "submittedlist.php";
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
</script>