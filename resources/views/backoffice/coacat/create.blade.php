<div class="modal fade" id="coacat">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Add Chart of Acconts Cartegory</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
        <form action="{{route('coacat.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="coa_cat_code" class="form-control" placeholder="Enter COA CAT Code" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="coa_cat_name" class="form-control" placeholder="Enter COA CAT Name" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="coa_max" class="form-control" placeholder="Enter COA Max" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="coa_min" class="form-control" placeholder="Enter COA Min" id="">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="ADD" name="add" id="">
                </div>
            </form>
        </div>
    </div>
</div>
