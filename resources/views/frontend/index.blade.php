@extends('frontend.frontendmaster')

@section('front')

	  
	  <section id="home" class="video-hero js-fullheight" style="height: 700px; background-image: url({{asset('front_assets/images/bg_3.jpg')}});  background-size:cover; background-position: center center;background-attachment:fixed;">
		  <div class="overlay"></div>
		  <a class="player" data-property="{videoURL:'',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
		  <div class="container">
			  <div class="row js-fullheight justify-content-center d-flex align-items-center">
				  <div class="col-md-8">
					  <div class="text text-center">
						  <span class="subheading">Welcome to</span>
						  <h2>Celebrity</h2>
						  <h3 class="mb-4">Meet & Greet</h3>
						  <p><a href="{{route('book_celeb')}}" class="btn btn-primary py-3 px-4">Book Celebrity</a></p>
					  </div>
				  </div>
			  </div>
		  </div>
	  </section>

	  <section class="ftco-section ftco-no-pt ftco-featured-model">
		  <div class="container-fluid">
			  <div class="row">
                 @foreach($topcelebs as $celeb)

				 <div class="col-md-6 col-lg-3">
					<div class="model-entry">
						<div class="model-img" style="background-image: url({{ asset($celeb->image) }});">
						<div class="name text-center">
							<h3><a href="model-single.html">{{$celeb->first_name}}</a></h3>
						</div>
						<div class="text text-center">
							<h3><a href="model-single.html">{{$celeb->first_name}}<br><span>{{$celeb->last_name}}</span></a></h3>
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
		  </div>
	  </section>


<section class="ftco-section ftco-no-pt ftco-no-pb ftco-about-section">
	<div class="container-fluid px-0">
		<div class="row d-md-flex text-wrapper">
				  <div class="one-half img" style="background-image: url('{{asset('front_assets/images/bg_5.jpg')}}');"></div>
				  <div class="one-half half-text d-flex justify-content-end align-items-center">
					  <div class="text-inner pl-md-5">
						  <span class="subheading">Hello!</span>
			<h3 class="heading">Meet and Greet famous celebs on this platform.</h3>
			<p>Meeting and greeting celebrities has become easier than ever. Select any of the listed celeb to greet and we will process it.</p>
			<p><a href="#" class="btn btn-primary py-3 px-4">Book Celebrity</a></p>
			<!-- <ul class="my-4">
				<li><span class="ion-ios-checkmark-circle mr-2"></span> Even the all-powerful Pointing</li>
				<li><span class="ion-ios-checkmark-circle mr-2"></span> Behind the word mountains</li>
				<li><span class="ion-ios-checkmark-circle mr-2"></span> Separated they live in Bookmarksgrove</li>
			</ul> -->
		  </div>
				  </div>
		</div>
	</div>
</section>





  <section class="ftco-section ftco-no-pt ftco-no-pb">
	  <div class="container-fluid px-4 mt-5">
		  <div class="row d-flex">
			  <div class="col-md-6 col-lg-3 d-flex align-items-center ftco-animate">
				  <div class="heading-section text-center">
					  <h2 class="">Top Celebrity </h2>
			<p>Far far away, behind the word mountains, far from the countries Vokalia </p>
		</div>
			  </div>
			  @foreach($greatcelebs as $cel)

			  <div class="col-md-6 col-lg-3">
				 <div class="model-entry">
					 <div class="model-img" style="background-image: url({{ asset($cel->image) }});">
					 <div class="name text-center">
						 <h3><a href="model-single.html">{{$cel->first_name}}</a></h3>
					 </div>
					 <div class="text text-center">
						 <h3><a href="model-single.html">{{$cel->first_name}}<br><span>{{$cel->last_name}}</span></a></h3>
						 <div class="d-flex models-info">
							 <div class="box">
					 <div class="box" style="font-size:6px !important">
						 <p style="font-size:6px !important">{!! html_entity_decode(substr($cel->description, 0, 800))  !!}....</p>
					 </div>
				 </div>
				 
						 </div>
					 </div>
				 </div>
			 </div>
			 </div>
			  @endforeach
			  
			  <div class="col-md-6 col-lg-3 d-flex justify-content-center align-items-center ftco-animate">
				  <div class="btn-view">
					  <p><a href="model.html" class="btn btn-white py-3 px-5">View more</a></p>
				  </div>
			  </div>
		  </div>
	  </div>
  </section>
  <section class="ftco-section testimony-section img" style="background-image: url({{asset('front_assets/images/bg_2.jpg')}});">
	  <div class="overlay"></div>
	<div class="container">
	  <div class="row d-md-flex justify-content-center">
		  <div class="col-md-8 ftco-animate">
		  <div class="carousel-testimony owl-carousel">
             
			@foreach($topcelebs as $celeb)
			<div class="item">
				<div class="testimony-wrap text-center">
				  <div class="user-img mb-5" style="background-image: url({{ asset($celeb->image) }})">
					<span class="quote d-flex align-items-center justify-content-center">
					  <i class="icon-quote-left"></i>
					</span>
				  </div>
				  <div class="text">
					<p class="mb-5">{!! html_entity_decode(substr($celeb->description, 0, 500))  !!}</p>
					<p class="name">{{$celeb->first_name.' '.$celeb->first_name }}</p>
					<span class="position">{{$celeb->category}}</span>
				  </div>
				</div>
			  </div>
			@endforeach
		  </div>
		</div>
	  </div>
	</div>
  </section>
@endsection


