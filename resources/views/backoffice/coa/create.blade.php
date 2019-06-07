<div class="modal fade" id="coa">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Add Chart of Acconts</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            <form action="{{route('coa.store')}}" enctype="multipart/form-data" method="POST">
                @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            {{-- <input type="text" name="coa_code" class="form-control" placeholder="Enter COA Code" id=""> --}}

                            <select class="form-control" name="chart_of_accounts_cartegory_id" id="">
                                @foreach ($coacat as $coas)
                                <option value="{{$coas->id}}">{{$coas->coa_cat_name}}</option>
                                @endforeach
                            </select>

                            <input type="hidden" name="coa_x_name" value="{{$coas->coa_cat_name}}" id="">
                        </div>
                        <div class="form-group">
                            <input type="text" name="coa_code" class="form-control" placeholder="Enter COA Code" id="">
                        </div>
                        <div class="form-group">
                            <input type="text" name="coa_name" class="form-control" placeholder="Enter COA Name" id="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="ADD" name="add" id="">
                    </div>
                </form>
            </div>
        </div>
    </div>
