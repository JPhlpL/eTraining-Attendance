$(document).ready(function(){

    //! Datatables
    $('#mainTable tfoot th').not(":eq(0)") //Exclude First and Last Column
    .each(function() {
        var title = $('#mainTable thead th').eq($(this).index()).text();
        $(this).html('<input type="text" />');
        $('input').css('border-radius', '5px');
    });

     var dataTable = $('#mainTable').DataTable({
        "ajax": "../controller/controller_fetch_assochistory.php",
        "type": "POST",
        "processing": true,
        "dom": 'Bfrtp',
        "serverSide": true,
        "lengthChange": false,
        "autoWidth": false,
        "deferRender": true,
        "select": {
            "style": 'multi',
            "selector": 'td:nth-child(1) input[type="checkbox"]',
            "className": 'selected-row'
        },
        "columnDefs": [
            {
                "className": 'dtr-control',
                "orderable": false,
                "targets": -1,
                "visible": false,
                "searchable": false
            },
            
        ],
        buttons: [
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
        },// Custom filtering function for date range
           
    })


});