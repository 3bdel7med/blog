@extends('layouts.app') 
 
@section('content') <div class="container"> <div class="row justify-content-center"> <div class="col-md-8"> <div class="card"> <div class="card-header">Tags</div> <div class="card-body"> @if ($tags->count()>0) <table class="table table-striped"> <thead> <tr> <th scope="col"> No </th> <th scope="col"> Title </th> 
 
<th scope="col">Edit</th> </tr> </thead> <tbody> @foreach ($tags as $tag) <tr> <td>  {{$tag->tag}}  </td> <td>  <a class="" href="{{route('tag.edit',['id' =>$tag->id ])}}">    <img alt="Edit icon" src="https://img.icons8.com/clouds/2x/edit.png" style="height:64px;width:64px;"> </a>   </td> <td> <a class="" href="{{route('tag.delete',['id' =>$tag->id ])}}"> <img alt="Delete Bin icon" style="height:64px;width:64px;" src="https://img.icons8.com/clouds/2x/delete-forever.png" lazy="loaded"> </a> </td>  </tr> @endforeach 
 
@else <p scope="row" class="text-center">No  tags</p>   @endif </tbody> </table> </div> </div> </div> </div> </div> @endsection