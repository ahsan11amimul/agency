@extends('user_layouts.app')
@section('title', 'Company Profile')
@section('content')
  <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar main-content-01" data-open="click" data-menu="vertical-menu" data-col="2-columns">

  
   
    <!-- fixed-top-->
  @include('user_layouts.partials.navbar')
    


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
                        <div class="d-flex justify-content-end">
                            <div class="mt-1">
                                <select name="" class="form-select" id="">
                                    <option value="">Your Services</option>
                                  @foreach (App\Models\UserService::where('user_id',auth()->user()->id)->get() as $item)
                                    @php
                                        $service=App\Models\Service::where('id',$item->service_id)->first();
                                        $serviceName=$service?$service->name:'';
                                    @endphp
                                   <option value="">{{$serviceName}}</option>
                                  @endforeach
                                   
                                        
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Contractor Payment Preference</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Company Dispatch Information</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Insurance Certificate</button>
                            </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                              <div class="row">
                                <div class="col-md-8">
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="mt-1">
                                            <h1 style="font-weight: bold;">Account Information</h1>
                                        </div>
                                        {{-- Form start --}}
                                    <form action="{{url('account_informations')}}" method="POST">
                                      @csrf
                                        <div class="mt-3">
                                            <h2>Select Your Payment Preference</h2>
                                        </div>
                                        <div class="mt-3">
                                            <input type="radio" name="payment_preference" value="I Would like to receive paper checks through the emails."> &nbsp;&nbsp;
                                            <label>I Would like to receive paper checks through the emails.</label>
                                           
                                        </div>
                                        <div class="mt-1">
                                            <input type="radio" name="payment_preference" value="I Would like payment directly deposited into my bank account."> &nbsp;&nbsp;
                                            <label>I Would like payment directly deposited into my bank account.</label>
                                           @error('payment_preference')
                                               <p style="color:red;padding:10px;">**{{$message}}**</p> 
                                            @enderror
                                        </div>
                                        <div class="mt-1">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    
                                                        <div class="mt-2 d-flex flex-wrap">
                                                            <label class="col-md-4"><span style="color: red;">*</span> Account Type</label>
                                                            <div class="col-md-6">
                                                                <input type="radio" name="account_type" value="Savings"> &nbsp;&nbsp;
                                                                <label>Savings</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <input type="radio" name="account_type" value="Checking"> &nbsp;&nbsp;
                                                                <label>Checking</label>
                                                               </div>
                                                            @error('account_type')
                                                               <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                            @enderror
                                                           </div>
                                                        <div class="mt-2 d-flex flex-wrap">
                                                            <label class="col-md-4"><span style="color: red;">*</span> Bank Name</label>
                                                            <input class="col-md-6 form-control" value="{{old('bank_name')}}" name="bank_name" type="text" placeholder="Navy Federal Credit Union">
                                                            @error('bank_name')
                                                               <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                            @enderror
                                                           </div>
                                                        <div class="mt-2 d-flex flex-wrap">
                                                            <label class="col-md-4"><span style="color: red;">*</span> Bank Routing Number</label>
                                                            <input class="col-md-6 form-control" name="bank_routing_number" value="{{old('bank_routing_number')}}" type="text" placeholder="2945678454">
                                                             @error('bank_routing_number')
                                                               <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                            @enderror
                                                           </div>
                                                        <div class="mt-2 d-flex flex-wrap">
                                                            <label class="col-md-4"><span style="color: red;">*</span> Bank Account Number</label>
                                                            <input class="col-md-6 form-control" name="bank_account_number" value="{{old('bank_account_number')}}" type="text" placeholder="XXXXXXXXX676">
                                                            @error('bank_account_number')
                                                               <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                            @enderror
                                                           </div>
                                                
                                                    
                                                </div>
                                                <div class="col-md-4">
                                                   
            
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                           <div class="row">
                                               <div class="col-md-9">
                                                   <div class="row">
                                                    <div class="mt-1">
                                                        <label for="">Example</label>
                                                    </div>
                                                    <div class="d-flex justify-content-start mt-1">
                                                      &nbsp;&nbsp;&nbsp;&nbsp;<span class="writing-3">Bank Name And Address</span>
                                                 </div>
                                                       <div class="mx-auto col-md-8 pa-10">
                                                           <div class="mt-1" style="border: 2px solid black;padding: 0 10px;">
                                                            <div class="row check_1">
                                                                <div class="col-md-12">
                                                                    <div class="d-flex justify-content-between mt-0">
                                                                        <div class="mt-0">
                                                                            <label for="">My Name</label><br>
                                                                            <label for="">My Address</label><br>
                                                                            <label for="">My City, State & Zip</label><br>
                                                                        </div>
                                                                        <div class="mt-0 d-flex justify-content-end">
                                                                            <p style="text-align: right;">101</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <br> -->
                                                                    <div class="mt-0">
                                                                        <label for="">Pay to the</label><br>
                                                                        <label for="">Order of</label> &nbsp; <hr style="width: 45%;display: inline-block;margin: 1px;"> &nbsp; <label for="">&</label> &nbsp;  <hr style="width: 5%;display: inline-block;margin: 1px;">  .  <hr style="width: 10%;display: inline-block;margin: 1px;"><br>
                                                                        <hr style="width: 80%;display: inline-block;margin: 1px;">&nbsp; <label for="">Dollars</label>
                                                                    </div>
                                                                    <div class="mt-0">
                                                                        <label for="" title="Bank Name">The Bank Name</label><br>
                                                                        <label for="" title="Bank Address">The Bank Address</label><br>
                                                                    </div>
                                                                    <div class="d-flex justify-content-evenly mt-0">
                                                                        <label for="" title="9 digit Bank Routing Number">123456789</label>
                                                                        <label for="" title="Bank Account Number">123456789</label>
                                                                        <label for="">101</label>
                                                                    </div>
                                                                </div>
                                                              
                                                            </div>
                                                           </div>
                                                           <div class="d-flex justify-content-start mt-1" style="position: relative;">
                                                             <span class="writing-1">9 digit Bank Routing Number</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                             <span class="writing-2">Bank Account Number</span>
                                                             <label for=""></label>
                                                        </div>
                                                           <div class="mt-3 d-flex justify-content-end">
                                                            <a data-bs-toggle="modal" data-bs-target="#exampleModal02" class="btn btn-primary">Edit ACH Information</a>
                                                        </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="mt-1">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="mt-1">
                                                    <h2 style="font-weight: bold;">Accounts:</h2><br>
                                                    <p>Use the following fields to view the information for the accounts you manage.<br>
                                                        Payee : <span style="color: orangered;">DYNAMIC PROPERTY PROS</span> &nbsp;&nbsp;&nbsp;&nbsp; Amazon Business :  <span style="color: orangered;">Amazon Payments</span> &nbsp;&nbsp;&nbsp;&nbsp;  Payment Type : <span style="color: orangered;">Services</span> &nbsp;&nbsp;&nbsp;&nbsp;<br>
                                                        Country/Region : <span style="color: orangered;">United States</span> &nbsp;&nbsp;&nbsp;&nbsp;</p>
                                                </div>
                                                <div class="mt-1">
                                                    <label style="font-weight: bold;">Account Details:</label>&nbsp;&nbsp;&nbsp;&nbsp; <a style="color: #369bbd;">View Update History</a>
                                                 </div>
                                                <div class="mt-1">
                                                    <label style="font-weight: bold;">Payee Name:</label>&nbsp;&nbsp;&nbsp;&nbsp; <a>DYNAMIC PROPERTY PROS</a><br>
                                                    <a style="color: #369bbd;">(What's this?)</a>
                                                 </div>
                                                 <div class="mt-2">
                                                    <h3 style="font-weight: bold;">Contact and Payment Information:</h3><br>
                                                   <p>Additional contact and payment information may be added to this account by clicking the 'Add new contact and payment
                                                    information' button below. <a style="color: #369bbd;">(Need help?)</a></p>
                                                </div>
                                                 <div class="mt-2">
                                                    <h4 style="font-weight: bold;"> <a style="color: #369bbd;">Dynamic Property <br>(CARD PAYMENTS)</a> &nbsp;&nbsp;&nbsp;&nbsp;</h4><br>
                                                 </div>
                                            </div>
                                            <div class="col-md-4">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mx-auto">
                                                <div class="mt-2">
                                                    <h3>Contact Information:</h3>
                                                </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-4">Address Nickname<br> <a style="color: #369bbd;">(What's this?)</a></label>
                                                   <input class="col-md-6 form-control" value="{{old('address_nickname')}}" name="address_nickname" type="text" placeholder="Dynamic Property Pro">
                                                    @error('address_nickname')
                                                               <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                    @enderror
                                                  </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-4">Name</label>
                                                   <input class="col-md-6 form-control" name="name" value="{{old('name')}}" type="text" placeholder="Christopher Rosales">
                                                   @error('name')
                                                               <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                    @enderror
                                                  </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-4">Address Line 1</label>
                                                   <input class="col-md-6 form-control" name="address_line_1" value="{{old('address_line_1')}}" type="text" placeholder="712 H ST NE">
                                                   @error('address_line_1')
                                                      <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                    @enderror
                                                  </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-4">Address Line 2 (optional)</label>
                                                   <input class="col-md-6 form-control" name="address_line_2"value="{{old('address_line_2')}}" type="text" placeholder="1296">
                                                 @error('address_line_2')
                                                      <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                 @enderror
                                                </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-4">City</label>
                                                   <input class="col-md-6 form-control" name="city" value="{{old('city')}}" type="text" placeholder="WASHINGTON">
                                                 @error('city')
                                                      <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                  @enderror
                                                </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-4">State/Province/Region</label>
                                                   <input class="col-md-6 form-control" name="state"value="{{old('state')}}" type="text" placeholder="DC">
                                                    @error('state')
                                                      <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                    @enderror
                                                  </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-4">Zip/Postal Code</label>
                                                   <input class="col-md-6 form-control" name="zip_code" value="{{old('zip_code')}}" type="text" placeholder="20002-3627">
                                                    @error('zip_code')
                                                      <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                    @enderror
                                                  </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-4">Country/Region</label>
                                                   <input class="col-md-6 form-control" name="country" value="{{old('country')}}" type="text" placeholder="United States">
                                                    @error('country')
                                                      <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                    @enderror
                                                  </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-4">Phone</label>
                                                   <input class="col-md-6 form-control" name="phone" value="{{old('phone')}}" type="text" placeholder="1- 000000000000">
                                                    @error('phone')
                                                      <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                    @enderror
                                                  </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-4">Contact Email Address(es)</label>
                                                   <input class="col-md-6 form-control" name="contact_email" value="{{old('contact_email')}}" type="text" placeholder="c000000000000000000000000000os.net">
                                                    @error('contact_email')
                                                      <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                    @enderror
                                                  </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-4">Purchase Order (PO) Email
                                                    Address(es)</label>
                                                   <input class="col-md-6 form-control" name="po_email" value="{{old('po_email')}}" type="text" placeholder="c0000000000000000">
                                                    @error('po_email')
                                                      <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                    @enderror
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6 mx-auto">
                                                <div class="mt-2">
                                                    <h3>Payment Information:</h3>
                                                </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-4">Pay Term<br> <a style="color: #369bbd;" href="https://quickbooks.intuit.com/r/bookkeeping/choosing-and-defining-invoice-payment-terms/" target="_blank">(What's this?)</a></label>
                                                   <!-- <input class="col-md-6 form-control" type="text" placeholder="30 NET"> -->
                                                   <select class="col-md-6" name="pay_term" value="{{old('pay_term')}}"id="pay_term" style="padding: 3px 70px 5px 3px; ">
                                                     <option value="NET 30-0% discount">NET 30-0% discount</option>
                                                     <option value="NET 60-0% discount">NET 60-0% discount</option>
                                                     <option value="NET 90-0% discount">NET 90-0% discount</option>
                                                   </select>
                                                    @error('pay_term')
                                                               <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                    @enderror
                                                  </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-4">Account Nickname<br> <a style="color: #369bbd;" href="https://www.becu.org/support/nickname-accounts" target="_blank">(What's this?)</a></label>
                                                   <input class="col-md-6 form-control" value="{{old('account_nickname')}}" name="account_nickname" type="text" placeholder="CARD PAYMENTS">
                                                    @error('account_nickname')
                                                               <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                    @enderror
                                                  </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-4">Bank Location</label>
                                                   <input class="col-md-6 form-control" name="bank_location" value="{{old('bank_location')}}" type="text" placeholder="United States">
                                                    @error('bank_location')
                                                               <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                    @enderror
                                                  </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-4">Preferred Currency</label>
                                                   <input class="col-md-6 form-control" name="preferred_currency" value="{{old('preferred_currency')}}" type="text" placeholder="USD">
                                                    @error('preferred_currency')
                                                        <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                    @enderror
                                                </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-4">Payment Method</label>
                                                   <!-- <input class="col-md-6 form-control" type="text" placeholder=""> -->
                                                   <select class="col-md-6" name="payment_method" value="{{old('payment_method')}}" id="" style="padding: 8px 10px;">
                                                    <option value="Credit Card">Credit Card</option>
                                                    <option value="EFT">EFT</option>
                                                    <option value="Paper Check">Paper Check</option>
                                                  </select>
                                                    @error('payment_method')
                                                               <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                    @enderror
                                                  </div>
                                                  <div class="mt-2 d-flex flex-wrap">
                                                    <label class="col-md-4">Remittance Email<br> <a style="color: #369bbd;" href="https://www.freshbooks.com/en-gb/hub/other/remittance-address" target="_blank">(What's this?)</a></label>
                                                    <input class="col-md-6 form-control" value="{{old('remittance_email')}}" name="remittance_email" type="text" placeholder="00000000000">
                                                      @error('remittance_email')
                                                                <p style="color:red;padding:10px;">**{{$message}}**</p>
                                                      @enderror
                                                   </div>
                                       
                                                   <div class="mt-3 d-flex justify-content-center">
                                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal03" type="button" class="btn btn-primary">Edit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal04" type="button" class="btn">Remove</button>
                                                </div>
                                                <div class="mt-1">
                                                    <p>This payee address cannot be removed as there may be pending payments associated with this
                                                        address.  <a style="color: #369bbd;">Know More</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary">Add New Contact and Payment Information</button>
                                        </div>
                                       </form>
                                        <div class="mt-3">
                                            <h2 style="font-weight: bold;">Tax Information:</h2><br>
                                            <label style="font-weight: bold;">Tax Interview Complete:</label><br>
                                            <p>Your tax information has been validated successfully. No further action is required at this time.</p>
                                            <a href="" class="btn btn-primary">View / Update Tax Information</a>
                                          </div>
                                          <div class="mt-2 d-flex">
                                            <label class="col-md-4">Tax Identifier<br> <a style="color: #369bbd;" href="https://www.irs.gov/individuals/international-taxpayers/taxpayer-identification-numbers-tin" target="_blank">(What's this?)</a></label>
                                            {{-- <a href="" style="" class="btn btn-primary">Edit</a> --}}
                                        </div>
                                        <div class="mt-3">
                                            <label style="color: #203468;font-size: 25px;font-weight: bold;">Additional payee information (optional)</label>
                                            <a href="" style="" class="btn btn-primary">Edit</a>
                                            <a href="" style="" class="btn btn-primary">Delete</a><br>
                                         </div>
                                        <div class="mt-3">
                                            <h4 style="font-weight: bold;">Supplier diversity information</h4><br>
                                            <p>If you are a payee located in the U.S., please consider providing the optional Supplier Diversity details below.</p>
                                           </div>
                                           <div class="row mt-2">
                                            <div class="col-md-6 mx-auto">
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-8" style="font-weight: bold;">Is your company classified as small or diverse?</label>
                                                   <label class="col-md-3">Yes</label>
                                                  </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-8" style="font-weight: bold;">Does your company track supplier diversity spend?</label>
                                                   <label class="col-md-3">Yes</label>
                                                  </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-8" style="font-weight: bold;">Business ownership classification</label>
                                                   <label class="col-md-3">Minority owned
                                                    Small business
                                                    </label>
                                                  </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                   <label class="col-md-8" style="font-weight: bold;">Primary NAICS Code<br> <a style="color: #369bbd;" href="https://www.naics.com/search/" target="_blank">(What's this?)</a></label>
                                                   <label class="col-md-3">561210</label>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5 mb-5">
                                        <div class="col-md-12">
                                            <div class="mt-1">
                                                <label style="font-weight: bold;" for="">Certificate details</label>
                                            </div>
                                            <div class="table-responsive">
                                                <div class="table table-bordered">
                                                    <table>
                                                        <tr>
                                                            <th>Certificate number</th>
                                                            <th>Expiration date</th>
                                                            <th>Certificate</th>
                                                            <th>Business ownership classification</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                        <tr>
                                                            <td>{{$account->certificate_number??''}}</td>
                                                            <td>{{$account->expire_date??''}}</td>
                                                            <td><a href="{{url('view/pdf')}}" style="color: #369bbd;">{{$account->certificate}}</a></td>
                                                            <td>Minority owned , Small business</td>
                                                            <td>Pending review</td>
                                                            <td><a href="{{url('download/pdf')}}" style="color: #369bbd;">Download Certificate</a></td>
                                                        </tr>
                                                    </table>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mt-1">
                                        <img src="./app-assets/images/account1.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
        
                            
        
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="mt-1">
                                        <h1 style="font-weight: bold;">Company Information</h1>
                                    </div>
                                    <div class="mt-3">
                                        <h2>Company Dispatch Information</h2>
                                    </div>
                                    <div class="mt-1">
                                        <div class="row">
                                            <div class="col-md-8">
                                             <form action="{{url('dispatch_informations')}}" method="POST">
                                               @csrf
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"><span style="color: red;">*</span> Company Name</label>
                                                <input class="col-md-6 form-control" name="company_name" value="{{old('company_name')}}" type="text" placeholder="Brandy Mcgee DBA McGee Maimtaince">
                                               @error('company_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4">Primary Contact</label>
                                                <input class="col-md-6 form-control" type="text" name="company_contact" value="{{old('company_contact')}}" placeholder="Brandy Mcgee">
                                                @error('company_contact')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"><span style="color: red;">*</span> Address Line 1</label>
                                                <input class="col-md-6 form-control" type="text" name="address_line_1" value="{{old('address_line_1')}}" placeholder="2008 Street 5">
                                               @error('address_line_1')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"><span style="color: red;">*</span> City</label>
                                                <input class="col-md-6 form-control" name="city" value="{{old('city')}}" type="text" placeholder="Miami">
                                               @error('city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"> Address Line 2</label>
                                                <input class="col-md-6 form-control" name="address_line_2" value="{{old('address_line_2')}}" type="text" placeholder="">
                                               @error('address_line_2')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"><span style="color: red;">*</span> State/Province</label>
                                                <div class="col-md-6" style="position: relative;padding: 0;">
                                                    <i style="position: absolute;top: 10px;right: 10px;" class="fa fa-angle-down"></i>
                                                   <select name="state" class="form-control" id="">
                                                       <option value="Marryland">Marryland</option>
                                                       <option value="Virginia">Virginia</option>
                                                       <option value="Florida">Florida</option>
                                                       <option value="Newyork">Newyork</option>
                                                   </select>
                                                @error('state')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                               </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"> Address Line 3</label>
                                                <input class="col-md-6 form-control" name="address_line_3" value="{{old('address_line_3')}}" type="text" placeholder="">
                                               @error('address_line_3')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"><span style="color: red;">*</span> Zip Code</label>
                                                <input class="col-md-6 form-control" name="zip_code" value="{{old('zip_code')}}" type="text" placeholder="20784">
                                                @error('zip_code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"><span style="color: red;">*</span> Country</label>
                                                <div class="col-md-6" style="position: relative;padding: 0;">
                                                    <i style="position: absolute;top: 10px;right: 10px;" class="fa fa-angle-down"></i>
                                                   <select name="country" class="form-control" id="">
                                                       <option value="United States">United States</option>
                                                       <option value="Ireland">Ireland</option>
                                                       <option value="Germany">Germany</option>
                                                       <option value="Italy">Italy</option>
                                                       <option value="Poland">Poland</option>
                                                       <option value="Finland">Finland</option>
                                                   </select>
                                                  @error('country')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                  @enderror
                                                </div>
                                               </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"><span style="color: red;">*</span> Primary Email</label>
                                                <input class="col-md-6 form-control"name="primary_email" value="{{old('primary_email')}}" type="text" placeholder="abcd@gmail.com">
                                               @error('primary_email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"><span style="color: red;">*</span> Primary Contact</label>
                                                <input class="col-md-6 form-control" name="primary_contact" value="{{old('primary_contact')}}" type="text" placeholder="86072845755">
                                                @error('primary_contact')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4">Other Phone</label>
                                                <input class="col-md-6 form-control" name="other_phone" value="{{old('other_phone')}}" type="text" placeholder="">
                                                @error('other_phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"> Fax Number</label>
                                                <input class="col-md-6 form-control" name="fax" value="{{old('fax')}}" type="text" placeholder="">
                                              @error('fax')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
                                    <div class="mt-1">
                                        <h2>Accounts Receivable Contacts</h2>
                                    </div>
                                    <div class="mt-1">
                                        <div class="row">
                                            <div class="col-md-8">
                                                
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"><span style="color: red;">*</span> Company Name</label>
                                                <input class="col-md-6 form-control" type="text" name="receivable_name" value="{{old('receivable_name')}}" placeholder="Brandy Mcgee">
                                              @error('receivable_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                              @enderror
                                              </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"><span style="color: red;">*</span> Company Email</label>
                                                <input class="col-md-6 form-control" type="text" name="receivable_email" value="{{old('receivable_email')}}" placeholder="brandymcgee@gmail.com">
                                               @error('receivable_email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"><span style="color: red;">*</span> Company Phone</label>
                                                <input class="col-md-6 form-control" type="text" name="receivable_phone" value="{{old('receivable_phone')}}" placeholder="86072845755">
                                              @error('receivable_phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
                                    <div class="mt-1">
                                        <h2>Accounts Payable Contacts</h2>
                                    </div>
                                    <div class="mt-1">
                                        <div class="row">
                                            <div class="col-md-8">
                                                
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"><span style="color: red;">*</span> Company Name</label>
                                                <input class="col-md-6 form-control" name="payable_name" value="{{old('payable_name')}}"  type="text" placeholder="Brandy Mcgee">
                                               @error('payable_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              
                                              </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"><span style="color: red;">*</span> Company Email</label>
                                                <input class="col-md-6 form-control" name="payable_email" value="{{old('payable_email')}}" type="email" placeholder="brandymcgee@gmail.com">
                                               @error('payable_email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"><span style="color: red;">*</span> Company Phone</label>
                                                <input class="col-md-6 form-control" name="payable_phone" value="{{old('payable_phone')}}" type="text" placeholder="86072845755">
                                               @error('payable_phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
                                    <div class="mt-1">
                                        <h2>Contact Information</h2>
                                    </div>
                                    <div class="mt-1">
                                        <div class="row">
                                            <div class="col-md-8">
                                                
                                                    <p>We Will Send "Work Orders" to your dispatch email address and if needed contact your dispatcher at the phone you list here.</p>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"><span style="color: red;">*</span> Company Name</label>
                                                <input class="col-md-6 form-control" name="contact_name" value="{{old('contact_name')}}" type="text" placeholder="Chris">
                                              @error('contact_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"><span style="color: red;">*</span> Company Email</label>
                                                <input class="col-md-6 form-control" type="email" name="contact_email" value="{{old('contact_email')}}" placeholder="chris@gmail.com">
                                               @error('contact_email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                               <div class="mt-2 d-flex flex-wrap">
                                                <label class="col-md-4"><span style="color: red;">*</span> Company Phone</label>
                                                <input class="col-md-6 form-control" name="contact_phone" value="{{old('contact_phone')}}" type="text" placeholder="20454316863">
                                               @error('contact_phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                   
                                               
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="mt-1">
                                      <h2>Service Types Performed</h2>
                                      <p>If you would like to change the carvioo typoc you can perform oontoot Provider Relationc at provider.rolationAdvicloncino.com </p>
                                  </div>
                                  <div class="mt-2">
                                      <ul>
                                          
                                         @foreach ( App\models\Service::all() as $item)
                                             <li><input type="checkbox" name="services[]" value="{{$item->id}}">&nbsp; {{$item->name}}</li> 
                                         @endforeach
                                      </ul>
                                  </div>
                                  <div class="mt-1">
                                      <h2>Service Area</h2>
                                      <p>I will perform any of the above Services when they are under 60 miles from my office (max 120).com </p>
                                  </div>
                                   <div class="mt-3 d-flex justify-content-end">
                                       <button  type="submit" class="btn btn-primary">Save Contact & Service Information</button>
                                    </div>
                              </form>
                              </div>
                          </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="mt-1">
                                        <p>A completed insurance certificate is necessary to receive work orders/contracts from Divisions. You may skip this step for now and continue to the next step if you don't have your certificate ready at this time. If you choose to skip the insurance section requirement please return this step ASAP to complete the required sign up information.</p>
                                    </div>
                                    <form action="account_information/upload_certficate" method="post" enctype="multipart/form-data">
                                      @csrf
                                    <div class="mt-3">
                                        <h3>Insurance Certificate</h3>
                                        <p>Select the file for your Liability Insurance or Workers Compensation Insurance certificate and use this tool to upload it to your profile. Each file can be uploaded separately or together, Please upload pdfs or images only</p>
                                        <p style="background-color: beige!important;">** Note: If you have multiple accounts, you must upload insurance information to each of them individually</p>
                                        <input type="file" name="certificate">
                                       
                                    </div>
                                    {{-- <div class="mt-2">
                                        <a href="" class="btn btn-primary">Add Another</a>
                                    </div> --}}
                                    <div class="mt-2">
                                        <p> Please include Divisions Inc. as an additional insured on your Insurance Certificate. Call your Insurance Company to do this. Use this address on your Insurance Certificate</p>
                                    </div>
                                    <div class="mt-2">
                                        <label for="" style="font-weight: bold;">Dynamic Property Services LLC.</label><br>
                                        <label for="" style="font-weight: bold;">712 H Street NE #1296</label><br>
                                        <label for="" style="font-weight: bold;">Washington, DC 20002</label><br>
                                    </div>
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary">Save Insurance Information</button>
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
        </div>
    </div>
</div>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
         <div class="">
            <h3 class="modal-title justify-content-center" id="exampleModalLabel">Do You Really Want to Remove?</h3>
         </div>
          <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                  @if (isset($account))
                      {{-- <form action="{{url('account_informations/'.$account->id)}}" method="POST">
                        @csrf
                        @method('DELETE') --}}
                       
                      <div class="form-group row">
                        <div class="mt-1 d-flex justify-content-center">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>&nbsp;&nbsp;
                          <a href="account_informations/{{$account->id}}/delete" class="btn btn-primary">Yes</a>
                        </div>
                      </div>
                      {{-- </form>  --}}
                  @else
                       <form>
                       
                       
                      <div class="form-group row">
                        <div class="mt-1 d-flex justify-content-center">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>&nbsp;&nbsp;
                          <button type="button" class="btn btn-primary">Yes</button>
                        </div>
                      </div>
                      </form> 
                  @endif
                   
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
    <!-- <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
    </footer> -->
   <!-- Modal -->
   <div class="modal fade" id="exampleModal03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
         <div class="">
            <h5 class="modal-title justify-content-center" id="exampleModalLabel">Contact Information</h5>
         </div>
          <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        </div>
        <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-9 mx-auto">
                    @if (isset($account))
                      <form action="{{url('account_informations/'.$account->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                    @else
                       <form action="#"> 
                    @endif
                      
                        <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Address Nickname</label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" value="{{$account->address_nickname??''}}" name="address_nickname">
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Name</label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="name" value="{{$account->name??''}}">
                                    
                                  </div>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Address Line 1 </label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control"value="{{$account->address_line_1??''}}" name="address_line_1">
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">City</label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="city" value="{{$account->city??''}}">
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">State/Province/Region</label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="state" value="{{$account->state??''}}">
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Bank Name </label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="bank_name" value="{{$account->bank_name??''}}">
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Zip/Postal Code </label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="zip_code" value="{{$account->zip_code??''}}">
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Country/Region </label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="country" value="{{$account->country??''}}">
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Phone </label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="phone" value="{{$account->phone??''}}">
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Contact Email Address(es) </label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="contact_email" value="{{$account->contact_email??''}}">
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Payment Email </label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="po_email" value="{{$account->po_email??''}}">
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Payment Terms </label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="pay_term" value="{{$account->pay_term??''}}">
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Account Nickname </label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="account_nickname" value="{{$account->account_nickname??''}}">
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Bank Location </label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="bank_location" value="{{$account->bank_location??''}}">
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Preferred Currency</label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="preferred_currency" value="{{$account->preferred_currency??''}}">
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Payment Method</label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="payment_method" value="{{$account->payment_method??''}}">
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Remittance Email</label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="remittance_email" value="{{$account->remittance_email??''}}">
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="mt-1">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
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
   <div class="modal fade" id="exampleModal02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
         <div class="">
            <h5 class="modal-title justify-content-center" id="exampleModalLabel">ACH</h5>
         </div>
          <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        </div>
        <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-9 mx-auto">
                     @if (isset($account))
                      <form action="{{url('account_informations/'.$account->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                    @else
                       <form action="#"> 
                    @endif
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">My Name</label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="name" value="{{$account->name??''}}">
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">My Address</label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="address_line_1" value="{{$account->address_line_1??''}}">
                                    
                                  </div>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">My City,State & Zip </label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="complete_address" value={{$account->complete_address??''}}>
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Order of</label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="order" value={{$account->order??''}}>
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Dollars ($) </label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="dollar" value={{$account->dollar??''}}>
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Bank Name </label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="bank_name" value={{$account->bank_name??''}}>
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label style="margin-top: 5px!important;" class="col-md-3 label-control" for="timesheetinput3">Bank Address </label>
                              <div class="col-md-9">
                                  <div class="position-relative">
                                    <input type="text" id="timesheetinput3" class="form-control" name="bank_location" value={{$account->bank_location??''}}>
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="mt-1">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
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
@endsection
  