<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
               
   return view('settings.settings')->with('settings', Setting::first());     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $featured = $request->background; 
        $featured_new_name = time().$featured->getClientOriginalName();         
        $featured->move('uploads/posts',$featured_new_name); 
        $setting = Setting::first(); 
                   
                    
                     $setting->background =  'uploads/posts/'.$featured_new_name;           
                     
 
        
 
 
        $setting->blog_name =  $request->blog_name;        
         $setting->phone_number =  $request->phone_number;        
          $setting->blog_email = $request->blog_email;         
          $setting->address = $request->address;     
         // $setting->background = $background;     
           $setting->save();                      
           return redirect()->back(); 
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
