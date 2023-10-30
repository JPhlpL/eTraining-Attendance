<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-outline card-info">
            <div class="card-header bg-dark">
                <h3 class="card-title"></h3>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body">

                <div class="form-group">  
                        <div class="row ">
                            <div class="col ps-5">
                                <div>
                                    <form class="form-group">

                                        <!-- Division -->
                                        <div class="card card-outline card-info collapsed-card">
                                            <div class="card-header bg-dark text-white">
                                                <h3 class="card-title">
                                                    <input type="text" class="form-control border-0" id="IT_ITEM_NAME" name="IT_ITEM_NAME" placeholder="Scan the Item">
                                                </h3>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <input type="hidden" class="form-control border-0" id="IT_ITEM_PHOTO" name="IT_ITEM_PHOTO" >
                                                    <img id="qrscan" class="border rounded" width="300" height="300"/>
                                                </div>
                                                <div class="mb-3">
                                                    <label  class="form-label">Control Number</label>
                                                    <input type="text" class="form-control border-0" id="IT_ITEM_CONTROL_NUMBER" name="IT_ITEM_CONTROL_NUMBER" >
                                                </div>
                                                <div class="mb-3">
                                                    <label  class="form-label">Category Item</label>
                                                    <input type="text" class="form-control border-0" id="IT_CATEGORY_ITEM" name="IT_CATEGORY_ITEM" >
                                                </div>
                                                <div class="mb-3">
                                                    <label  class="form-label">Item Quantity</label>
                                                    <input type="text" class="form-control border-0" id="IT_ITEM_QUANTITY" name="IT_ITEM_QUANTITY" >
                                                </div>
                                                <div class="mb-3">
                                                    <label  class="form-label">Item Description</label>
                                                    <input type="text" class="form-control border-0" id="IT_ITEM_DESCRIPTION" name="IT_ITEM_DESCRIPTION" >
                                                </div>
                                                <div class="mb-3">
                                                    <label  class="form-label">Item Remarks</label>
                                                    <input type="text" class="form-control border-0" id="IT_ITEM_REMARKS" name="IT_ITEM_REMARKS" >
                                                </div>
                                                <div class="mb-3">
                                                    <label  class="form-label">Item Status</label>
                                                    <input type="text" class="form-control border-0" id="IT_ITEM_STATUS" name="IT_ITEM_STATUS" >
                                                </div>
                                                <div class="mb-3">
                                                    <label  class="form-label">Item Firstclaim Datetime</label>
                                                    <input type="text" class="form-control border-0" id="IT_ITEM_FIRSTCLAIM_DATETIME" name="IT_ITEM_FIRSTCLAIM_DATETIME" >
                                                </div>
                                                <div class="mb-3">
                                                    <label  class="form-label">Item Encoder</label>
                                                    <input type="text" class="form-control border-0" id="IT_ITEM_ENCODER" name="IT_ITEM_ENCODER" >
                                                </div>
                                                <div class="mb-3">
                                                    <label  class="form-label">Item Pic</label>
                                                    <input type="text" class="form-control border-0" id="IT_ITEM_PIC" name="IT_ITEM_PIC" >
                                                </div>
                                                <div class="mb-3">
                                                    <label  class="form-label">Form Num</label>
                                                    <input type="text" class="form-control border-0" id="IT_FORM_NUM" name="IT_FORM_NUM" >
                                                </div>
                                                <div class="mb-3">
                                                    <label  class="form-label">Item Label</label>
                                                    <input type="text" class="form-control border-0" id="IT_ITEM_LABEL" name="IT_ITEM_LABEL" >
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </form>
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <div id="qr-reader" style="width:500px;"></div>
                                    <div id="qr-reader-results"></div>
                                </div>
                            </div>
                        </div>
                    </div> 
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

