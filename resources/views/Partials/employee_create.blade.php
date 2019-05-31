<div class="modal fade" id="addModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Employees Details</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
        <form action="{{route('employee.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Employees Name - {{$employee->name}}</label>
                    </div>
                    <div class="form-group">
                        <label for="">Employees Email - {{$employee->email}}</label>
                    </div>
                    <div class="form-group">
                        <label for="">Employees Image - {{$employee->image}}</label>
                    </div>
                    <div class="form-group">
                        <label for="">Employees Office Phone Number - {{$employee->office_phone_number}}</label>
                    </div>
                    <div class="form-group">
                        <label for="">Employees Mobile Phone Number - {{$employee->mobile_phone_number}}</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="ADD" name="add" id="">
                </div>
            </form>
        </div>
    </div>
</div>
