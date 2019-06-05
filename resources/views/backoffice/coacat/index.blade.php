@extends('layouts.dashboard')

@section('content')
<div class="card mb-3 mt-5 pt-2">
        <div class="card-header">
            <h3>Chart of Accounts Category <a href="#" class="pull-right" data-toggle="modal" data-target="#coacat" id="addAsset"><i class="fa fa-plus" aria-hidden="true"></i></a></h3>
        </div>

        <div class="card-body">

            <table class="table table-responsive-xl table-hover">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">COA CAT Code</th>
                  <th scope="col">COA CAT Name</th>
                  <th scope="col">COA Min</th>
                  <th scope="col">COA Max</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($coacat as $coacats)
                    <tr>
                        <th scope="row">{{$coacats->id}}</th>
                        <td>{{$coacats->coa_cat_code}}</td>
                        <td>{{$coacats->coa_cat_name}}</td>
                        <td>{{$coacats->coa_min}}</td>
                        <td>{{$coacats->coa_max}}</td>
                        <td>
                            <button class="coacat-edit btn btn-sm" data-url="{{action('ChartOfAccountsCartegoryController@update',$coacats['id'])}}"><i class="fa fa-pencil-square-o" style="font-size:30px;color:blue" data-toggle="modal" data-target="#coacat1"></i></button>
                            <button  class="coacat-delete btn btn-sm" data-url="{{action('ChartOfAccountsCartegoryController@destroy',$coacats['id'])}}"><i class="fa fa-trash" style="font-size:30px;color:red" data-toggle="modal" data-target="#coacat2"></i></button>
                        </td>
                    </tr>
                @endforeach

              </tbody>
            </table>
        </div>
    </div>

    @include('backoffice.coacat.create')
    @include('backoffice.coacat.edit')
    @include('backoffice.coacat.delete')

@endsection
