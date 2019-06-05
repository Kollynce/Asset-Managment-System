<div class="modal fade" id="coacat1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Add Chart of Acconts</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
        <form action="#" id="coacat-edit" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="coa_cat_code" class="form-control"  id="coacat-code">
                    </div>
                    <div class="form-group">
                        {{-- <input type="text" name="coa_cat_name" class="form-control"  id="coacat-name"> --}}
                        {{Form::select('coa_cat_name', ['Assets' => 'Assets', 'Liability' => 'Liability', 'Equity' => 'Equity', 'Revenue' => 'Revenue', 'Cost of Goods Sold' => 'Cost of Goods Sold', 'Expenses' => 'Expenses'], '',['class' => 'form-group  form-control'])}}
                    </div>
                    <div class="form-group">
                        <input type="text" name="coa_max" class="form-control" id="coa-max">
                    </div>
                    <div class="form-group">
                        <input type="text" name="coa_min" class="form-control"  id="coa-min">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="ADD" name="add" id="">
                </div>
            </form>
        </div>
    </div>
</div>
