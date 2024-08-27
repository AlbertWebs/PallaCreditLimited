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

    public function conditions(){
        return view('front.conditions');
    }

    public function policy (){
        return view('front.privacy');
    }

    public function send_application(Request $request){
        $message = $request->message;
        $name = $request->name;
        $phone = $request->phone;
        $county = $request->county;
        $sub = $request->sub;
        // email wecare@pallacredit.com
        $message = "Hey Admin, You have a message from $name, Phone Number: $phone, County $county, Sub County: $sub, The Message is $message";
        return response()->json( [ 'success' => 'Application registered successfully!' ] );
    }
}
