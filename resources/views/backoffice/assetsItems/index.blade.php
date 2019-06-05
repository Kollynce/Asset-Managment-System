@extends('layouts.dashboard')

@section('content')
    <div class="card mb-3 mt-5 pt-2">
        <div class="card-header">
            <h3>Assets Items <a href="#" class="pull-right" data-toggle="modal" data-target="#assetsItems" id="addAsset"><i class="fa fa-plus" aria-hidden="true"></i></a></h3>
        </div>

        <div class="card-body">

            <table class="table table-responsive-xl table-hover">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Serial Number</th>
                  <th scope="col">Description</th>
                  <th scope="col">Asset Type</th>
                  <th scope="col">location Id</th>
                  <th scope="col">Manufacture</th>
                  <th scope="col">Model</th>
                  <th scope="col">Brand</th>
                  <th scope="col">Asset Image</th>
                  <th scope="col">Created At</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($assetsItems as $assetsItem)
                    <tr>
                        <th scope="row">{{$assetsItem->id}}</th>
                        <td>{{$assetsItem->serial_number}}</td>
                        <td>{{$assetsItem->description}}</td>
                        <td>{{$assetsItem->asset_type}}</td>
                        <td>{{$assetsItem->location_id}}</td>
                        <td>{{$assetsItem->manufacturer}}</td>
                        <td>{{$assetsItem->model}}</td>
                        <td>{{$assetsItem->brand}}</td>
                        <td>{{$assetsItem->asset_image}}</td>
                        <td>{{$assetsItem->created_at->toFormattedDateString()}}</td>
                        <td>
                            <button class="assetItem-edit btn btn-sm" data-url="{{action('AssetsItemController@update',$assetsItem['id'])}}"><i class="fa fa-pencil-square-o" style="font-size:30px;color:blue" data-toggle="modal" data-target="#asseteditModal"></i></button>
                            <button  class="assetItems-delete btn btn-sm" data-url="{{action('AssetsItemController@destroy',$assetsItem['id'])}}"><i class="fa fa-trash" style="font-size:30px;color:red" data-toggle="modal" data-target="#assetdeleteModal"></i></button>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>

        </div>
    </div>

    @include('backoffice.assetsItems.create')
    @include('backoffice.assetsItems.edit')
    @include('backoffice.assetsItems.delete')
@endsection
