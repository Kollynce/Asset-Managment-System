@extends('layouts.dashboard')

@section('content')
  <div class="pt-5 card">
        <div class="card-header">
            <h3>List of the employees <a href="#" class="pull-right p-2" data-toggle="modal" data-target="#addModal" id="addAsset"><i class="fa fa-plus" aria-hidden="true">Add Empoloyee</i></a></h3>
        </div>
      <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Office Phone Number</th>
                <th scope="col">Home Phone Number</th>
                <th scope="col">Email</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employee as $employees)
                <tr>
                    <th scope="row">{{$employees->id}}</th>
                    <td>{{$employees->name}}</td>
                    <td>{{$employees->image}}</td>
                    <td>{{$employees->office_phone_number}}</td>
                    <td>{{$employees->mobile_phone_number}}</td>
                    <td>{{$employees->email}}</td>
                    <td>{{$employees->created_at->toFormattedDateString()}}</td>
                    <td>
                        <button class="employee-edit btn btn-sm" data-url="{{action('EmployeeController@update',$employees['id'])}}"><i class="fa fa-pencil-square-o" style="font-size:30px;color:blue" data-toggle="modal" data-target="#editModal"></i></button>
                        <button class="employee-delete btn btn-sm" data-url="{{action('EmployeeController@update',$employees['id'])}}"><i class="fa fa-trash" style="font-size:30px;color:red" data-toggle="modal" data-target="#employeedeleteModal"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
  </div>

  @include('backoffice.employee.create')
  @include('backoffice.employee.edit')
  @include('backoffice.employee.delete')

@endsection
