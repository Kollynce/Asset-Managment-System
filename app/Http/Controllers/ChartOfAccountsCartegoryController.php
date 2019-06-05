<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChartOfAccountsCartegory;

class ChartOfAccountsCartegoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coacat = ChartOfAccountsCartegory::all();
        return view('backoffice.coacat.index')->with('coacat',$coacat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.coacat.index');
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
            'coa_cat_code' => 'required',
            'coa_cat_name' => 'required',
            'coa_min' => 'required',
            'coa_max' => 'required',
         ]);

         $coacat = array(
            'coa_cat_code' => $request->coa_cat_code,
            'coa_cat_name' => $request->coa_cat_name,
            'coa_min' => $request->coa_min,
            'coa_max' => $request->coa_max,
        );
        //dd($coacat);
        ChartOfAccountsCartegory::create($coacat);
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
        $coacat = ChartOfAccountsCartegory::findOrFail($id);
        return $coacat;
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
            'coa_cat_code' => 'required',
            'coa_cat_name' => 'required',
            'coa_min' => 'required',
            'coa_max' => 'required',
         ]);

        $coa = ChartOfAccountsCartegory::find($id);
        $coa->coa_cat_code = $request ->get ('coa_cat_code');
        $coa->coa_cat_name = $request ->get ('coa_cat_name');
        $coa->coa_min = $request ->get ('coa_min');
        $coa->coa_max = $request ->get ('coa_max');

        $coa->save();
        return redirect('/coacat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coacat = ChartOfAccountsCartegory::find($id);
        $coacat->delete();
        return redirect('/coacat');
    }
}
