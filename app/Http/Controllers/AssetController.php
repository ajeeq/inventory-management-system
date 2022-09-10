<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Staff;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class AssetController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assets = Asset::all();
        return view('assets.index', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Asset $assets)
    {
        $request->validate([
            'category' => 'required',
            'brand_model' => 'required',
            'username' => 'required',
            'asset_no' => 'required',
        ]);

        $red = Asset::create($request->all());
        return redirect('assets/'.$red->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        //fetching parent's Primary Key
        $asset_fk = $asset->id;

        //assets
        $view_assets = DB::table('assets')->where(function($query) use ($asset_fk)
        {        
            $query->where('id', '=', $asset_fk);
        })->get();

        //staffs
        $view_staffs = DB::table('staffs')->where(function($query) use ($asset_fk)
        {        
            $query->where('assets_id', '=', $asset_fk);
        })->get();

        //maintenance & services
        $view_services = DB::table('services')->where(function($query) use ($asset_fk)
        {        
            $query->where('assets_id', '=', $asset_fk);
        })->get();

        //preventive maintenance
        $view_prevs = DB::table('prevs')->where(function($query) use ($asset_fk)
        {        
            $query->where('assets_id', '=', $asset_fk);
        })->get();

        return view('assets.show',
        [
            'view_assets'=>$view_assets,
            'view_staffs'=>$view_staffs,
            'view_services'=>$view_services,
            'view_prevs'=>$view_prevs
        ], compact('asset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        return view('assets.edit', compact('asset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'brand_model' => 'required',
            'username' => 'required',
            'serial_no' => 'required',
            'asset_no' => 'required',
            'inv_no' => 'required',
            'os' => 'required',
            'cpu' => 'required',
            'ram' => 'required',
            'appsys' => 'required',
            'computer_name' => 'required',
            'supplier_name' => 'required',
            'supplier_purchased' => 'required',
        ]);
        
        $asset = Asset::find($id);

        $asset->category = $request->input('category');
        $asset->brand_model = $request->input('brand_model');
        $asset->username = $request->input('username');
        $asset->serial_no = $request->input('serial_no');
        $asset->asset_no = $request->input('asset_no');
        $asset->inv_no = $request->input('inv_no');
        $asset->os = $request->input('os');
        $asset->cpu = $request->input('cpu');
        $asset->ram = $request->input('ram');
        $asset->appsys = $request->input('appsys');
        $asset->computer_name = $request->input('computer_name');
        $asset->supplier_name = $request->input('supplier_name');
        $asset->supplier_purchased = $request->input('supplier_purchased');
        $asset->save();

        // return redirect()->route('assets.index')
        //                 ->with('success','Asset updated successfully.')
        //                 ->with('alert', 'Asset updated successfully!');
        return redirect('assets/'.$asset->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asset = Asset::find($id);
        $asset->delete();
        
        return redirect()->route('assets.index')
                        ->with('success','Asset deleted successfully.')
                        ->with('alert', 'Asset deleted successfully!');
    }

    public function assetsList()
    {
        return Datatables::of(Asset::query())->make(true);
    }
}