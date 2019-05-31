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
                    <label for=""><b>Employees Name : </b></label>
                    <label id="employee-name"></label>
                </div>
                <div class="form-group">
                    <label for=""><b>Employees Email : </b></label>
                    <label for="" id="employee-email"></label>
                </div>
                <div class="form-group">
                        <label for=""><b>Employees Image : </b></label>
                        <label for="" id="employee-img"></label>
                </div>
                <div class="form-group">
                    <label for=""><b>Employees Office Number : </b></label>
                    <label for="" id="employee-office-number"></label>
                </div>
                <div class="form-group">
                    <label for=""><b>Employees Mobile Number : </b></label>
                    <label for="" id="employee-mobile-number"></label>
                </div>
            </div>

        </div>
    </div>
</div>
