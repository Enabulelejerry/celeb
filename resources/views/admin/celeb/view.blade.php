
@extends('admin.admin_master')

@section('admin')

<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
          <div class="row">
            <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Celebrity Table</h3>
                   <a href="{{ route('celeb.add') }}" class="btn btn-success float-right"> Add Celeb</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example5" class="table table-bordered table-striped" style="width:100%">
						<thead>
							<tr>
								<th>SN</th>
								<th>First Name</th>
                                <th>Last Name</th>
								<th>Category</th>
                               <th>Image</th>
                               <th>created_date</th>
                               <th>Action</th>
							</tr>
						</thead>
						<tbody>

                           
							
                            @foreach ($celebs as $key => $celeb)
                            <tr>
                               <td>{{ $key + 1 }}</td>
                                <td>{{ $celeb->first_name }}</td>
                                <td>{{ $celeb->last_name }}</td>
								<td>{{ $celeb->category }}</td>
                                <td>
									<center>
										<img height="50" width="50" src="{{ asset($celeb->image) }}" alt="celeb">
									</center>
									
								</td>
                              <td>{{ 
                                   date('d-m-Y',strtotime($celeb->created_at))
                                 }}</td>
                                <td>
									{{-- {{ route('edit.post',$post->id) }} --}}
                                    <a href="{{ route('edit.celeb',$celeb->id) }}" class="mr-3"><i class="fa fa-edit text-success"></i></a>
                                  <a href="{{ route('delete.celeb',$celeb->id) }}" class="mr-3" id="delete"><i class="fa fa-trash text-danger"></i></a>
                                </td>	
                              </tr>
                            @endforeach
							

						</tbody>
						
					</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
                 
              </div>
          </div>
      </section>
      <!-- /.content -->
    </div>
</div>

@endsection