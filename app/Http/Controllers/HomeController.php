<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.index-1');
    }

    public function about_us(){
        return view('front.about');
    }

    public function update($slung){
        $Blog = DB::table('blogs')->where('slung',$slung)->get();
        return view('front.update', compact('Blog'));
    }
}
