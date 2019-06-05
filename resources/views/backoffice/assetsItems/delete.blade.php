<div class="modal fade assetItem-delete" role="dialog" id="assetdeleteModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Delete Asset</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are You Sure You Want To Delete</p>
            </div>
            <div class="modal-footer">
                <form action="#"  id="form-delete" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger" >Delete</button>
                </form>

            </div>
          </div>
        </div>
      </div>
