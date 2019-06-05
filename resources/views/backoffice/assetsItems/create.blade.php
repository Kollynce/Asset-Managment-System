<div class="modal fade" id="assetsItems">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Add an Employee</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            <form action="{{route('assetsItems.store')}}" enctype="multipart/form-data" method="POST">
                @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" name="serial_number" class="form-control" placeholder="Enter Serial number" id="">
                        </div>
                        <div class="form-group">
                            <input type="text" name="description" class="form-control" placeholder="Enter description" id="">
                        </div>
                        <div class="form-group">
                            <input type="text" name="asset_type" class="form-control" placeholder="Enter Asset Type" id="">
                        </div>
                        <div class="form-group">
                            <input type="text" name="location_id" class="form-control" placeholder="Enter Location Id" id="">
                        </div>
                        <div class="form-group">
                            <input type="text" name="manufacturer" class="form-control" placeholder="Enter Manufacture" id="">
                        </div>
                        <div class="form-group">
                            <input type="text" name="brand" class="form-control" placeholder="Enter Employee Brand" id="">
                        </div>
                        <div class="form-group">
                            <input type="text" name="model" class="form-control" placeholder="Enter Employee Model" id="">
                        </div>
                        <div class="form-group">
                            <input type="text" name="asset_image" class="form-control" placeholder="Enter Assets Image" id="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="ADD" name="add" id="">
                    </div>
                </form>
            </div>
        </div>
    </div>
