<?php

namespace App\Http\Controllers;
use App\Setting;
use App\Category;
use App\Tag;
use App\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() 
    { 
        return view('welcome')->with('settings' , Setting::all()) 
        ->with('categories' , Category::take(5)->get() ) 
         ->with('tags' , Tag::take(5)->get() )  
         ->with('posts' , Post::all()) 
            ->with('Rolex',  Category::find(1) ) ->with('settings',  Setting::first() 
            ) ->with('Omega',  Category::find(5) )  ; 
 
} 

public function showPost($slug) { 
 
    $post      = Post::where('slug' , $slug)->first();
     $next_page = Post::where('id' , '>' ,$post->id)->min('id');
     $prev_page = Post::where('id' , '<' ,$post->id)->max('id'); 
     
     
    return view('posts.show')  
     
    ->with('tags' , Tag::all() )  ->with('post' , $post) ->with('next' , Post::find($next_page)) 
    ->with('prev' , Post::find($prev_page))
     ->with('title' , $post->title) ->with('blog_name' , Setting::first()->blog_name)
      ->with('settings',  Setting::first() ) 
     
    
     
    ->with('categories' , Category::take(5)->get() )   ; 
     
    } 
     
    public function category($id) { 
     
    $category      = Category::find($id) ; 
     
     
    return view('categories.category')  ->with('tags' , Tag::all() )  ->with('title' , $category->name) ->with('categories' , Category::take(5)->get() )  ->with('blog_name' , Setting::first()->blog_name) ->with('settings',  Setting::first() ) ->with('name' , $category->name )   ->with('category' , $category )    ; 
     
    } 
     
    public function tag($id) { 
     
    $tag      = Tag::find($id) ; 
     
     
    return view('tags.tags')  
     
    ->with('title' , $tag->tag) 
    ->with('categories' , Category::take(5)->get() )  
    ->with('blog_name' , Setting::first()->blog_name)
     ->with('settings',  Setting::first() ) 
     ->with('name' , $tag->name )   
     
    ->with('tag' , $tag )    ; 
     
    } 
     
    
}
