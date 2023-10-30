<div class="modal fade" id="edit-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">

              <h4 class="modal-title" id="userCrudModal"> Return Item </h4>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                </div>
                  <div class="modal-body">
                    <form id="update-form" name="update-form" class="form-horizontal" method="post">
                      <input type="hidden" name="id" id="id">
        
                        <input type="hidden" class="form-control" id="mode" name="mode" value="update">
                        <input type="hidden" class="form-control" id="IT_REQUEST_CONTROL_NUMBER" name="IT_REQUEST_CONTROL_NUMBER" value="" readonly>
                        <input type="hidden" class="form-control" id="IT_REQUEST_ITEM_NAME" name="IT_REQUEST_ITEM_NAME" value="" readonly>
                        <input type="hidden" class="form-control" id="IT_REQUEST_TRANSACTION_ID" name="IT_REQUEST_TRANSACTION_ID" value="" readonly>

                        <div class="form-group">
                            <label for="name" class="control-label">Returning Item Quantity</label>
                            <div class="col-sm-12">
                                <input type="number" max="IT_REQUEST_ITEM_QUANTITY" class="form-control" id="IT_REQUEST_ITEM_QUANTITY" name="IT_REQUEST_ITEM_QUANTITY" value="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="control-label">Item Remarks</label>
                            <div class="col-sm-12">
                                <textarea id="IT_REQUEST_ITEM_REMARKS" name="IT_REQUEST_ITEM_REMARKS"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="control-label">Item Returned Status</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="IT_REQUEST_ITEM_RETURNED_STATUS" name="IT_REQUEST_ITEM_RETURNED_STATUS">
                                    <?php 
                                    $sql = mysqli_query($link, "SELECT IT_ITEM_STATUS FROM tblitem_status WHERE id = 5 OR id = 6");
                                    $row = mysqli_num_rows($sql); 
                                        while($row = mysqli_fetch_array($sql)) { 
                                        echo "<option value='".$row['IT_ITEM_STATUS']."'>" .$row['IT_ITEM_STATUS']. "</option>";
                                    }
                                    ?>
                                </select>
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