<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Staff;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Staff $staff)
    {
        return view('dashboard', compact('staff'));
    }

    public function chart()
    {
        //Assets chart
        $get_pc = DB::table('assets')->where('category', 'pc')->count();
        $get_laptop = DB::table('assets')->where('category', 'laptop')->count();
        $get_printer = DB::table('assets')->where('category', 'printer')->count();
        $asset_total = DB::table('assets')->select('category')->count();
        
        //OS chart
        $winxp = DB::table('assets')->where('os', 'windows xp sp3')->count();
        $win7 = DB::table('assets')->where('os', 'windows 7 sp1')->count();
        $win10 = DB::table('assets')->where('os', 'windows 10')->count();
        $pclaptop_total = DB::table('assets')->where('category', 'pc')->orwhere('category', 'laptop')->count();
        
        return view('dashboard',
        [
            //return asset data
            'get_pc'=>$get_pc,
            'get_laptop'=>$get_laptop,
            'get_printer'=>$get_printer,
            'asset_total'=>$asset_total,

            ////return os data
            'winxp'=> $winxp,
            'win7'=> $win7,
            'win10'=> $win10,
            'pclaptop_total'=>$pclaptop_total,
        ]);
    }
}
