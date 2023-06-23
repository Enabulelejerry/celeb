@extends('frontend.frontendmaster')

@section('front')
<section class="hero-wrap" style="background-image: url({{asset('front_assets/images/bg_1.jpg')}});">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
		<div class="col-md-8 ftco-animate text-center">
		  <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Celebs</span></p>
		  <h1 class="mb-5 bread">Our Top Celebs</h1>
		</div>
	  </div>
	</div>
</section>
	  
	  <section class="ftco-section  ftco-no-pb">
		  <div class="container">
			  <div class="row justify-content-center">
				  <div class="col-md-10 ftco-animate">
				  <div class="heading-section text-center mb-5">
					  <span class="subheading">Celebs</span>
					  <h2 class="">Our Tops Celeb's</h2>
			<p>Meeting and greeting celebrities has become easier than ever. Select any of the listed celeb to greet and we will process it. </p>
		</div>
			  </div>
			  </div>
		  </div>
	  <div class="container-fluid px-4">
		  <div class="row d-flex">
			@foreach($topcelebs as $celeb)

			<div class="col-md-6 col-lg-3">
			   <div class="model-entry">
				   <div class="model-img" style="background-image: url({{ asset($celeb->image) }});">
				   <div class="name text-center">
					   <h3><a href="">{{$celeb->first_name}}</a></h3>
				   </div>
				   <div class="text text-center">
					   <h3><a href="">{{$celeb->first_name}}<br><span>{{$celeb->last_name}}</span></a></h3>
					   <div class="d-flex models-info">
						   <div class="box">
				   <div class="box" style="font-size:6px !important">
					   <p style="font-size:6px !important">{!! html_entity_decode(substr($celeb->description, 0, 800))  !!}....</p>
				   </div>
			   </div>
			   
					   </div>
				   </div>
			   </div>
		   </div>
		   </div>
			@endforeach
			
		  </div>
		  <div class="row mt-5">
		<div class="col text-center">
		  {{-- <div class="block-27">
			<ul>
			  <li><a href="#">&lt;</a></li>
			  <li class="active"><span>1</span></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			  <li><a href="#">&gt;</a></li>
			</ul>
		  </div> --}}
		</div>
	  </div>
	  </div>
  </section>

@endsection


