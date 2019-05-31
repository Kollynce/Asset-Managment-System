<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //displays all the data in the employees table
        $employee = Employee::all();
        return view('backoffice.employee.index')->with('employee',$employee);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.employee.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:20',
            'email' => 'required|email|unique:users',
            'image' => 'required|max:20',
            'office_phone_number' => 'required|max:15',
            'mobile_phone_number' => 'required|max:15'
         ]);

        //  $employee = new Employee();
        //  $employee->name = $request->name;
        //  $employee->email = $request->email;
        //  $employee->image = $request->image;
        //  $employee->office_phone_number = $request->office_phone_number;
        //  $employee->mobile_phone_number = $request->mobile_phone_number;
        //  $employee->save();
        //  return back();

        $employee = array(
            'name' => $request->name,
            'email' => $request->email,
            'image' => $request->image,
            'office_phone_number' => $request->office_phone_number,
            'mobile_phone_number' => $request->mobile_phone_number
        );
        Employee::create($employee);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return $employee;
        //dd($employee);
        //return view('backoffice.employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('backoffice.employee.edit')->compact('employee');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'image' => 'required|max:20',
            'office_phone_number' => 'required|max:50',
            'mobile_phone_number' => 'required|max:50'
         ]);

         $employee = Employee::find($id);
         $employee->name = $request ->get ('name');
         $employee->email = $request ->get ('email');
         $employee->image = $request ->get ('image');
         $employee->office_phone_number = $request ->get ('office_phone_number');
         $employee->mobile_phone_number = $request ->get ('mobile_phone_number');
         $employee->save();
         return view('backoffice.employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

    }
}
