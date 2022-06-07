@extends('layouts.app')

@section('content')
    <div class="container"> <div class="row justify-content-center">
            <div class="col-md-8"> <div class="card"> <div class="card-header">Users</div>
~ 92 ~

<div class="card-body">

@if ($users->count()>0)


<table class="table table-striped"> <thead> <tr> <th scope="col"> No </th> <th scope="col"> Title </th>

<th scope="col">Edit</th> <th scope="col">Delete</th>
  </tr> </thead> <tbody>
     @foreach ($users as $user) <tr>
          <th scope="row">
 <img src="https://www.pngarts.com/files/3/Avatar-PNG-Picture.png" alt="" class="img-thumbnail" width="50px" height="50px">
</th> <th scope="row">     <img  style="width: 50px; height: 50px;" src="{{ Auth::user()->profile->avatar }}"alt="{{ Auth::user()->profile->avatar }}"/> </th> <td>   @if ($user->admin)
     <a class="" href="{{route('users.not.admin',['id' => $user->id])}}">    delete admin </a> @else

<a class="" href="{{route('users.admin',['id' => $user->id])}}">   make admin </a> @endif <a class="" href="">

</a> </td>

<td>  <a class="" href=""> <img alt="Delete icon" src="https://img.icons8.com/cotton/2x/deletesign--v2.png" style="height: 64px; width: 64px;"> </a> </td>  </tr> @endforeach

@else <p scope="row" class="text-center">No  Users</p>   @endif </tbody> </table> </div> </div> </div> </div> </div> @endsection
