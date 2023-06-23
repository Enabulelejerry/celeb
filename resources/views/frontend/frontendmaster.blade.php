<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Celebrity - Meet & Greet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('front_assets/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('front_assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('front_assets/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('front_assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('front_assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/style.css')}}">
  </head>
  <body>

    <div class="page">
    <nav id="colorlib-main-nav" role="navigation">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
        <div class="img" style="background-image: url(images/image_4.jpg);"></div>
        <div class="colorlib-table-cell js-fullheight">
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <h1 class="mb-4"><a href="index.html" class="logo">Celebrity<br><span>Meet & Greet</span></a></h1>
              <ul>
                <li class="active"><a href="{{route('home')}}"><span>Home</span></a></li>
				<li><a href="{{route('celeb')}}"><span>Celebs</span></a></li>
				<li><a href="{{route('book_celeb')}}"><span>Book</span></a></li>
				{{-- {{route('single',$related_post->id)}} --}}
                <!-- <li><a href="about.html"><span>About</span></a></li>
                <li><a href="model.html"><span>Models</span></a></li>
                <li><a href="blog.html"><span>Blog</span></a></li>
                <li><a href="contact.html"><span>Contact</span></a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

	<header>
		<div class="container">
		  <div class="colorlib-navbar-brand">
			<a class="colorlib-logo" href="index.html">Celebrity<br><span>Meet & Greet</span></a>
		  </div>
		  <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
	  </div>
	</header>
    
  
	  @yield('front')

	   
      <footer class="ftco-footer ftco-section img">
	    	<div class="overlay"></div>
	      <div class="container">
	        <div class="row mb-5">
	          <div class="col-md-6">
	            <div class="ftco-footer-widget mb-4">
	              <h2 class="ftco-heading-2 logo"><a href="index.html"> Celebrity Meet & Greet</a></h2>
	              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	              {{-- <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
	                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
	              </ul> --}}
	            </div>
	          </div>
	         
	          <div class="col-md-2">
	             <div class="ftco-footer-widget mb-4 ml-md-4">
	              <h2 class="ftco-heading-2">Site Links</h2>
	              <ul class="list-unstyled">
	                <li><a href="{{route('home')}}" class="py-2 d-block">Home</a></li>
	                <li><a href="{{route('book_celeb')}}" class="py-2 d-block">Book</a></li>
	                <li><a href="{{route('celeb')}}" class="py-2 d-block">celebs</a></li>
	              </ul>
	            </div>
	          </div>
	          <div class="col-md-4">
	            <div class="ftco-footer-widget mb-4">
	            	<h2 class="ftco-heading-2">Have a Questions?</h2>
	            	<div class="block-23 mb-3">
		              <ul>
		                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
		                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+1(323) 426-6338</span></a></li>
		                {{-- <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li> --}}
		              </ul>
		            </div>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12 text-center">

	            <p>
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Celebrity meet and greet 
	 </p>
	          </div>
	        </div>
	      </div>
	    </footer>

      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

      </div>

	    <!-- Modal -->
	    <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
	      <div class="modal-dialog" role="document">
	        <div class="modal-content">
	          <div class="modal-header">
	            <h5 class="modal-title" id="modalRequestLabel">Request a Quote</h5>
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	              <span aria-hidden="true">&times;</span>
	            </button>
	          </div>
	          <div class="modal-body">
	            <form action="#">
	              <div class="form-group">
	                <label for="appointment_name" class="text-black">Full Name</label>
	                <input type="text" class="form-control" id="appointment_name">
	              </div>
	              <div class="form-group">
	                <label for="appointment_email" class="text-black">Email</label>
	                <input type="text" class="form-control" id="appointment_email">
	              </div>
	              <div class="row">
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="appointment_date" class="text-black">Date</label>
	                    <input type="text" class="form-control" id="appointment_date">
	                  </div>    
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="appointment_time" class="text-black">Time</label>
	                    <input type="text" class="form-control" id="appointment_time">
	                  </div>
	                </div>
	              </div>
	              

	              <div class="form-group">
	                <label for="appointment_message" class="text-black">Message</label>
	                <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
	              </div>
	              <div class="form-group">
	                <input type="submit" value="Send Message" class="btn btn-primary">
	              </div>
	            </form>
	          </div>
	          
	        </div>
	      </div>
	    </div>
    </div>


    <script src="{{asset('front_assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('front_assets/js/popper.min.js')}}"></script>
    <script src="{{asset('front_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('front_assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front_assets/js/aos.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('front_assets/js/scrollax.min.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
    <script src="{{asset('front_assets/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery.timepicker.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('front_assets/js/google-map.js')}}"></script>
    <script src="{{asset('front_assets/js/main.js')}}"></script>
    
  </body>
</html>