<script>
    /* global Chart:false */

$(document).ready(function() {

        setInterval(function() {
            showTotalUsers();
            // showTotalTransactions();
            // showOpenStatus();
            // showClosedStatus();
            // showGraph();
            // showPieTotal();
        }, 5000);

        showTotalUsers();
        // showTotalTransactions();
        // showOpenStatus();
        // showClosedStatus();
        // showGraph();
        // showPieTotal();
        // showProgressTable();
        // showPreviousAdd();

})

    function showTotalUsers() {
            $.ajax({
                url: "../controller/controller_showCurrentDashboard.php?dashboard_action=showTotalUsers",
                success: function(data) {
                    var totalUser = JSON.parse(data).TOTAL_USERS;
                    $("#totalUser").text(totalUser);
                }
            });
        }

    // function showTotalTransactions() {
    //     $.ajax({
    //         url: "../controller/controller_showCurrentDashboard.php?dashboard_action=showTotalTransactions",
    //         success: function(data) {
    //             var totalTransact = JSON.parse(data).TOTAL_BURRSUMMARY;
    //             $("#totalTransact").text(totalTransact);
    //         }
    //     });
    // }


    // function showOpenStatus() {
    //     $.ajax({
    //         url: "../controller/controller_showCurrentDashboard.php?dashboard_action=showOpenStatus",
    //         success: function(data) {
    //             var showOpen = JSON.parse(data).TOTAL_OPEN;
    //             $("#showOpenStats").text(showOpen);
    //         }
    //     });
    // }


    // function showClosedStatus() {
    //     $.ajax({
    //         url: "../controller/controller_showCurrentDashboard.php?dashboard_action=showClosedStatus",
    //         success: function(data) {
    //             var showClose = JSON.parse(data).TOTAL_CLOSED;
    //             $("#showClosedStats").text(showClose);
    //         }
    //     });
    // }

    // // Bar
    // function showGraph() {
    //     $.ajax({
    //         url: "../controller/controller_showCurrentDashboard.php?dashboard_action=showGraph",
    //         method: "POST",
    //         dataType: "JSON",
    //         success: function(data) {
    //             console.log(data);
    //             var supplier = [];
    //             var open_status = [];
    //             var closed_status = [];
    //             var color = [];
    //             var label = [];

    //             for (var i in data) {
    //                 supplier.push(data[i].BS_SUPPLIER);
    //                 open_status.push(data[i].TOTAL_OPEN);
    //                 closed_status.push(data[i].TOTAL_CLOSED);
    //                 color.push(data[i].color);
    //                 label.push(data[i].label);

    //             }
    //             var graphdata = {
    //                 labels: supplier,
    //                 datasets: [{
    //                     label: 'Closed',
    //                     backgroundColor: '#A7BEAE',
    //                     borderColor: '#fffff0',
    //                     hoverBackgroundColor: '#CCCCCC',
    //                     hoverBorderColor: '#666666',
    //                     data: open_status
    //                 }, {
    //                     label: 'Open',
    //                     backgroundColor: '#B85042',
    //                     borderColor: '#fffff0',
    //                     hoverBackgroundColor: '#CCCCCC',
    //                     hoverBorderColor: '#666666',
    //                     data: closed_status
    //                 }, ]
    //             };

    //             var options = {
    //                 responsive: true,
    //                 scales: {
    //                     yAxes: [{
    //                         ticks: {
    //                             min: 0
    //                         }
    //                     }]
    //                 }
    //             };
    //             var graphTarget_barGraph = $("#bar_chart");
    //             var barGraph = new Chart(graphTarget_barGraph, {
    //                 type: 'bar',
    //                 data: graphdata,
    //                 options: options
    //             });

    //         }
    //     });
    // }
    
    // // Pie
    // function showPieTotal() {
    //     $.ajax({
    //         url: "../controller/controller_showCurrentDashboard.php?dashboard_action=showPieTotal",
    //         method: "POST",
    //         dataType: "JSON",
    //         success: function(data) {
    //             console.log(data);
    //             var supplier = [];
    //             var open_status = [];
    //             var closed_status = [];
    //             var color = [];
    //             var label = [];

    //             for (var i in data) {
    //                 supplier.push(data[i].BS_SUPPLIER);
    //                 open_status.push(data[i].TOTAL_OPEN);
    //                 closed_status.push(data[i].TOTAL_CLOSED);
    //                 color.push(data[i].color);
    //                 label.push(data[i].label);

    //             }

    //             var graphdata = {
    //                 labels: supplier,
    //                 datasets: [{
    //                     backgroundColor: ['#559DAA','#AA6255'],
    //                     data: [open_status, closed_status]
    //                 }],
    //                 labels: [
    //                     'Pending',
    //                     'Open'
    //                 ]
    //             };



    //             var graphTarget_barGraph = $("#pie_chart");
    //             var barGraph = new Chart(graphTarget_barGraph, {
    //                 type: 'doughnut',
    //                 data: graphdata
    //             });

    //         }
    //     });
    // }

    // function showProgressTable(){
    //     //! Table Configuration
    //     $('#progress-table').DataTable({
    //         "ajax": "../controller/controller_showCurrentDashboard.php?dashboard_action=showProgress",
    //         "type": "POST",
    //         "processing": true,
    //         "dom": 'Bfrt',
    //         "serverSide": true,
    //         "responsive": {
    //             "details": {
    //                 "type": 'column',
    //                 "target": -1
    //             }
    //         },
    //         "columnDefs": [
    //             {
    //                 "className": 'dtr-control',
    //                 "orderable": false,
    //                 "targets": -1
    //             }
    //         ],
    //         "buttons": [
    //             {
    //                 extend: 'collection',
    //                 text: 'Export',
    //                 buttons: [
    //                     'copy',
    //                     'excel',
    //                     'csv',
    //                     'pdf',
    //                     'print'
    //                 ]
    //             }
    //         ],
    //         //! For Searching
    //         initComplete: function () 
    //         {
    //         var r = $('#mainTable tfoot tr');
    //             r.find('th').each(function(){
    //                 $(this).css('padding', 8);
    //             });
    //             $('#mainTable thead').append(r);
    //             $('#search_0').css('text-align', 'center');
                
    //             // Apply the search
    //             this.api().columns().every( function () {
    //                 var that = this;

    //                 $( 'input', this.footer() ).on( 'keyup change clear', function () {
    //                     if ( that.search() !== this.value ) {
    //                         that
    //                             .search( this.value )
    //                             .draw();
    //                     }
    //                 } );
    //             } ).buttons().container().appendTo('#mainTable_wrapper .col-md-6:eq(0)');
    //         }
    //     })
    // }

    // function showPreviousAdd(){
    //     //! Table Configuration
    //     $('#recent-table').DataTable({
    //         "ajax": "../controller/controller_showCurrentDashboard.php?dashboard_action=showRecentAdd",
    //         "type": "POST",
    //         "processing": true,
    //         "dom": 'Bfrt',
    //         "serverSide": true,
    //         pageLength: 5,
    //         "responsive": {
    //             "details": {
    //                 "type": 'column',
    //                 "target": -1
    //             }
    //         },
    //         "order": [[3, 'desc']],
    //         "columnDefs": [
    //             {
    //                 "className": 'dtr-control',
    //                 "orderable": false,
    //                 "targets": -1
    //             }
    //         ],
    //         "buttons": [
    //             {
    //                 extend: 'collection',
    //                 text: 'Export',
    //                 buttons: [
    //                     'copy',
    //                     'excel',
    //                     'csv',
    //                     'pdf',
    //                     'print'
    //                 ]
    //             }
    //         ],
    //         //! For Searching
    //         initComplete: function () 
    //         {
    //         var r = $('#mainTable tfoot tr');
    //             r.find('th').each(function(){
    //                 $(this).css('padding', 8);
    //             });
    //             $('#mainTable thead').append(r);
    //             $('#search_0').css('text-align', 'center');
                
    //             // Apply the search
    //             this.api().columns().every( function () {
    //                 var that = this;

    //                 $( 'input', this.footer() ).on( 'keyup change clear', function () {
    //                     if ( that.search() !== this.value ) {
    //                         that
    //                             .search( this.value )
    //                             .draw();
    //                     }
    //                 } );
    //             } ).buttons().container().appendTo('#mainTable_wrapper .col-md-6:eq(0)');
    //         }
    //     })
    // }

</script>