<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChartOfAccount;
use App\ChartOfAccountsCartegory;
use Illuminate\Support\Facades\DB;

class ChartOfAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coacat = ChartOfAccountsCartegory::all();
        $coa = ChartOfAccount::all();
        $coacatunique = $coacat-> unique('coa_cat_name');
        $coajoin = DB::table('chart_of_accounts_cartegories','chart_of_accounts')
        // ->join('chart_of_accounts','chart_of_accounts_cartegories.id','=','chart_of_accounts.chart_of_accounts_cartegory_id')
        // ->select('chart_of_accounts_cartegories.coa_cat_name','chart_of_accounts.coa_name')
        ->get();

        //return $coajoin;
        return view('backoffice.coa.index',compact('coa','coacat','coacatunique','coajoin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coacat = ChartOfAccountsCartegory::all();
        $coa = ChartOfAccount::all();
        return view('backoffice.coa.index',compact('coa','coacat'));
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


        //$chartOfAccount->chart_of_accounts_cartegory->save($data);
        $coacat = new ChartOfAccountsCartegory();
        $coa = new ChartOfAccount();
        $coa->coa_code = $request->coa_code;
        $coa->coa_name = $request->coa_name;
        $coa->coa_x_name= $request->coa_x_name;
        $coa->chart_of_accounts_cartegory_id = $request->chart_of_accounts_cartegory_id;
        $coa->save();
        return back();

        // $coa = array(
        //     'coa_code' => $request->coa_code,
        //     'coa_name' => $request->coa_name,
        // );
        // ChartOfAccount::create($coa);
        //return back();

        //$coa = request()-> all();
        //ChartOfAccount::create($coa);
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
        $coa->coa_x_name= $request->coa_x_name;
        //$coa->chart_of_accounts_cartegory_id = $request->chart_of_accounts_cartegory_id;

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
