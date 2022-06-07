<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 
use App\profile; 
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        return view('users.index')->with('users',User::all());
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
        $profile = Profile::create([             
            'user_id' => $user->id,             
            'avatar' => 'uploads/avatar/1.png' 
 
    ]);        
     return redirect()->route('users');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);         
        $user->profile->delete($id);         
        $user->delete();         
        return redirect()->route('users'); 
    }
    public function admin($id)     {         
        $user = User::find($id);         
        $user->admin = 1;         
        $user->save();         
        return redirect()->route('users');    
     } 
     public function notAdmin($id)     {        
          $user = User::find($id);        
           $user->admin = 0;        
         $user->save();         
         return redirect()->route('users');
        }
}
