<div class="modal fade" id="edit-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">

              <h4 class="modal-title" id="userCrudModal"> Edit Item </h4>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                </div>
                  <div class="modal-body">
                    <form id="update-form" name="update-form" class="form-horizontal" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="id" id="id">

                        <input type="hidden" class="form-control" id="mode" name="mode" value="update">

                        <div class="form-group">
                            <label for="name" class="control-label">Previous Job</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="EMPLOYEE_PREV_JOB" name="EMPLOYEE_PREV_JOB" value="" cols="70" rows="2">
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="control-label">Previous Job Years</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" id="EMPLOYEE_PREV_JOB_YEARS" name="EMPLOYEE_PREV_JOB_YEARS" value=""  >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="control-label">End of Contract</label>
                            <div class="col-sm-12">
                                <input type="date" class="form-control" id="EMPLOYEE_PREV_ENDO" name="EMPLOYEE_PREV_ENDO" value=""  >
                            </div>
                        </div>

                        
                
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save changes</button>
              </div>
              </form>
          </div>
      </div>
    </div>