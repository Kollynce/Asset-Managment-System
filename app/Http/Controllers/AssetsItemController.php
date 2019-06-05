<?php

namespace App\Http\Controllers;
use App\AssetsItem;
use Illuminate\Http\Request;

class AssetsItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assetsItems = AssetsItem::all();
        return view('backoffice.assetsItems.index')->with('assetsItems',$assetsItems);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.assetsItems.index');
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
            'serial_number' => 'required|max:20',
            'description' => 'required',
            'asset_type' => 'required',
            'location_id' => 'required',
            'manufacturer' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'asset_image' => 'required',
         ]);

         $assetsItems = array(
            'serial_number' => $request->serial_number,
            'description' => $request->description,
            'asset_type' => $request->asset_type,
            'location_id' => $request->location_id,
            'manufacturer' => $request->manufacturer,
            'brand' => $request->brand,
            'model' => $request->model,
            'asset_image' => $request->asset_image,
        );
        AssetsItem::create($assetsItems);
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
        $assetsItems = AssetsItem::findOrFail($id);
        return $assetsItems;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assetsItems = AssetsItem::find($id);
        return view('backoffice.assetsItems.edit')->compact('assetsItems');
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
            'serial_number' => 'required|max:20',
            'description' => 'required',
            'asset_type' => 'required',
            'location_id' => 'required',
            'manufacturer' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'asset_image' => 'required',
         ]);

        $assetsItems = AssetsItem::find($id);
        $assetsItems->serial_number = $request ->get ('serial_number');
        $assetsItems->description = $request ->get ('description');
        $assetsItems->asset_type = $request ->get ('asset_type');
        $assetsItems->location_id = $request ->get ('location_id');
        $assetsItems->manufacturer = $request ->get ('manufacturer');
        $assetsItems->brand = $request ->get ('brand');
        $assetsItems->model = $request ->get ('model');
        $assetsItems->asset_image = $request ->get ('asset_image');

        $assetsItems->save();
        return redirect('/assetsItems');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assetsItems = AssetsItem::find($id);
        $assetsItems->delete();
        return redirect('/assetsItems');
    }
}
