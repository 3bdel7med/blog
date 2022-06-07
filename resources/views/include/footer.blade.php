<footer id="footer"> <div class="container"> <div class="row"> <div class="col-md-3">
     <div class="footer-widget"> 
 @foreach($settings as $setting)
<p>  
 
 </p> <ul class="contact-social">
    @endforeach
     <li><a href="#" class="social-facebook">
    <i class="fa fafacebook"></i></a></li> <li><a href="#" class="social-twitter">
        <i class="fa fatwitter"></i></a></li> <li><a href="#" class="social-google-plus">
            <i class="fa fa-googleplus"></i></a></li> <li><a href="#" class="social-instagram">
                <i class="fa fainstagram"></i></a></li> </ul> </div> </div> <div class="col-md-3">
                     <div class="footer-widget"> <h3 class="footer-title">Categories</h3>
                      <div class="category-widget"> <ul> @foreach ($categories as $category) <li>
                          <a href="#">{{$category->name}} <span>451</span></a></li> @endforeach </ul> </div> </div> </div> <div class="col-md-3"> <div class="footer-widget"> <h3 class="footer-title">Tags</h3> <div class="tags-widget"> <ul> 
 
@foreach ($tags as $tag) <li><a href="#">{{$tag->tag}} 
     </a></li> @endforeach </ul></div> </div> </div> <div class="col-md-3">
          <div class="footer-widget"> <h3 class="footer-title">Newsletter</h3> 
          <div class="newsletter-widget"> 
 
Laravel-Footer 
 

 
<form> <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p> 
<input class="input" name="newsletter" placeholder="Enter Your Email"> 
<button class="primary-button">Subscribe</button> </form> </div> </div> </div> 
</div> <div class="footer-bottom row"> <div class="col-md-6 col-md-push-6"> 
    <ul class="footer-nav"> <li><a href="index.html">Home</a></li> <li><a href="about.html">About Us</a>
</li> <li><a href="contact.html">Contacts</a></li> <li><a href="#">Advertise</a></li> <li><a href="#">Privacy</a></li> </ul> </div> <div class="col-md-6 col-md-pull-6"> <div class="footer-copyright"> Copyright &copy; <script>document.write(new Date().getFullYear());</script>  All rights reserved | This template is made with  <i class="fa fa-heart-o" aria-hidden="true"></i> by  
<a href="https://colorlib.com" target="_blank">Rahma Altaee</a> </div> </div> </div> </div> </footer> 