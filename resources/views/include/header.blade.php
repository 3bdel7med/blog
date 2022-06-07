<header id="header"> <div id="nav"> <div id="nav-top">
      <div class="container"> <ul class="nav-social"> <li><a href="/"><i  >
          @foreach($settings as $setting)
          
      </i> <h4></h4> </a></li> <li><a href="#">
          @endforeach<i class="fa fa-facebook w-10">

          </i></a></li> <li><a href="#"><i class="fa fa-twitter"></i></a></li> <li>
              <a href="#"><i class="fa fa-google-plus"></i></a></li> <li><a href="#">
                  <i class="fa fa-instagram"></i></a></li> </ul> <div class="nav-btns">
                       <button class="aside-btn"><i class="fa fa-bars"></i></button>
           <button class="search-btn"><i class="fa fa-search"></i></button> <div id="nav-search"> 
               <form method="GET" action="/results"> {{ csrf_field()}} <input class="input" name="search" placeholder="Enter your search..."> </form> <button class="nav-close search-close"> <span></span> </button> </div> </div> </div> </div> <div id="nav-bottom"> <div class="container"> <ul class="nav-menu"> 
 
Laravel-Header 
 
~ 110 ~  
 
@foreach ($categories as $category) <li><a href=""></a></li> @endforeach </ul> </div> </div> <div id="nav-aside"> <ul class="nav-aside-menu"> <li><a href="{{ url('/') }}">Home</a></li> <li class="has-dropdown"><a>Categories</a> <ul class="dropdown"> @foreach ($categories as $category) <li><a href="#">{{$category->name}}</a></li> @endforeach </ul> </li> <li><a href="about.html">About Us</a></li> <li><a href="contact.html">Contacts</a></li> <li><a href="#">Advertise</a></li> </ul> <button class="nav-close nav-aside-close"><span></span></button> </div> </div> </header> 