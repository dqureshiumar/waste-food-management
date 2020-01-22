<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Food;
use DB;

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
    public function index()
    {
        return view('home');
    }

    public function views()
    {
        $foods = Food::where('userid',auth()->user()->id)->get();
        return view('layouts.view')->with('foods',$foods);
    }

    public function admin_view()
    {
        $foods = Food::all();
        return view('admin.view')->with('foods',$foods);
    }
    public function all_users()
    {
        $users = User::all();
        return view('admin.allusers')->with('users',$users);
    }
}
