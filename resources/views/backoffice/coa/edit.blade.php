<div class="modal fade" id="coa1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Add Chart of Acconts</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            <form action="#" id="coa-edit" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PATCH')
                    <div class="modal-body">
                            <div class="form-group">
                                    <label for=""><b>ID : </b></label>
                                    <label id="chart_of_accounts_cartegory_id"></label>
                                </div>
                        <div class="form-group">
                            <input type="text" name="coa_x_name" class="form-control" value="{{$coas->coa_cat_name}}" id="coa-x-name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="coa_code" class="form-control" id="coa-code">
                        </div>
                        <div class="form-group">
                            <input type="text" name="coa_name" class="form-control" id="coa-name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Update Changes" name="add" id="">
                    </div>
                </form>
            </div>
        </div>
    </div>
