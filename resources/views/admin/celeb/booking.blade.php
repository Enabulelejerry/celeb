
@extends('admin.admin_master')

@section('admin')

<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
          <div class="row">
            <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Booking Table</h3>
                   <a href="{{ route('celeb.add') }}" class="btn btn-success float-right">Add Celeb</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example5" class="table table-bordered table-striped" style="width:100%">
						<thead>
							<tr>
								<th>SN</th>
								<th>client Name</th>
                                <th>Email</th>
                               <th>City</th>
							   <th>Phone Number</th>
							   <th>Name Of Celebrity</th>
                               <th>Booking Date</th>
                               {{-- <th>Action</th> --}}
							</tr>
						</thead>
						<tbody>

                           
							
                            @foreach ($bookings as $key => $booking)
                            <tr>
                               <td>{{ $key + 1 }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->email }}</td>
                                <td>{{ $booking->city}}</td>
								<td>{{ $booking->phone_number}}</td>
								<td>{{ $booking->name_of_celebrity}}</td>
                              <td>{{ 
                                   date('d-m-Y',strtotime($booking->created_at))
                                 }}</td>
                            	
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