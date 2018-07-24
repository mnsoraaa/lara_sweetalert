<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function success(Request $request){
       flash('Successfully! Success message')->success();
       toast('Success Message!','success','top-right')->autoClose(10000);
       return view('home');
    }

    public function danger(){
      flash('Error! Error message')->error();
      toast('Error Message!', 'error','top-right');
      return view('home');
    }

    public function warning(){
      flash('Warning! Warning message')->warning();
      toast('Warning Message!', 'warning','top-right');
      return view('home');
    }

    public function info(){
      flash('Info! Info message')->warning();
      toast('Info Message','info','top-right');
      return view('home');
    }
}
