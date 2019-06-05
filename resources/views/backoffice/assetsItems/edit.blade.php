<div class="modal fade" id="asseteditModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Assets Items</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            <form id="assetsItem-edit" action="#" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PATCH')

                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" name="serial_number" class="form-control" id="asset-edit-serial">
                        </div>
                        <div class="form-group">
                            <input type="text" name="description" class="form-control" id="asset-edit-description">
                        </div>
                        <div class="form-group">
                            <input type="text" name="asset_type" class="form-control" id="asset-edit-type">
                        </div>
                        <div class="form-group">
                            <input type="text" name="location_id" class="form-control" id="asset-edit-location">
                        </div>
                        <div class="form-group">
                            <input type="text" name="manufacturer" class="form-control" id="asset-edit-manufacturer">
                        </div>
                        <div class="form-group">
                            <input type="text" name="brand" class="form-control" id="asset-edit-brand">
                        </div>
                        <div class="form-group">
                            <input type="text" name="model" class="form-control" id="asset-edit-model">
                        </div>
                        <div class="form-group">
                            <input type="text" name="asset_image" class="form-control"id="asset-edit-image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Update Changes" name="add" id="">
                    </div>
                </form>
            </div>
        </div>
    </div>
