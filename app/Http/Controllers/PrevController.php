<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Prev;
use Illuminate\Http\Request;

class PrevController extends Controller
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
        $prevs = Prev::where('assets_id', $assets_id)->get();
        return view('prevs.index', compact('prevs', 'assets_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($assets_id)
    {
        return view('prevs.create', compact('assets_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $assets_id)
    {
        Prev::create($request->all() + ['assets_id' => $assets_id]);
        return redirect()->route('assets.prevs.index', $assets_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prev  $prev
     * @return \Illuminate\Http\Response
     */
    public function show($assets_id, Prev $prev)
    {
        return view('prevs.show', compact('assets_id', 'prev'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prev  $prev
     * @return \Illuminate\Http\Response
     */
    public function edit($assets_id, Prev $prev)
    {
        return view('prevs.edit', compact('assets_id', 'prev'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prev  $prev
     * @return \Illuminate\Http\Response
     */
    public function update($assets_id, Request $request, Prev $prev)
    {
        $request->validate([
            'pm_date' => 'required',
            'pm_notes' => 'required',
        ]);

        $prev->update($request->all());
        return redirect()->route('assets.prevs.index', $assets_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prev  $prev
     * @return \Illuminate\Http\Response
     */
    public function destroy($assets_id, Prev $prev)
    {
        $prev->delete();
        return redirect()->route('assets.prevs.index', $assets_id);
    }
}
