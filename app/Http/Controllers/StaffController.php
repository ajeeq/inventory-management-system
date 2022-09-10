<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
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
    public function index($assets_id)
    {
        $staffs = Staff::where('assets_id', $assets_id)->get();
        return view('staffs.index', compact('staffs', 'assets_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($assets_id)
    {
        return view('staffs.create', compact('assets_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Asset $assets, $assets_id)
    {
        Staff::create($request->all() + ['assets_id' => $assets_id]);
        return redirect()->route('assets.staffs.index', $assets_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show($assets_id, Staff $staff)
    {
        return view('staffs.show', compact('assets_id', 'staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($assets_id, Staff $staff)
    {
        return view('staffs.edit', compact('assets_id', 'staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update($assets_id, Request $request, Staff $staff)
    {
        $request->validate([
            'staff_name' => 'required',
            'staff_section' => 'required',
        ]);
        $staff->update($request->all());
        
        return redirect()->route('assets.staffs.index', $assets_id)
                        ->with('success','Asset updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($assets_id, Staff $staff)
    {
        $staff->delete();
        return redirect()->route('assets.staffs.index', $assets_id);
    }
}
