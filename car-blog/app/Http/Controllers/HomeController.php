<?php

namespace App\Http\Controllers;

use App\Post;
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
        //this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all()->reverse();

        return view('home',[
            'posts' => $posts
        ]);
    }

    public function dashboard()
    {
        $posts = Post::all()->reverse();

        return view('adminDashboard',[
            'posts' => $posts
        ]);
    }
}