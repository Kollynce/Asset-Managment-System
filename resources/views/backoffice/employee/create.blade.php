<div class="modal fade" id="addModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Add an Employee</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
        <form action="{{route('employee.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Enter Employee Name" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Enter Employee Email" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="image" class="form-control" placeholder="Enter Employee Image" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="office_phone_number" class="form-control" placeholder="Enter Employee Office Number" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="mobile_phone_number" class="form-control" placeholder="Enter Employee Mobile Number" id="">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="ADD" name="add" id="">
                </div>
            </form>
        </div>
    </div>
</div>
