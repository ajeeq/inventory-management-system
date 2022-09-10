<?php

namespace App\Http\Controllers;

use App\Disposal;
use Illuminate\Http\Request;

class DisposalController extends Controller
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
        $disposals = Disposal::orderBy('created_at','desc')->paginate(5);

        return view('disposals.index',compact('disposals'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disposals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'disposal_date' => 'required',
            'disposal_refno' => 'required',
        ]);

        Disposal::create($request->all());

        // return redirect('/processes')->with('success', 'Asset Created!');

        return redirect()->route('disposals.index')
                        ->with('success','Disposal Details created successfully.')
                        ->with('alert', 'Disposal Details created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Disposal  $disposal
     * @return \Illuminate\Http\Response
     */
    public function show(Disposal $disposal)
    {
        return view('disposals.show', compact('disposal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disposal  $disposal
     * @return \Illuminate\Http\Response
     */
    public function edit(Disposal $disposal)
    {
        return view('disposals.edit', compact('disposal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disposal  $disposal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disposal $disposal)
    {
        $request->validate([
            'disposal_date' => 'required',
            'disposal_refno' => 'required',
        ]);
        
        $disposal->update($request->all());

        return redirect()->route('disposals.index')
                        ->with('success','Disposal Details updated successfully.')
                        ->with('alert', 'Disposal Details updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disposal  $disposal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disposal $disposal)
    {
        $disposal->delete();
  
        return redirect()->route('disposals.index')
                        ->with('success','Disposal Details deleted successfully');
    }
}
