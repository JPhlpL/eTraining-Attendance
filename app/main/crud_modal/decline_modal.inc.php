<div class="modal fade" id="edit-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">

              <h4 class="modal-title" id="userCrudModal"> Decline Reason </h4>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                </div>
                  <div class="modal-body">
                    <form id="update-form" name="update-form" class="form-horizontal" method="post">
                      <input type="hidden" name="id" id="id">
        
                        <input type="hidden" class="form-control" id="mode" name="mode" value="update">
                        <input type="hidden" class="form-control" id="IT_TRANSACTION_ID" name="IT_TRANSACTION_ID" value="" readonly>
                       
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea id="IT_DECLINE_REASON" name="IT_DECLINE_REASON"></textarea>
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