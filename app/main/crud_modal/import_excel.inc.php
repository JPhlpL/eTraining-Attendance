<div id="import_excel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header row d-flex justify-content-between mx-1 mx-sm-3 mb-0 pb-0 border-0">
        <div class="tabs active" id="tab01">
          <h6 class="font-weight-bold">Import Excel</h6>
        </div>
        <div class="tabs" id="tab02">
          <h6 class="text-muted" >Upload Photo</h6>
        </div>
      </div>
      <div class="line"></div>
      <div class="modal-body p-0">

        <fieldset class="show" id="tab011">
          <div class="p-4">
            <!-- For the file upload  -->
            <form name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
              <div class="shadow-sm">
                <label>Upload Excel File (.xls, .xlsx, .xlsm) </label> 
                <input type="file" onchange="validateSize(this);" name="file" id="file" class="border rounded" accept=".xls,.xlsx">  
                <button type="submit" name="import" class="btn bg-dark btn-sm" id="btn-save" value="create">Import</button>
              </div>
            </form>
            <a href='<?php echo $resources_dir.$excel_file; ?>' style='color:black;'>
                <div class="info-box shadow-sm">
                    <span class="info-box-icon bg-success"><i class="far fa-file-excel"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Sample Excel File</span>
                            <span class="info-box-number">Click here for sample excel upload file</span>
                        </div>
                </div>
            </a>
          </div>
        </fieldset>


        <!-- //! Check for the upload photo -->
        
        <fieldset id="tab021">
          <!-- For the file upload  -->
            <!-- CONTENT -->
            <div class="p-3">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Drop your files here</h3>
                    </div>
                            <div class="card-body">
                                <div id="actions" class="row">
                                    <div class="col-lg-6">
                                        <div class="btn-group w-100">
                                        <span class="btn btn-success col fileinput-button">
                                            <i class="fas fa-plus"></i>
                                            <span>Add files</span>
                                        </span>
                                        <button type="submit" class="btn btn-primary col start">
                                            <i class="fas fa-upload"></i>
                                            <span>Start upload</span>
                                        </button>
                                        <button type="reset" class="btn btn-warning col cancel">
                                            <i class="fas fa-times-circle"></i>
                                            <span>Cancel upload</span>
                                        </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center">
                                        <div class="fileupload-process w-100">
                                        <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                            <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="table table-striped files" id="previews">
                                    <div id="template" class="row mt-2">
                                        <div class="col-auto">
                                            <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                                        </div>
                                        <div class="col d-flex align-items-center">
                                            <p class="mb-0">
                                            <span class="lead" data-dz-name></span>
                                            (<span data-dz-size></span>)
                                            </p>
                                            <strong class="error text-danger" data-dz-errormessage></strong>
                                        </div>
                                        <div class="col-4 d-flex align-items-center">
                                            <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                            <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                            </div>
                                        </div>
                                        <div class="col-auto d-flex align-items-center">
                                        <div class="btn-group">
                                            <button class="btn btn-primary start">
                                            <i class="fas fa-upload"></i>
                                            <span>Start</span>
                                            </button>
                                            <button data-dz-remove class="btn btn-warning cancel">
                                            <i class="fas fa-times-circle"></i>
                                            <span>Cancel</span>
                                            </button>
                                            <button data-dz-remove class="btn btn-danger delete">
                                            <i class="fas fa-trash"></i>
                                            <span>Delete</span>
                                            </button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    </div>
            </div>
            <!-- CONTENT -->
        </fieldset>
      </div>
      <div class="line"></div>
      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      <!-- Footer -->
    </div>
  </div>
</div>