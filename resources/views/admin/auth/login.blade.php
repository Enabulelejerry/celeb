<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title> Login </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">
    <!-- Style-->  
	<link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">
       <!--toaster-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

</head>

<body class="hold-transition theme-primary bg-gradient-primary">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="content-top-agile p-10">
							<h2 class="text-white">LOGIN</h2>
							{{-- <p class="text-white-50">Register a new membership</p>							 --}}
						</div>
						<div class="p-30 rounded30 box-shadowed b-2 b-dashed">
							<form action="/admin/login" method="post">
                                @csrf
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-email"></i></span>
										</div>
										<input type="email" name="email" class="form-control pl-15 bg-transparent text-white plc-white @error('email') is-invalid @enderror" placeholder="Email">

                                        
									</div>
                                    @if (session()->has('error') )
                                        <span class="text-danger"> {!! session('error') !!}</span>
                                    @endif
                                      @error('email')
                                        <div class="alert alert-danger p-2">{{ $message }}</div>
                                         @enderror
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-lock"></i></span>
										</div>
										<input type="password" name="password" class="form-control pl-15 bg-transparent text-white plc-white @error('password') is-invalid @enderror" placeholder="Password">
									</div>
                                    @error('password')
                                    <div class="alert alert-danger p-2">{{ $message }}</div>
                                     @enderror
								</div>
								
								  <div class="row">
									
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-info btn-rounded margin-top-10">SIGN IN</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>												
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>		

      <!-- toaster -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>

@if(Session::has('message'))

var type = "{{ Session::get('alert-type', 'info') }}"

switch(type){
  case 'info':
  toastr.info("{{ Session::get('message') }}");
  break;

  case 'success':
  toastr.success("{{ Session::get('message') }}");
  break;

  case 'warning':
  toastr.warning("{{ Session::get('message') }}");
  break;

  case 'error':
  toastr.error("{{ Session::get('message') }}");
  break;

}
@endif

</script>
</body>
</html>
