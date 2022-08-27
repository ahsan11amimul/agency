@extends('user_layouts.app')
@section('title', 'New Opportunity')
@section('content')
  <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar main-content-01" data-open="click" data-menu="vertical-menu" data-col="2-columns">

  
   
    <!-- fixed-top-->
@include('user_layouts.partials.navbar')
   

   


    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">

         <div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mt-1">
                                <div class="row">
                                    <div class="col-md-8">
                                      <form action="/job_apply" method="POST">
                                        @csrf
                                        <input type="hidden" name="job_id" value="{{$job->id}}">
                                       <div class="mt-2 d-flex flex-wrap">
                                        <label class="col-md-4">Not to exceed Amount (NTE):</label>
                                        <input class="col-md-6 form-control" type="text" name="nte" placeholder="$0.00">
                                       </div>
                                       <div class="mt-2 d-flex flex-wrap">
                                        <label class="col-md-4">Scope of Work</label>
                                        <label class="col-md-6">{{$job->service->description??''}}</label>
                                        
                                       </div>
                                       <div class="mt-2 d-flex flex-wrap">
                                        <label class="col-md-4">Rate Details:</label>
                                        <label class="col-md-6">{{$job->service->rate??'Hourly Tip'}}</label>
                                        
                                       </div>
                                       <div class="mt-2 d-flex flex-wrap">
                                        <label class="col-md-4">Proposed Resolution:</label>
                                       <textarea name="resolution" class="col-md-6" id="" style="width: 100%;" rows="6"></textarea>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <div class="table">
                                    <table>
                                        <tr>
                                            <th>Type</th>
                                            <th>Link Description</th>
                                            <th>Quantity</th>
                                            <th>Unit Cost</th>
                                            <th>Total</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div style="position: relative;padding: 0;">
                                                    {{-- <i style="position: absolute;top: 10px;right: 10px;" class="fa fa-angle-down"></i>
                                                   <select style="padding-right: 40px;" name="" class="form-control" id="">
                                                       <option value="">Material</option>
                                                   </select> --}}
                                                   <input type="text" class="form-control" name="name" value="{{$job->service->name??''}}" id="">
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="description" value="{{$job->service->description??''}}" placeholder="Link Description">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="quantity" name="quantity" value="{{$job->service->quantity}}" placeholder="0.00">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="cost" name="cost" value="{{$job->service->cost}}" placeholder="$100.00">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="total" name="total" value="" placeholder="$0.00">
                                            </td>
                                        </tr>
                                        {{-- <tr>
                                            <td>
                                                <div style="position: relative;padding: 0;">
                                                    <i style="position: absolute;top: 10px;right: 10px;" class="fa fa-angle-down"></i>
                                                   <select style="padding-right: 40px;" name="" class="form-control" id="">
                                                       <option value="">Material</option>
                                                   </select>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="Link Description">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="0.00">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$100.00">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$0.00">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div style="position: relative;padding: 0;">
                                                    <i style="position: absolute;top: 10px;right: 10px;" class="fa fa-angle-down"></i>
                                                   <select style="padding-right: 40px;" name="" class="form-control" id="">
                                                       <option value="">Labor</option>
                                                   </select>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="Link Description">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="10.00">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$100.00">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$500.00">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div style="position: relative;padding: 0;">
                                                    <i style="position: absolute;top: 10px;right: 10px;" class="fa fa-angle-down"></i>
                                                   <select style="padding-right: 40px;" name="" class="form-control" id="">
                                                       <option value="">Trip Charge</option>
                                                   </select>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="Link Description">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="0.00">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$100.00">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$0.00">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div style="position: relative;padding: 0;">
                                                    <i style="position: absolute;top: 10px;right: 10px;" class="fa fa-angle-down"></i>
                                                   <select style="padding-right: 40px;" name="" class="form-control" id="">
                                                       <option value="">Labor</option>
                                                       <option value="">Material</option>
                                                       <option value="">Trip Charge</option>
                                                   </select>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="Link Description">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="0.00">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$100.00">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$0.00">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div style="position: relative;padding: 0;">
                                                    <i style="position: absolute;top: 10px;right: 10px;" class="fa fa-angle-down"></i>
                                                   <select style="padding-right: 40px;" name="" class="form-control" id="">
                                                       <option value=""></option>
                                                   </select>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="Link Description">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="0.00">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$100.00">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$0.00">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div style="position: relative;padding: 0;">
                                                    <i style="position: absolute;top: 10px;right: 10px;" class="fa fa-angle-down"></i>
                                                   <select style="padding-right: 40px;" name="" class="form-control" id="">
                                                       <option value=""></option>
                                                   </select>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="Link Description">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="0.00">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$100.00">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$0.00">
                                            </td>
                                        </tr> --}}
                                        <tr>
                                            {{-- <td> <a href="" class="btn"><i style="background-color: #203468;color: #fff;border-radius: 25px;padding: 5px 2px 5px 8px;" class="fa fa-plus">&nbsp; </i> Add a line item </a></td> --}}
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Total:</td>
                                        <td id="final_total">$5000.00</td>
                                        </tr>

                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <p>This rate is for 1 regular technicion and 0 helper technicians. Any additional technicians must be approved.</p>
                    </div>
                    <div class="mt-1">
                        <input type="checkbox" name="agree" value="yes"> <label>I agree that above pricing is final, and any work of expenditure beyond the amount shown is not authorized.</l>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mt-2">
                                <label style="font-weight: bold;">Address:</label><br>
                                <p>{{$job->service->service_area->address}} <br>{{$job->service->service_area->distance}}</p>
                               </div>
                            <div class="mt-2">
                                <label style="font-weight: bold;">Job Requirements:</label><br>
                                <input type="checkbox" name="requirements" value="yes"> <label>My Company can meet all of the stated requirements.</l>  
                            </div>
                            <div class="mt-2">
                                <label style="font-weight: bold;">Provider with COVID-19 and/or exposure:</label><br>
                                <input type="checkbox" name="covid" value="yes"> <label>Attention DMG Provider Network, please do not accept work if you are showing the following symptoms of COVID-19 or believe you were previously exposed to someone with laboratory-confirmed testing of COVID-19. Please restrict activities outside of your home, except for seeking medical care if either of these scenarios applies to you.</label><br>
                                <p>Symptoms:</p>
                                <ul>
                                    <li>Fever </li>
                                    <li>Cough</li>
                                    <li>Shortness of breath </li>
                                </ul>  
                                <p>If you develop emergency warning signs for COVID-19, please seek medical attention immediately.</p><br>
                                <p>Emergency warning signs include: </p>
                                <ul>
                                    <li>Difficulty breathing or shortness of breath </li>
                                    <li>Persistent pain or pressure in the chest </li>
                                    <li>New confusion or inability to arouse</li>
                                    <li>Bluish lips or face</li>
                                </ul>
                                <p>*This list is not all-inclusive. Please consult your medical provider for any other symptoms that are severe or concerning. </p>
                                <p>If you suspect you are showing COVID-19 symptoms or were previously exposed to someone who tested positive for the virus, it is highly critical that the DMG Provider avoids work and people as much as possible. It is also crucial that you monitor your health for 14 days and stay away from others if you get sick.</p>
                            </div>
                            <div class="mt-1">
                                <input type="checkbox" name="understand" value="yes"> <label>I understand the above recommendations and the person that will perform this job is not currently ill and has not been exposed to someone with COVID-19</label>
                            </div>
                            <div class="mt-2">
                                <label style="font-weight: bold;">CDC Food Safety Requirements:</label><br>
                              <p>For work orders that deal with retail food service establishments during the COVID-19 outbreak, DMG's ongoing goal remains prevention and emphasizing Provider health and good hygiene and sanitation practices</p>
                              <p>It is important to expand your current retail food service safety practices to reduce the spread of the virus. Please do not arrive onsite in food establishments while sick along with taking the following preventative measures:</p>
                              <ul>
                                  <li>Increase hand hygiene</li>
                                  <li>Clean and sanitize and only use sanitizers registered with EPA as a sanitizer</li>
                                  <li>Talk with your workers about employee health requirements and expectations</li>
                              </ul>
                            </div>
                            <div class="mt-1">
                                <input type="checkbox" name="food" value="yes"> <label> I understand the food safety requirements and will follow them if dealing with any retail food services</label>
                            </div>
                            <div class="mt-2">
                                <label style="font-weight: bold;">Photos</label><br>
                                <a href="/services/{{$job->service_id}}">View Photos</a>
                            </div>
                            <div class="mt-3 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Apply</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal01" data-id="{{$job->id}}" class="btn btn-danger jobBtn">Decline</button>
                            </div>
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
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
    </footer> -->
  <div class="modal fade" id="exampleModal01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
         <div class="">
            <h3 class="modal-title justify-content-center" id="exampleModalLabel">Do You Really Want to Decline?</h3>
         </div>
          <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{url('/job_decline')}}" method="POST">
                      @csrf
                      <input type="hidden" name="job_id" id="job_id">
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
        
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function(){
        var quantity=$('#quantity').val();
        var cost=$('#cost').val();
        var total=quantity*cost;
        $('#total').val(total);
        $('#final_total').text('$'+total);

        $('.jobBtn').click(function(){
           var id=$(this).attr('data-id');
               $('#job_id').val(id);
           
        });
    });
  
  </script>

@endsection