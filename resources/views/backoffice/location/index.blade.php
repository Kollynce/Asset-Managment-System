@extends('layouts.dashboard')

@section('content')
    <div class="mt-5">
        <table class="table table-hover" id="refresh">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Location name</th>
                    <th scope="col">Time</th>
                    <th scope="col">Add Asset <a href="#" class="p-4" data-toggle="modal" data-target="#myModal" id="addAsset"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($location as $locations)
                        <tr>
                            <th scope="row">{{$locations->id}}</th>
                            <td>{{$locations->location_name}}</td>
                            <td>{{$locations->created_at}}</td>
                            <td>
                                <button type="button" id="edit"  data-toggle="modal" data-target="#myModal" class="btn btn-warning btn-sm editAsset">Edit Asset</button>
                                <button type="button" id="delete"  class="btn btn-danger btn-sm deleteAsset">Delete Asset</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>

    <div class="modal fade" tabindex="-1" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Add Asset Location</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id">
                <input class="form-control" type="text" name="location" id="locationName" placeholder="Enter Asset Location">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="display:none">Close</button>
                <button type="button" id="saveChanges" class="btn btn-primary" style="display:none">Save changes</button>
                <button type="button" id="addAssetBtn" class="btn btn-primary" data-dismiss="modal">Add Asset</button>
            </div>
            </div>
        </div>
    </div>

    {{ csrf_field() }}

@endsection
