        
        
<!-- Update Table -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body p-2">

            <button class="btn btn-secondary" id="sendSuppMail" hidden>Send Email</button>

            <input type="checkbox" class="form-check-input selectAll" id="exampleCheck1" hidden>
                
                <div class="table-responsive">
                    
                <table id="mainTable" style="font-size:13px;" class="table table-bordered table-hover text-nowrap">

                    <thead>
                        <tr class="text-center">
                            <th class="bg-dark text-white no-sort"></th>
                            <th class="bg-dark text-white"> Registration No. </th>
                            <th class="bg-dark text-white"> Training No. </th>
                            <th class="bg-dark text-white"> Leader ID </th>
                            <th class="bg-dark text-white"> Leader Name </th>
                            <th class="bg-dark text-white"> Department </th>
                            <th class="bg-dark text-white"> Section </th>
                            <th class="bg-dark text-white"> Remarks </th>
                            <th class="bg-dark text-white"> Date Submitted </th>
                        </tr>
                    </thead>    
                    <tfoot>
                        <tr class="text-center">
                            <th class="bg-dark text-white no-sort"></th>
                            <th class="bg-dark text-white"> Registration No. </th>
                            <th class="bg-dark text-white"> Training No. </th>
                            <th class="bg-dark text-white"> Leader ID </th>
                            <th class="bg-dark text-white"> Leader Name </th>
                            <th class="bg-dark text-white"> Department </th>
                            <th class="bg-dark text-white"> Section </th>
                            <th class="bg-dark text-white"> Remarks </th>
                            <th class="bg-dark text-white"> Date Submitted </th>
                        </tr>
                    </tfoot>

                </table> 

            <div>
        <div>
      <div>
    </div>
</section>

<?php include '../crud_modal/import_excel.inc.php'; ?>
