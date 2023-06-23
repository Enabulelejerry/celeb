
@extends('admin.admin_master')

@section('admin')

<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
          <div class="row">
            <div class="box p-15">
				{{-- {{ route('store.post') }}		 --}}
                <form action="{{ route('store.celeb') }}" method="post" enctype="multipart/form-data"  class="form-horizontal form-element col-12">
                @csrf
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 control-label">Celeb First Name</label>
                    <div class="col-sm-10">
                      <input 
                       type="text" 
                       name="first_name"
                       class="form-control @error('first_name') is-invalid @enderror"
					   value="{{ old('first_name') }}"
                         >

                      @error('first_name')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror

                    </div>
                   
                  </div>

				  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 control-label">Celeb Last Name</label>
                    <div class="col-sm-10">
                      <input 
                       type="text" 
                       name="last_name"
                       class="form-control @error('last_name') is-invalid @enderror"
                        value="{{ old('last_name') }}"
                         >
                      @error('last_name')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror

                    </div>
                   
                  </div>

				  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 control-label">Celebrity Category</label>
                    <div class="col-sm-10">
                        <select class="selectpicker" name="cele_cat">
							<option value="average">average</option>
							<option value="top">top</option>
                        </select>
                    </div>
                   
                  </div>

                   <div class="form-group row">
					<label for="" class="col-sm-2 control-label">Description</label>
					<div class="col-sm-6">
                        <div class="mb-4">
							<textarea id="editor1" name="description" class="@error('description')  is-invalid  @enderror"  rows="10" cols="80">
							</textarea>
						  </div>
						  @error('description')
						<div class="text-danger">{{ $message }}</div>
					  @enderror
					</div>
					
				   </div>
                 
                  
                  <div class="form-group row">
                    <label for="" class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-6">
                        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
						@error('image')
						<div class="text-danger">{{ $message }}</div>
					  @enderror
                    </div>

                   <div class="col-sm-4">
                    <div class="controls">
                        <img id="showImage" src="{{  url('') }}" alt="" style="width:100px; height:100px; border:1px solid #000">
                    </div>
                  </div>
				 
                  </div>
                  <div class="form-group row">
                    <div class="ml-auto col-sm-10">
                      <button type="submit" class="btn btn-rounded btn-success">Save celeb</button>
                    </div>
                  </div>
                </form>
            </div>
                 
              </div>
          </div>
      </section>
      <!-- /.content -->
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
       $('#image').change(function(e){
         
           var reader = new FileReader();
          reader.onload = function(e){
              $('#showImage').attr('src',e.target.result)
          }
          reader.readAsDataURL(e.target.files['0']);
       });
    });
</script>
{{-- <script src="{{ asset('../assets/vendor_plugins/iCheck/icheck.min.js') }}"></script> --}}

@endsection