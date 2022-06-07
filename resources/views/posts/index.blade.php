@extends('layouts.app')
@section('content') <div class="container"> <div class="row justify-content-center"> <div class="col-md-8"> <div class="card"> <div class="card-header">Posts</div> 
 
<div class="card-body"> @if ($posts->count()>0)
     <table class="table table-striped"> <thead> 
         <tr> <th scope="col"> No </th> 
         <th scope="col"> Title </th> <th scope="col">Delete</th>   
 
</tr> </thead> <tbody> @foreach ($posts as $post) 
    <tr> <th scope="row"> 
 <img src="{{$post->featrued}}" alt="{{$post->title}}" class="imgthumbnail" width="100px" height="100px"> 
 
</th> <th scope="row">{{$post->title}}</th> 
<td>  <a class="" href="{{route('post.edit',['id' =>$post->id ])}}">     <img alt="Edit icon" src="https://img.icons8.com/offices/2x/edit.png" style="height: 30px; width: 30px;"> </a>   </td>
<td>  
    <img alt="Edit icon" src="https://img.icons8.com/offices/2x/edit.png" style="height: 30px; width: 30px;">   
</td> <td>  <a class="" href="{{route('post.delete',['id' =>$post->id ])}}">                                                 <img alt="Delete icon" src="https://img.icons8.com/offices/2x/deletesign.png" style="height: 30px; width: 30px;"> </a> </td>  </tr> @endforeach 
 
@else <p scope="row" class="text-center">No  posts</p> 
  @endif </tbody> </table> </div> </div>
 </div> </div> 
  @endsection