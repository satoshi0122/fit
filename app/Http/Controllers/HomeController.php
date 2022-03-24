<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

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
        $comments=Comment::all();
        return view('index',compact('comments'));

        //return view('home');
    }


    public function home2()
    {
        $comments=Comment::all();
        //return view('index',compact('comments'));

        return view('home2');
    }
}
