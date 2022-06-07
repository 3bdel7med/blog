<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        @foreach($settings as $setting)
        <style>
    
            html, body {

                
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
              
       
            }
            img{
                width: 100px;
                
            }
            </style>
            @endforeach

        
    </head>
    <body>
      
        
      @include('include.header')
           
@foreach($posts as $post)
      <div class="section"> <div class="container"> <div id="hot-post" class="row hot-post"> 
          <div class="col-md-8 hot-post-left"> <div class="post post-thumb">
               <a class="post-img" href="{{route('posts')}}"><img src="{{$post->featrued}}" alt="">
    </a> <div class="post-body"> <div class="post-category"> 
        <a href="{{route('categories', ['id' => $post->category->id])}}">{{$post->category->name}}</a> 
    </div> <h3 class="post-title title-lg"><a href="#">{{$post->title}}</a>
</h3> <ul class="post-meta"> <li><a href="#">John Doe</a></li>
 <li>{{$post->created_at->diffForHumans()}}</li> 
 
 
</ul> </div> </div> </div> <div class="col-md-4 hot-post-right"> <div class="post post-thumb"> 
    <a class="post-img" href="{{route('posts')}}"><img src="{{$post->featrued}}" alt=""></a> 
    <div class="post-body"> <div class="post-category"> 
        <a href="{{route('categories', ['id' => $post->category->id])}}">{{$post->category->name}}</a>
     </div> <h3 class="post-title"><a href="#">{{$post->title}}</a></h3> <ul class="post-meta"> <li>
         <a href="author.html">John Doe</a></li> <li>{{$post->created_at->diffForHumans()}}</li>
         </ul> </div> </div> <div class="post post-thumb"> <a class="post-img" href="{{route('posts')}}">
             <img src="{{$post->featrued}}" alt=""></a> <div class="post-body"> <div class="post-category">
          <a href="{{route('categories', ['id' => $post->category->id])}}">{{$post->category->name}}</a>
         </div> <h3 class="post-title"><a href="blog-post.html">{{$post->title}}</a></h3>
          <ul class="post-meta"> <li><a href="author.html">John Doe</a></li> 
          <li>{{$post->created_at->diffForHumans()}}</li> </ul> </div> 
        </div> </div> </div> </div> </div> <div class="section">
             <div class="container"> <div class="row"> <div class="col-md-8"> <div class="row"> <div class="col-md-12"> <div class="section-title"> <h2 class="title">Recent posts</h2> </div> </div> <div class="col-md-6"> <div class="post"> <a class="post-img" href="blog-post.html">
                 <img src="{{$post->featrued}}" alt=""></a> <div class="post-body"> <div class="post-category"> 
                     <a href="category.html">{{$post->category->name}}</a> </div> 
  
 
<h3 class="post-title"><a href="blog-post.html">{{$post->title}}</a></h3>
 <ul class="post-meta">
      <li><a href="author.html">John Doe</a></li> <li>{{$post->created_at->diffForHumans()}}</li>
     </ul> </div> </div> </div> <div class="col-md-6"> <div class="post">
          <a class="post-img" href="blog-post.html"><img src="{{$post->featrued}}" alt=""></a>
           <div class="post-body"> <div class="post-category"> 
               <a href="category.html">{{$post->category->name}}</a> 
 
</div> <h3 class="post-title"><a href="blog-post.html">{{$post->title}}</a></h3>
 <ul class="post-meta"> <li><a href="author.html">John Doe</a></li> <li>
     {{$post->created_at->diffForHumans()}}</li> </ul> </div> </div> </div> 
     <div class="clearfix visible-md visible-lg"></div> <div class="col-md-6">
          <div class="post"> <a class="post-img" href="blog-post.html">
              <img src="{{$post->featrued}}" alt=""></a> 
              <div class="post-body"> <div class="post-category"> <a href="category.html">
                  {{$post->category->name}}</a> </div> <h3 class="post-title">
                      <a href="blog-post.html">{{$post->title}}</a></h3>
                       <ul class="post-meta"> <li><a href="author.html">John Doe</a></li>
                        <li>{{$post->created_at->diffForHumans()}}</li> </ul> </div> </div> 
                    </div> <div class="col-md-6"> <div class="post">
                         <a class="post-img" href="blog-post.html">
                             <img src="{{$post->featrued}}" alt=""></a> 
                             <div class="post-body"> <div class="post-category"> 
                                 <a href="category.html">{{$post->category->name}}</a> 
 
</div> <h3 class="post-title"><a href="blog-post.html">{{$post->title}}</a>
</h3> <ul class="post-meta"> <li><a href="author.html">John Doe</a></li> 
<li>{{$post->created_at->diffForHumans()}}</li> </ul> </div> 
~ 133 ~  
 
</div> </div> </div> <div class="row"> <div class="col-md-12"> 
  
 
</div> </div>
 
<div class="category-widget"> <ul> @foreach ($categories as $category) <li><a href="#">{{$category->name}} <span>451</span></a></li> @endforeach </ul> </div> </div> <div class="aside-widget"> <div class="section-title"> <h2 class="title">Newsletter</h2> </div> <div class="newsletter-widget"> <form> <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p> <input class="input" name="newsletter" placeholder="Enter Your Email"> <button class="primary-button">Subscribe</button> </form> </div> </div> <div class="aside-widget"> <div class="section-title"> <h2 class="title">Popular Posts</h2> </div> </div> </div> </div> </div> </div> <div class="section-row loadmore text-center"> <a href="#" class="primary-button">Load More</a> </div>


@endforeach
      @include('include.footer')
    </body>
</html>
