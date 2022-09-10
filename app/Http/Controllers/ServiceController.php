<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        $services = Service::where('assets_id', $assets_id)->get();
        return view('services.index', compact('services', 'assets_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($assets_id)
    {
        return view('services.create', compact('assets_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $assets_id)
    {
        Service::create($request->all() + ['assets_id' => $assets_id]);
        return redirect()->route('assets.services.index', $assets_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($assets_id, Service $service)
    {
        return view('services.show', compact('assets_id', 'service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($assets_id, Service $service)
    {
        return view('services.edit', compact('assets_id', 'service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update($assets_id, Request $request, Service $service)
    {
        $request->validate([
            'service_date' => 'required',
            'service_notes' => 'required',
            'service_cost' => 'required',
            'service_location' => 'required',
        ]);

        $service->update($request->all());
        return redirect()->route('assets.services.index', $assets_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($assets_id, Service $service)
    {
        $service->delete();
        return redirect()->route('assets.services.index', $assets_id);
    }
}
