@extends('admin_layouts.app')
@section('title','Admin Dashboard')
    
@section('content')
@include('admin_layouts.partials.navbar')
    <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar main-content-01" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <div class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
         
        </ul>
      </div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">


  <!-- Sales stats -->
  <div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="mt-1">
                                <h3>Invoices</h3>
                            </div>
                            <div class="mt-1">
                                <div class="table-responsive">
                                  <table class="table dataex-key-basic dataTable no-footer" style="position: relative;">
                                    <thead>
                                        <tr>

                                            <th>ID</th>
                                            <th>Invoices</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                            <th>Action</th></tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($invoices as $item)
                                          <tr>
                                            <td class="sorting_1">{{$item->id}}</td>
                                            <td class="sorting_1">{{$item->name}}</td>
                                            <td>{{date('m-d-Y',strtotime($item->created_at))}}</td>
                                            @php
                                                $check_hour=date('H',strtotime($item->created_at));
                                            @endphp
                                            @if ($check_hour>=12)
                                                 <td>{{date('h:m',strtotime($item->created_at))}} PM</td>
                                            @else
                                                <td>{{date('h:m',strtotime($item->created_at))}} AM</td>
                                            @endif
                                            
                                            <td>{{$item->status}}</td>
                                            <td>{{$item->amount}}</td>
                                            <td>
                                              @if ($item->status=='Approved')
                                               <button disabled class=" btn btn-warning" style="padding: 3px 5px;">Approved</button>
                                                  
                                              @else
                                                <button data-id="{{$item->id}}" class="app_button btn btn-success" style="padding: 3px 5px;">Approve</button> 
                                              @endif
                                              @if ($item->status=='Declined')
                                               <button disabled  style="padding: 3px 5px;" class="btn btn-warning">Declined</button>
                                                  
                                              @else
                                                <button  data-bs-toggle="modal" data-bs-target="#exampleModal02" style="padding: 3px 5px;" data-id="{{$item->id}}" class="btn btn-danger decBtn">Decline</button>
                                              @endif

                                             
                                          </td>
                                        </tr>
                                      @endforeach
                                          
                                    </tbody>
                                    <tfoot>
                                    </tfoot>					
                                </table>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  {{-- <div class="row mt-2">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mt-1">
                                <h3>Orders</h3>
                            </div>
                            <div class="mt-1">
                              <div class="table-responsive">
                                <table class="table dataex-key-basic dataTable no-footer" style="position: relative;">
                                  <thead>
                                      <tr>

                                          <th>ID</th>
                                          <th>Orders</th>
                                          <th>Date</th>
                                          <th>Time</th>
                                          <th>Description</th>
                                          <th>Action</th></tr>
                                  </thead>
                                  <tbody>
                                      
                                      
                                      
                                  <tr>
                                          <td class="sorting_1">92001</td>
                                          <td class="sorting_1">Order 1</td>
                                          <td>01/4/2022 </td>
                                          <td>6pm</td>
                                          <td>In Review</td>
                                          <td>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal03" class="btn btn-success" style="padding: 3px 5px;">Approve</button>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal02" class="btn btn-danger " style="padding: 3px 5px;">Deny</button>
                                        </td>
                                      </tr>
                                  <tr>
                                          <td class="sorting_1">92002</td>
                                          <td class="sorting_1">Order 2</td>
                                          <td>02/4/2022 </td>
                                          <td>9pm</td>
                                          <td>In Review</td>
                                          <td>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal03" class="btn btn-success" style="padding: 3px 5px;">Approve</button>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal02" class="btn btn-danger " style="padding: 3px 5px;">Deny</button>
                                        </td>
                                      </tr>
                                  <tr>
                                          <td class="sorting_1">92003</td>
                                          <td class="sorting_1">Order 3</td>
                                          <td>12/4/2022 </td>
                                          <td>5pm</td>
                                          <td>In Review</td>
                                          <td>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal03" class="btn btn-success" style="padding: 3px 5px;">Approve</button>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal02" class="btn btn-danger " style="padding: 3px 5px;">Deny</button>
                                        </td>
                                      </tr>
                                  <tr>
                                          <td class="sorting_1">92004</td>
                                          <td class="sorting_1">Order 4</td>
                                          <td>13/4/2022 </td>
                                          <td>4pm</td>
                                          <td>In Review</td>
                                          <td>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal03" class="btn btn-success" style="padding: 3px 5px;">Approve</button>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal02" class="btn btn-danger " style="padding: 3px 5px;">Deny</button>
                                        </td>
                                      </tr>
                                  <tr>
                                          <td class="sorting_1">92005</td>
                                          <td class="sorting_1">Order 5</td>
                                          <td>17/4/2022 </td>
                                          <td>2pm</td>
                                          <td>In Review</td>
                                          <td>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal03" class="btn btn-success" style="padding: 3px 5px;">Approve</button>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal02" class="btn btn-danger " style="padding: 3px 5px;">Deny</button>
                                        </td>
                                      </tr>
                                  </tbody>
                                  <tfoot>
                                  </tfoot>					
                              </table>
                              </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
  <div class="row mt-2">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="mt-1">
                                <h3>Reports</h3>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
         <div class="">
            <h3 class="modal-title justify-content-center" id="exampleModalLabel">Do You Want to Deny?</h3>
         </div>
          <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    
                          <form action="/invoice/decline/{{$item->id}}" method="POST">
                            @csrf
                            <input type="hidden" name="invoice_id" id="invoice_id">
                            <div class="form-group row">
                              <div class="mt-1 d-flex justify-content-center">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>&nbsp;&nbsp;
                                <button type="submit" class="btn btn-primary">Yes</button>
                              </div>
                            </div>
                          </form>
                       
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
          <button type="button" class="btn btn-primary">Yes</button> -->
        </div>
      </div>
    </div>
  </div>


    {{-- <div class="modal fade" id="exampleModal03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
           <div class="">
              <h5 class="modal-title justify-content-center" id="exampleModalLabel">Orders</h5>
           </div>
            <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
          </div>
          <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-9 mx-auto">
                        <form>
                              <div class="form-group row">
                                <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">ID</label>
                                <div class="col-md-9">
                                    <div class="position-relative">
                                      <input type="text" id="timesheetinput3" class="form-control" name="date">
                                      
                                    </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Orders</label>
                                <div class="col-md-9">
                                    <div class="position-relative">
                                      <input type="text" id="timesheetinput3" class="form-control" name="date">
                                      
                                    </div>
                                </div>
                              </div>
  
                              <div class="form-group row">
                                <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Date </label>
                                <div class="col-md-9">
                                    <div class="position-relative">
                                      <input type="date" id="timesheetinput3" class="form-control" name="date">
                                      
                                    </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Time</label>
                                <div class="col-md-9">
                                    <div class="position-relative">
                                      <input type="time" id="timesheetinput3" class="form-control" name="date">
                                      
                                    </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Description </label>
                                <div class="col-md-9">
                                    <div class="position-relative">
                                      <input type="text" id="timesheetinput3" class="form-control" name="date">
                                      
                                    </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="mt-1">
                                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                          </form>
                    </div>
                </div>
                </div>
              </div>
         </div>
        </div>
      </div>
    </div> --}}
    <div class="modal fade" id="exampleModal01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
           <div class="">
              <h5 class="modal-title justify-content-center" id="exampleModalLabel">Invoices</h5>
           </div>
            <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
          </div>
          <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-9 mx-auto">
                        <form>
                              <div class="form-group row">
                                <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">ID</label>
                                <div class="col-md-9">
                                    <div class="position-relative">
                                      <input type="text" id="timesheetinput3" class="form-control" name="date">
                                      
                                    </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Invoices</label>
                                <div class="col-md-9">
                                    <div class="position-relative">
                                      <input type="text" id="timesheetinput3" class="form-control" name="date">
                                      
                                    </div>
                                </div>
                              </div>
  
                              <div class="form-group row">
                                <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Date </label>
                                <div class="col-md-9">
                                    <div class="position-relative">
                                      <input type="date" id="timesheetinput3" class="form-control" name="date">
                                      
                                    </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Time</label>
                                <div class="col-md-9">
                                    <div class="position-relative">
                                      <input type="time" id="timesheetinput3" class="form-control" name="date">
                                      
                                    </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Description </label>
                                <div class="col-md-9">
                                    <div class="position-relative">
                                      <input type="text" id="timesheetinput3" class="form-control" name="date">
                                      
                                    </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="mt-1">
                                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                          </form>
                    </div>
                </div>
                </div>
              </div>
         </div>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function(){
      $('.app_button').click(function()
        {
            var id = $(this).data('id');
            //alert(id);
            $.ajax({
                type:'POST',
                url:'/invoice/approve/'+id,
                data:{
                    "_token": "{{ csrf_token() }}",
                    "_method": "PUT"
                },
                success:function(data){
                    $('.app_button').hide();
                    location.reload();
                }
            });
        });
         $('.decBtn').click(function(){
           var id=$(this).attr('data-id');
               $('#invoice_id').val(id);
           
        });
      });
    </script>
@endsection

    <!-- <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
    </footer> -->

    