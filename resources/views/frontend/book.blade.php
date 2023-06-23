@extends('frontend.frontendmaster')

@section('front')
<section class="hero-wrap" style="background-image: url({{asset('front_assets/images/chris.jpg')}})">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
		<div class="col-md-8 ftco-animate text-center">
		  <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
		  <h1 class="mb-5 bread">Book Celebrity</h1>
		</div>
	  </div>
	</div>
</section>
	  
<section class="ftco-section contact-section">
  <div class="container mt-5">
	@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
	<div class="row block-9">
				  
		  
	  <div class="col-md-12 order-first ftco-animate">
		<form action="{{ route('book.celeb') }}" method="post">
			@csrf
		  <div class="form-group">
			<input type="text" name="name" class="form-control" placeholder="Your Name">
			@error('name')
                <div class="text-danger">{{ $message }}</div>
             @enderror
		  </div>
		  <div class="form-group">
			<input type="text" name="email" class="form-control" placeholder="Your Email">
			@error('email')
                <div class="text-danger">{{ $message }}</div>
             @enderror
		  </div>
		  <div class="form-group">
			<input type="text" name="city" class="form-control" placeholder="City">
			@error('city')
                <div class="text-danger">{{ $message }}</div>
             @enderror
		  </div>

		  <div class="form-group">
			<input type="text" name="phone_number" class="form-control" placeholder="Phone Number">
			@error('phone_number')
                <div class="text-danger">{{ $message }}</div>
             @enderror
		  </div>

		  <div class="form-group">
			<input type="text" name="name_of_celebrity" class="form-control" placeholder="Name Of Celeberity">
			@error('name_of_celebrity')
                <div class="text-danger">{{ $message }}</div>
             @enderror
		  </div>
		 
		  <div class="form-group">
			<input type="submit" value="Book" class="btn btn-primary py-3 px-5">
		  </div>
		</form>
	  </div>
	</div>
  </div>
</section>

@endsection


