<div class="modal fade" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit Employee Details</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
        <form id="employee-edit" action="#" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')

            <div class="modal-body">
                <div class="form-group">
                    <input type="text" id="employee-name-edit" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" id="employee-email-edit" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" id="employee-img-edit" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" id="employee-office-number-edit" name="office_phone_number" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" id="employee-mobile-number-edit" name="mobile_phone_number" class="form-control">
                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Edit" name="add" id="">
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
