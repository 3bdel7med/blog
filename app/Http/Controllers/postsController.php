<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Category;
class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        if ($categories->count() ==0   ) {
               return redirect()->route('category.create') ;     }

        $tags = Tag::all();
         if ($tags->count() ==0 ) {


                return redirect()->route('tag.create') ;                      }
        return view('posts.create')->with('categories',category::all()) ->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
             "title"    => "required",
        "content"  => "required",
        "featured" => "required|image",
     ]);
     $featured = $request->featured;
     $featured_new_name = time().$featured->getClientOriginalName();
     $featured->move('uploads/posts',$featured_new_name);
     $post = Post::create([
         "title"    => $request->title,
         "content"  => $request->content,
         "category_id"  => $request->category_id,
         "featrued" => 'uploads/posts/'.$featured_new_name,
         "slug"    => str_slug($request->title),

    ]);
     return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('posts',$post)->with('categories',Category::all())->with('categories',category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $this->validate($request,[
            "title"    => "required",
            "content"  => "required",
            "category_id"  => "required"
        ]);              if ( $request->hasFile('featured')  ) {
             $featured = $request->featured;
              $featured_new_name = time().$featured->getClientOriginalName();
              $featured->move('uploads/posts/',$featured_new_name);
              $post->featrued = 'uploads/posts/'.$featured_new_name;
              }        //dd($post);
                 $post->title =  $request->title;
                 $post->content =  $request->content;
                 $post->category_id = $request->category_id;
                 $post->tags()->sync($request->tags) ;
         $post->save();
         return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
         $post->delete($id);
          return redirect()->back();
    }
    public function trashed()
     {
          $post = Post::onlyTrashed()->get();
          //dd($post);
           return view('posts.softdeleted')->with('posts',$post);
          }
          public function hdelete($id)
          {
               $post = Post::withTrashed()->where('id',$id)->first();
                $post->forceDelete();
                  return redirect()->back();
              }
              public function restore($id)     {
                    $post = Post::withTrashed()->where('id',$id)->first();
         $post->restore();
          return redirect()->route('posts');     }
}
