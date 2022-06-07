@extends('layouts.app') 
 
@section('content') 
 
 
<div class="container"> 
    <div class="row justify-content-center"> 
 <div class="col-md-8"> <div class="card"> 
     <div class="card-header">Edit Post </div> 
 
<div class="card-body"> @if(count($errors)>0) 
    <ul class="navbar-nav mr-auto"> @foreach ($errors->all() as $error) 
        <li class="nav-item active"> {{$error}} </li> 
        @endforeach 
 
</ul> @endif 
 

 
<form action="{{route('users.profile.update')}}" method="POST" enctype="multipart/form-data"> 
    {{ csrf_field()}} <div class="form-group"> 
        <label for="name">name</label> 
        <input type="text" class="form-control" name='name'>
    </div>  
    <div class="form-group"> 
        <label for="name">email</label> 
        <input type="email" class="form-control" name='email'>
    </div>  
    <div class="form-group"> 
        <label for="password">password</label> 
        <input type="password" class="form-control" name='password'>
    </div>  
    <div class="form-group"> 
        <label for="name">facebock</label> 
        <input type="text" class="form-control" name='facebock'>
    </div>  
    <div class="form-group"> 
        <label for="name">github</label> 
        <input type="text" class="form-control" name='github'>
    </div>  
    <div class="form-group"> 
        <label for="name">twitter</label> 
        <input type="text" class="form-control" name='twitter'>
    </div>  
    <div class="form-group"> 
        <label for="name">about</label> 
        <input type="text" class="form-control" name='about'>
    </div> 
    <div class="form-group"> 
        <label for="name">avatar</label> 
        <input type="file" class="form-control" name='avatar'>
    </div>   
  <div class="form-group">
      <button class="btn primary">update</button>
  </div>
</form>
 
</div> 
 
 

</div> 

 
</div> </div> @endsection 