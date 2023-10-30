


$(document).ready(function(){

    //! Check Out
    $('body').on('click', '#btn-checkout', function () {
        var IT_TRANSACTION_CODE_HASHED = $(this).data('id');


        Swal.fire({
            title: "Confirmation",
            text: "Are you sure?",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: false,
            preConfirm: function(result) {
                if (result) {
                    Swal.fire({
                        title: '',
                        imageUrl: "../../../dist/img/loading6.gif",
                        imageHeight: 200,
                        allowOutsideClick: false,
                        showCancelButton: false,
                        showConfirmButton: false,
                        onBeforeOpen: () => {
                            Swal.showLoading()
                        },
                    });
                }
            },
        }).then(function (result) {
            if (result.value) {
                //
                $.ajax({
                    url:"../controller/controller_crud_tblitem_monitor.php",
                    type: "POST",
                    data: {
                        IT_TRANSACTION_CODE_HASHED: IT_TRANSACTION_CODE_HASHED,
                        mode: 'checkout' 
                    },
                    dataType : 'json',
                    
                    success: function()
                    { 
                        Swal.fire(
                            'Success',
                            'The item/s are now checked-out. Thank you!',
                            'success'
                        ).then(function()
                        {  
                            var oTable = $('#mainTable').dataTable(); 
                            oTable.fnDraw(false);
                        });
                    },
                    
                    error: function() {
                        Swal.fire(
                            'Success',
                            'The item/s are now checked-out. Thank you!',
                            'success'
                        ).then(function()
                        {  
                            var oTable = $('#mainTable').dataTable(); 
                            oTable.fnDraw(false);
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

     //! Check In
     $('body').on('click', '#btn-checkin', function () {
        var IT_TRANSACTION_CODE_HASHED = $(this).data('id');


        Swal.fire({
            title: "Confirmation",
            text: "Are you sure?",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: false,
            preConfirm: function(result) {
                if (result) {
                    Swal.fire({
                        title: '',
                        imageUrl: "../../../dist/img/loading6.gif",
                        imageHeight: 200,
                        allowOutsideClick: false,
                        showCancelButton: false,
                        showConfirmButton: false,
                        onBeforeOpen: () => {
                            Swal.showLoading()
                        },
                    });
                }
            },
        }).then(function (result) {
            if (result.value) {
                //
                $.ajax({
                    url:"../controller/controller_crud_tblitem_monitor.php",
                    type: "POST",
                    data: {
                        IT_TRANSACTION_CODE_HASHED: IT_TRANSACTION_CODE_HASHED,
                        mode: 'checkin' 
                    },
                    dataType : 'json',
                    
                    success: function()
                    { 
                        Swal.fire(
                            'Success',
                            'The item/s are now checked-out. Thank you!',
                            'success'
                        ).then(function()
                        {  
                            var oTable = $('#mainTable').dataTable(); 
                            oTable.fnDraw(false);
                        });
                    },
                    
                    error: function() {
                        Swal.fire(
                            'Success',
                            'The item/s are now checked-out. Thank you!',
                            'success'
                        ).then(function()
                        {  
                            var oTable = $('#mainTable').dataTable(); 
                            oTable.fnDraw(false);
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

   
       
//! Datatables
   // Setup - add a text input to each footer cell
   $('#mainTable tfoot th').not(":eq(0),:eq(1)") //Exclude columns 3, 4, and 5
   .each( function () {
   var title = $('#mainTable thead th').eq( $(this).index() ).text();
   $(this).html( '<input type="text" />' );
   $('input').css('border-radius','5px');
   // $('input').first().css('width','4em');
   } );

   // Main
   var dataTable =  $('#mainTable').DataTable({
       "ajax": "../controller/controller_fetch_tblitem_monitor.php",
       "type": "POST",
       "responsive": true, 
       "processing": true,
       "serverSide": true,
       "dom": 'Bfrtip',
       "language": {
        "infoFiltered": ''
      },

       buttons: [  
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
       initComplete: function () 
       {
       var r = $('#mainTable tfoot tr');
           r.find('th').each(function(){
               $(this).css('padding', 8);
           });
           $('#mainTable thead').append(r);
           $('#search_0').css('text-align', 'center');
           
           // Apply the search
           this.api().columns().every( function () {
               var that = this;

               $( 'input', this.footer() ).on( 'keyup change clear', function () {
                   if ( that.search() !== this.value ) {
                       that
                           .search( this.value )
                           .draw();
                   }
               } );
           } ).buttons().container().appendTo('#mainTable_wrapper .col-md-6:eq(0)');
       }
   } )

//! Select All w/ Selected
$(".selectAll").on('click',function() { // bulk checked
   var status = this.checked;
   $(".selectedRow").each( function() {
       $(this).prop("checked",status);
   });
});


});