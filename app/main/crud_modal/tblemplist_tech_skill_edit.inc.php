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
                            <label for="name" class="control-label">Technical Skill</label>
                            <div class="col-sm-12">
                                <input type="name" class="form-control" id="EMPLOYEE_TECH_SKILL" name="EMPLOYEE_TECH_SKILL" value="" required>
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