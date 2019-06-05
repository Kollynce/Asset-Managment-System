@extends('layouts.dashboard')

@section('content')
<div class="card mb-3 mt-5 pt-2">
        <div class="card-header">
            <h3>Chart of Accounts <a href="#" class="pull-right" data-toggle="modal" data-target="#coa" id="addAsset"><i class="fa fa-plus" aria-hidden="true"></i></a></h3>
        </div>

        <div class="card-body">

            <table class="table table-responsive-xl table-hover">
                <thead>
                    <tr>

                        <th scope="col">#</th>
                        <th scope="col">COA CAT ID</th>
                        <th scope="col">COA CAT Code</th>
                        <th scope="col">COA CAT Name</th>
                        <th scope="col">COA Min</th>
                        <th scope="col">COA Max</th>
                        <th scope="col">Action </th>
                    </tr>
                </thead>
                <thead>
                {{-- @foreach ($coa as $coas)
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">{{$coas->chart_of_accounts_cartegory->id}}</th>
                        <th scope="col">{{$coas->chart_of_accounts_cartegory->coa_cat_code}}</th>
                        <th scope="col">{{$coas->chart_of_accounts_cartegory->coa_cat_name}}</th>
                        <th scope="col">{{$coas->chart_of_accounts_cartegory->coa_min}}</th>
                        <th scope="col">{{$coas->chart_of_accounts_cartegory->coa_max}}</th>
                        <th scope="col"><a href="#" class="pl-2" data-toggle="modal" data-target="#coa" id="addAsset"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
                    </tr>
                </thead>
                @endforeach --}}
                <tbody>
                        @foreach ($coa as $coas)
                        <tr>
                            <th scope="row">{{$coas->id}}</th>
                            <td>{{$coas->chart_of_accounts_cartegory_id}}</td>
                            <td>{{$coas->coa_code}}</td>
                            <td>{{$coas->coa_code}}</td>
                            <td>{{$coas->coa_code}}</td>
                            <td>{{$coas->coa_name}}</td>
                            <td>
                                <button class="coa-edit btn btn-sm"
                                    data-url="{{action('ChartOfAccountController@update',$coas['id'])}}"><i
                                        class="fa fa-pencil-square-o" style="font-size:30px;color:blue" data-toggle="modal"
                                        data-target="#coa1"></i></button>
                                <button class="coa-delete btn btn-sm"
                                    data-url="{{action('ChartOfAccountController@destroy',$coas['id'])}}"><i
                                        class="fa fa-trash" style="font-size:30px;color:red" data-toggle="modal"
                                        data-target="#coa2"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>

    @include('backoffice.coa.create')
    @include('backoffice.coa.edit')
    @include('backoffice.coa.delete')

@endsection
