@extends('layouts.app') 
 
@section('content')
 <div class="container"> 
     <div class="row justify-content-center"> 
         <div class="col-md-8"> <div class="card"> 
             <div class="card-header">Categories</div> 
             <div class="card-body"> <table class="table table-striped"> 
                 <thead> <tr> <th scope="col"> No </th> <th scope="col">Edit</th> 
                 <th scope="col">Delete</th> </tr> </thead>
                  <tbody>
                      @foreach ($categories as $category) 
                      <tr> <th scope="row">{{$category->name}}</th> <td>  
     <a class="" href="{{route('category.edit',['id' =>$category->id ])}}">
  <img alt="Edit icon" src="https://img.icons8.com/bubbles/2x/edit.png" style="height: 64px; width: 64px;">
 </a> </td> <td>  <a class="" href="{{route('category.delete',['id' =>$category->id ])}}">
      <img alt="Delete icon" src="https://img.icons8.com/bubbles/2x/deletesign.png" style="height: 64px; width: 64px;"> 
</a> </td> </tr> @endforeach </tbody> </table>
 </div> 
</div>
 </div> </div> 
</div> @endsection 