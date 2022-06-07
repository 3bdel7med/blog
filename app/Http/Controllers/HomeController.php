<?php

namespace App\Http\Controllers;
use App\Setting;
use App\Post;
use App\Category;
use App\Tag;
use App\User;


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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with('settings',Setting::all());
    }
    public function dashboard(){
        return view('dashboard')->with('categories_count',Category::count()) 
        ->with('post_count',Post::count())
       ->with('tags_count',Tag::count())
       ->with('users_count',User::count())->with('trashed_count',Post::onlyTrashed()->count());
    }
}
