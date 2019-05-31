<div class="modal fade" id="showModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Employee Details</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
       
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" id="employee-name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" id="employee-email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" id="employee-img" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" id="employee-office-number" name="office_phone_number" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" id="employee-mobile-number" name="mobile_phone_number" class="form-control">
                </div>
            </div>
            
        </div>
    </div>
</div>
