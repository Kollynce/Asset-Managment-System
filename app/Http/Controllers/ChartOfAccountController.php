<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChartOfAccount;
use App\ChartOfAccountsCartegory;

class ChartOfAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coa = ChartOfAccount::all();
        //$coa = ChartOfAccountsCartegory::all();

        //return $cat;
        return view('backoffice.coa.index')->with('coa',$coa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coa = ChartOfAccountsCartegory::all();
        return view('backoffice.coa.create')->with('coa',$coa);;
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
            'coa_code' => 'required',
            'coa_name' => 'required',
         ]);

        $coacat = ChartOfAccountsCartegory::all();
        $coa = new ChartOfAccount();
        $coa->coa_code = $request->coa_code;
        $coa->coa_name = $request->coa_name;
       // $coa->chart_of_accounts_cartegory_id = auth()->user()->id;
        $coa->save();

        // $coa = array(
        //     'coa_code' => $request->coa_code,
        //     'coa_name' => $request->coa_name,
        // );
        // ChartOfAccount::create($coa);
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
        $coa = ChartOfAccount::findOrFail($id);
        return $coa;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'coa_code' => 'required',
            'coa_name' => 'required',
         ]);

        $coa = ChartOfAccount::find($id);
        $coa->coa_code = $request ->get ('coa_code');
        $coa->coa_name = $request ->get ('coa_name');
        $coa->chart_of_accounts_cartegory_id = chart_of_accounts_cartegory()->id;

        $coa->save();
        return redirect('/coa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coa = ChartOfAccount::find($id);
        $coa->delete();
        return redirect('/coa');
    }
}
