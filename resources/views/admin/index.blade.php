
@extends('admin.admin_master')

@section('admin')

<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {{-- <div class="col-xl-3 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-primary-light rounded w-60 h-60">
                              <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Total Post</p>
                              <h3 class="text-white mb-0 font-weight-500">3</h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-warning-light rounded w-60 h-60">
                              <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Total Category</p>
                              <h3 class="text-white mb-0 font-weight-500">5</h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-info-light rounded w-60 h-60">
                              <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Total Comment</p>
                              <h3 class="text-white mb-0 font-weight-500">50</h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-danger-light rounded w-60 h-60">
                              <i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Total User</p>
                              <h3 class="text-white mb-0 font-weight-500">4</h3>
                          </div>
                      </div>
                  </div>
              </div> --}}
              
              {{-- <div class="col-xl-6 col-12">
                  <div class="box">
                      <div class="box-header">
                          <h4 class="box-title">
                              Earning Summary
                          </h4>
                      </div>
                      <div class="box-body py-0">
                          <div class="row">
                              <div class="col-lg-6 col-12">
                                  <div class="box no-shadow mb-0">
                                      <div class="box-body px-0">
                                          <div class="d-flex justify-content-start align-items-center">
                                              <div>
                                                  <div id="chart41"></div>
                                              </div>
                                              <div>
                                                  <h5>Top Order</h5>
                                                  <h4 class="text-white my-0 font-weight-500">$39k</h4>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6 col-12">
                                  <div class="box no-shadow mb-0">
                                      <div class="box-body px-0">
                                          <div class="d-flex justify-content-start align-items-center">
                                              <div>
                                                  <div id="chart42"></div>
                                              </div>
                                              <div>
                                                  <h5>Average Order</h5>
                                                  <h4 class="text-white my-0 font-weight-500">$24k</h4>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div id="charts_widget_43_chart"></div>							
                      </div>
                  </div>
              </div>
              <div class="col-xl-6 col-12"> --}}
                  {{-- <div class="box bg-info bg-img" style="background-image: url(../images/gallery/bg-1.png)">
                      <div class="box-body text-center">							
                          <img src="../images/trophy.png" class="mt-50" alt="" />
                          <div class="max-w-500 mx-auto">
                              <h2 class="text-white mb-20 font-weight-500">Best Employee Johen,</h2>
                              <p class="text-white-50 mb-10 font-size-20">You've got 50.5% more sales today. You've reached 8th milestone, checkout author section</p>
                          </div>
                      </div>
                  </div>
                  <div class="row">						
                      <div class="col-lg-6 col-12">
                          <div class="box overflow-hidden">
                              <div class="box-body pb-0">	
                                  <div>
                                      <h2 class="text-white mb-0 font-weight-500">18.8k</h2>
                                      <p class="text-mute mb-0 font-size-20">Total users</p>
                                  </div>
                              </div>
                              <div class="box-body p-0">
                                  <div id="revenue1"></div>
                              </div>
                          </div>
                      </div> --}}
                      {{-- <div class="col-lg-6 col-12">
                          <div class="box overflow-hidden">
                              <div class="box-body pb-0">	
                                  <div>
                                      <h2 class="text-white mb-0 font-weight-500">35.8k</h2>
                                      <p class="text-mute mb-0 font-size-20">Average reach per post</p>
                                  </div>
                              </div>
                              <div class="box-body p-0">
                                  <div id="revenue2"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> --}}
              {{-- <div class="col-xxxl-5 col-xl-6 col-12">
                  <div class="box overflow-hidden">
                      <div class="box-body p-0">
                          <div class="row no-gutters">
                              <div class="col-md-6 col-12">
                                  <div class="box no-shadow mb-0 rounded-0">
                                      <div class="box-header no-border">
                                          <h4 class="box-title mb-0">
                                              Last Posts
                                          </h4>
                                      </div>
                                      <div class="box-body p-0">
                                          <div class="media-list media-list-hover">
                                          <a class="media media-single hover-white" href="#">
                                            <div class="media-body">
                                              <h5>Meet Craftwork. Thoroghly Handpicked UI Freebies</h5>
                                            </div>
                                          </a>
                                          <a class="media media-single hover-white" href="#">
                                            <div class="media-body">
                                              <h5>Cook Design Right!</h5>
                                            </div>
                                          </a>
                                          <a class="media media-single hover-white" href="#">
                                            <div class="media-body">
                                              <h5>5 Reasons to Start Own Bussines</h5>
                                            </div>
                                          </a>
                                          <a class="media media-single hover-white" href="#">
                                            <div class="media-body">
                                              <h5>How to Make Interface</h5>
                                            </div>
                                          </a>
                                          <a class="media media-single hover-white" href="#">
                                            <div class="media-body">
                                              <h5>Show Me Your Design</h5>
                                            </div>
                                          </a>
                                          <a class="media media-single hover-white" href="#">
                                            <div class="media-body">
                                              <h5>She gave my mother such a turn, that I have always bee...</h5>
                                            </div>
                                          </a>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6 col-12">
                                  <div class="box no-shadow mb-0 bg-img rounded-0" data-overlay="5" style="background-image: url(../images/gallery/landscape7.jpg)">
                                      <div class="box-header no-border">
                                          <h4 class="box-title mb-0">
                                              <span class="avatar avatar-lg bg-success">DK</span>
                                          </h4>
                                          <ul class="box-controls">
                                              <li><a href="javascript:void(0)"><i class="ti-reload text-white"></i></a></li>
                                          </ul>
                                      </div>
                                      <div class="box-body">
                                          <div class="text-right mt-100 pt-20">
                                              <h3 class="text-white"><small class="mr-10"><i class="fa fa-commenting"></i></small> 3</h3>
                                              <h2 class="text-white"><small class="mr-10"><i class="fa fa-heart"></i></small> 23</h2>
                                              <h1 class="text-white"><small class="mr-10"><i class="fa fa-eye"></i></small> 189</h1>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> --}}
              {{-- <div class="col-xxxl-7 col-xl-6 col-12">
                  <div class="box">
                      <div class="box-header">
                          <h4 class="box-title">Recent Stats</h4>
                      </div>
                      <div class="box-body">
                          <div id="recent_trend"></div>
                      </div>
                  </div>
              </div> --}}
              <div class="col-12">
                  <div class="box">
                      <div class="box-header">
                          <h4 class="box-title align-items-start flex-column">
                              Recent Bookings
                              {{-- <small class="subtitle">More than 400+ new members</small> --}}
                          </h4>
                      </div>
                      <div class="box-body">
                          <div class="table-responsive">
                              {{-- <table class="table no-border">
                                  <thead>
                                      <tr class="text-uppercase bg-lightest">
                                          <th style="min-width: 250px"><span class="text-white">Title</span></th>
                                          <th style="min-width: 100px"><span class="text-fade">Category</span></th>
                                          <th style="min-width: 100px"><span class="text-fade">Author</span></th>
                                          <th style="min-width: 150px"><span class="text-fade">publised Date</span></th>
                                         
                                          <th style="min-width: 120px"></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @forelse ($top_posts as $newpost )
                                    <tr>	
                                        <td>
                                            <span class="text-fade font-weight-600 d-block font-size-16">
                                                {{ $newpost->title }}
                                            </span>
                                        </td>									
                                          
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                {{ $newpost->category->name }}
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                {{ $newpost->user->name }}
                                              </span>
                                              
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                {{ 
                                                    date('d-m-Y',strtotime($newpost->created_at))
                                                  }}
                                              </span>
                                             
                                          </td>
                                          
                                         
                                      </tr>
                                    @empty
                                        
                                    @endforelse
                                     
                                      
                                  </tbody>
                              </table> --}}
                          </div>
                      </div>
                  </div>  
              </div>
          </div>
      </section>
      <!-- /.content -->
    </div>
</div>

@endsection