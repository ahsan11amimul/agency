@extends('admin_layouts.app')
@section('title','Admin Roles')
    
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
                                 <!-- START row-->
<div class="row">

    <form action="#" data-parsley-validate="" novalidate="" class="form-horizontal">
       <!-- START panel-->
       <div class="panel panel-default">
         <div class="panel-heading">
           <h4>Admin Portal Users</h4>
         </div>
          <div class="panel-body">
                                          <div class="col-md-3">
                <div class="panel b text-center">
                     <div class="panel-body">
                                                  <img id="systemUserImage14" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" class="img-circle thumb64">
                                                 
                                                    <p class="h4 text-bold mb0" id="systemUserFullName14">Hassan  Aziz</p>
                                                  <input type="hidden" name="email_id" value="" id="systemUserEmail14">
                        <input type="hidden" name="user_name" value="rdxhassan" id="systemUserUserName14">
                        <input type="hidden" name="user_role" value="1" id="systemUserGroup14">
                        <input type="hidden" name="user_joined" value="02 Dec 2021" id="systemUserJoined14">
                        <input type="hidden" name="canNot" id="systemCanOrCantNotBe14" value="0">
                        <input type="hidden" name="branch_id" value="1" id="branchID14">
                        <div class="row">
                        <div class="col-md-12">
                        <span><p><strong>Group: </strong><span id="systemUserGroupNmae14">Super Admins</span></p></span>
                        </div>
                        </div>
                                                    <p><strong>Branch:</strong> Head Office</p>
                                                  <input type="hidden" id="branch_name_for_viewing14" value="Head Office">
                     </div>
                     <div class="panel-body bt">
                        <div class="row">
                           <div class="col-xs-4 br">
                             <em class="fa fa-list fa-fw text-success"></em>
                             <a href="#" type="button" class="viewControl" alt="14" data-toggle="modal" data-target="#myModalView"><strong>VIEW</strong></a>
                           </div>
                           <div class="col-xs-4 br">
                             
                                                                                                 <em class="fa fa-pencil fa-fw text-info"></em>
                                 <a href="#" type="button" class="clickEditControl" alt="14" data-toggle="modal" data-target="#myModalEdit"><strong>EDIT</strong></a>
                                                                                          </div>
                           <div class="col-xs-4">
                             
                                                              <em class="fas fa-trash fa-fw text-danger"></em>
                               <a href="#" type="button" class="clickDeleteControl" alt="14" data-toggle="modal" data-target="#myModalDelete"><strong>DEL</strong></a>
                                                          </div>
                        </div>
                     </div>
                  </div>
              </div>
                            <div class="col-md-3">
                <div class="panel b text-center">
                     <div class="panel-body">
                                                  <img id="systemUserImage13" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" class="img-circle thumb64">
                                                 
                                                    <p class="h4 text-bold mb0" id="systemUserFullName13">Muhammad  Ayaan</p>
                                                  <input type="hidden" name="email_id" value="" id="systemUserEmail13">
                        <input type="hidden" name="user_name" value="rdxayaan" id="systemUserUserName13">
                        <input type="hidden" name="user_role" value="1" id="systemUserGroup13">
                        <input type="hidden" name="user_joined" value="26 Nov 2021" id="systemUserJoined13">
                        <input type="hidden" name="canNot" id="systemCanOrCantNotBe13" value="0">
                        <input type="hidden" name="branch_id" value="1" id="branchID13">
                        <div class="row">
                        <div class="col-md-12">
                        <span><p><strong>Group: </strong><span id="systemUserGroupNmae13">Super Admins</span></p></span>
                        </div>
                        </div>
                                                    <p><strong>Branch:</strong> Head Office</p>
                                                  <input type="hidden" id="branch_name_for_viewing13" value="Head Office">
                     </div>
                     <div class="panel-body bt">
                        <div class="row">
                           <div class="col-xs-4 br">
                             <em class="fa fa-list fa-fw text-success"></em>
                             <a href="#" type="button" class="viewControl" alt="13" data-toggle="modal" data-target="#myModalView"><strong>VIEW</strong></a>
                           </div>
                           <div class="col-xs-4 br">
                             
                                                                                                 <em class="fa fa-pencil fa-fw text-info"></em>
                                 <a href="#" type="button" class="clickEditControl" alt="13" data-toggle="modal" data-target="#myModalEdit"><strong>EDIT</strong></a>
                                                                                          </div>
                           <div class="col-xs-4">
                             
                                                              <em class="fas fa-trash fa-fw text-danger"></em>
                               <a href="#" type="button" class="clickDeleteControl" alt="13" data-toggle="modal" data-target="#myModalDelete"><strong>DEL</strong></a>
                                                          </div>
                        </div>
                     </div>
                  </div>
              </div>
                            <div class="col-md-3">
                <div class="panel b text-center">
                     <div class="panel-body">
                                                  <img id="systemUserImage11" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" class="img-circle thumb64">
                                                 
                                                    <p class="h4 text-bold mb0" id="systemUserFullName11">Mr Adnan Khan</p>
                                                  <input type="hidden" name="email_id" value="" id="systemUserEmail11">
                        <input type="hidden" name="user_name" value="adnan.voags" id="systemUserUserName11">
                        <input type="hidden" name="user_role" value="1" id="systemUserGroup11">
                        <input type="hidden" name="user_joined" value="10 Aug 2021" id="systemUserJoined11">
                        <input type="hidden" name="canNot" id="systemCanOrCantNotBe11" value="0">
                        <input type="hidden" name="branch_id" value="1" id="branchID11">
                        <div class="row">
                        <div class="col-md-12">
                        <span><p><strong>Group: </strong><span id="systemUserGroupNmae11">Super Admins</span></p></span>
                        </div>
                        </div>
                                                    <p><button type="button" class="btn btn-green btn-xs btn-oval">You</button></p>
                                                  <input type="hidden" id="branch_name_for_viewing11" value="Head Office">
                     </div>
                     <div class="panel-body bt">
                        <div class="row">
                           <div class="col-xs-4 br">
                             <em class="fa fa-list fa-fw text-success"></em>
                             <a href="#" type="button" class="viewControl" alt="11" data-toggle="modal" data-target="#myModalView"><strong>VIEW</strong></a>
                           </div>
                           <div class="col-xs-4 br">
                             
                                                                                                 <em class="fa fa-pencil fa-fw text-info"></em>
                                 <a href="#" type="button" class="clickEditControl" alt="11" data-toggle="modal" data-target="#myModalEdit"><strong>EDIT</strong></a>
                                                                                          </div>
                           <div class="col-xs-4">
                             
                                                              <em class="fas fa-trash fa-fw text-danger"></em>
                               <strong>DEL</strong>
                                                          </div>
                        </div>
                     </div>
                  </div>
              </div>
                            <div class="col-md-3">
                <div class="panel b text-center">
                     <div class="panel-body">
                                                  <img id="systemUserImage10" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" class="img-circle thumb64">
                                                 
                                                    <p class="h4 text-bold mb0" id="systemUserFullName10">Mohsan  Aziz</p>
                                                  <input type="hidden" name="email_id" value="" id="systemUserEmail10">
                        <input type="hidden" name="user_name" value="rdxmohsan" id="systemUserUserName10">
                        <input type="hidden" name="user_role" value="1" id="systemUserGroup10">
                        <input type="hidden" name="user_joined" value="01 Aug 2021" id="systemUserJoined10">
                        <input type="hidden" name="canNot" id="systemCanOrCantNotBe10" value="0">
                        <input type="hidden" name="branch_id" value="1" id="branchID10">
                        <div class="row">
                        <div class="col-md-12">
                        <span><p><strong>Group: </strong><span id="systemUserGroupNmae10">Super Admins</span></p></span>
                        </div>
                        </div>
                                                    <p><strong>Branch:</strong> Head Office</p>
                                                  <input type="hidden" id="branch_name_for_viewing10" value="Head Office">
                     </div>
                     <div class="panel-body bt">
                        <div class="row">
                           <div class="col-xs-4 br">
                             <em class="fa fa-list fa-fw text-success"></em>
                             <a href="#" type="button" class="viewControl" alt="10" data-toggle="modal" data-target="#myModalView"><strong>VIEW</strong></a>
                           </div>
                           <div class="col-xs-4 br">
                             
                                                                                                 <em class="fa fa-pencil fa-fw text-info"></em>
                                 <a href="#" type="button" class="clickEditControl" alt="10" data-toggle="modal" data-target="#myModalEdit"><strong>EDIT</strong></a>
                                                                                          </div>
                           <div class="col-xs-4">
                             
                                                              <em class="fas fa-trash fa-fw text-danger"></em>
                               <a href="#" type="button" class="clickDeleteControl" alt="10" data-toggle="modal" data-target="#myModalDelete"><strong>DEL</strong></a>
                                                          </div>
                        </div>
                     </div>
                  </div>
              </div>
                        </div>
          <div class="panel-footer">
            <div class="" style="text-align:center">
              <a href="https://rdx.indel.co/users/system">VIEW MORE</a>
            </div>
          </div>
       </div>
       <!-- END panel-->
    </form>
</div>
<!-- END row-->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
       <div class="panel-heading">
          
          <div class="pull-right label label-success">80</div>
          <div class="panel-title">Staff Portal Users</div>
       </div>
       <!-- START list group-->
       
       <div class="">
          <!-- START list group item-->
                      <table id="clickingControl" class="datatableOrdered table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th></th>
              </tr>
            </thead>
            <tbody>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage115" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="115" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="115" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName115">Aasher  Azeem</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail115">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName115" value="07832686209">
                                <input type="hidden" id="staffJoinedOn115" value="01 Jan 2021">
                                <input type="hidden" name="branch" id="staffBranchID115" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage100" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="100" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="100" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName100">Abdel Hak  Benhamada</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail100">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName100" value="07473460908">
                                <input type="hidden" id="staffJoinedOn100" value="29 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID100" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage95" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="95" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="95" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName95">Abdelalim Said  Bayan</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail95">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName95" value="07727128966">
                                <input type="hidden" id="staffJoinedOn95" value="11 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID95" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage92" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="92" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="92" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName92">Abdelkadir  Ahmedin</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail92">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName92" value="07948516691">
                                <input type="hidden" id="staffJoinedOn92" value="15 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID92" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage104" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="104" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="104" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName104">Abdul  Haseeb</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail104">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName104" value="07383599399">
                                <input type="hidden" id="staffJoinedOn104" value="01 May 2021">
                                <input type="hidden" name="branch" id="staffBranchID104" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage120" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="120" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="120" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName120">Abubakar  Abubakar</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail120">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName120" value="07882487054">
                                <input type="hidden" id="staffJoinedOn120" value="06 Aug 2021">
                                <input type="hidden" name="branch" id="staffBranchID120" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage53" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="53" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="53" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName53">Ahad Mubin  Hussain</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail53">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName53" value="07787408057">
                                <input type="hidden" id="staffJoinedOn53" value="13 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID53" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage121" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="121" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="121" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName121">Akash  Ali</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail121">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName121" value="07306288853">
                                <input type="hidden" id="staffJoinedOn121" value="05 Sep 2021">
                                <input type="hidden" name="branch" id="staffBranchID121" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage78" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="78" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="78" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName78">Alina  Khan</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail78">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName78" value="07391619828">
                                <input type="hidden" id="staffJoinedOn78" value="26 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID78" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage119" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="119" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="119" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName119">Anmoldeep  Kaur</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail119">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName119" value="07448492704">
                                <input type="hidden" id="staffJoinedOn119" value="29 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID119" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage122" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="122" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="122" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName122">Armaan  Khalid</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail122">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName122" value="07488491788">
                                <input type="hidden" id="staffJoinedOn122" value="03 Sep 2021">
                                <input type="hidden" name="branch" id="staffBranchID122" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage54" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="54" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="54" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName54">Arshpreet  Singh</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail54">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName54" value="07552242559">
                                <input type="hidden" id="staffJoinedOn54" value="04 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID54" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage89" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="89" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="89" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName89">Asama Saad Malik</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail89">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName89" value="07470884472">
                                <input type="hidden" id="staffJoinedOn89" value="02 May 2021">
                                <input type="hidden" name="branch" id="staffBranchID89" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage101" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="101" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="101" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName101">ASGHAR  Ali</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail101">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName101" value="07448981122">
                                <input type="hidden" id="staffJoinedOn101" value="11 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID101" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage64" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="64" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="64" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName64">Awais  Choudhary</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail64">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName64" value="07466591954">
                                <input type="hidden" id="staffJoinedOn64" value="18 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID64" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage56" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="56" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="56" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName56">Bal Ram  Poudel</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail56">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName56" value="07308326362">
                                <input type="hidden" id="staffJoinedOn56" value="01 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID56" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage94" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="94" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="94" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName94">Biliamin Abiola  Alli</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail94">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName94" value="07466914064">
                                <input type="hidden" id="staffJoinedOn94" value="08 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID94" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage85" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="85" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="85" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName85">Danish  Shehzad</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail85">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName85" value="07310461740">
                                <input type="hidden" id="staffJoinedOn85" value="13 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID85" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage102" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="102" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="102" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName102">Farwa  Shakoor</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail102">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName102" value="07903363517">
                                <input type="hidden" id="staffJoinedOn102" value="12 Feb 2021">
                                <input type="hidden" name="branch" id="staffBranchID102" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage66" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="66" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="66" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName66">Gurpreet Singh  Sohanpal</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail66">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName66" value="07946879130">
                                <input type="hidden" id="staffJoinedOn66" value="25 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID66" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage108" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="108" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="108" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName108">Hammad  Raza</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail108">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName108" value="07438423610">
                                <input type="hidden" id="staffJoinedOn108" value="04 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID108" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage69" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="69" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="69" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName69">Ibrahim  Saeed</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail69">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName69" value="07366525327">
                                <input type="hidden" id="staffJoinedOn69" value="21 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID69" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage98" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="98" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="98" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName98">Ijaz  Shah</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail98">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName98" value="07402400040">
                                <input type="hidden" id="staffJoinedOn98" value="20 Apr 2021">
                                <input type="hidden" name="branch" id="staffBranchID98" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage71" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="71" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="71" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName71">Irfan  Ulhaq</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail71">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName71" value="07842432847">
                                <input type="hidden" id="staffJoinedOn71" value="05 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID71" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage60" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="60" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="60" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName60">Jawed  Nawaz</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail60">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName60" value="07575121422">
                                <input type="hidden" id="staffJoinedOn60" value="29 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID60" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage128" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="128" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="128" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName128">Jhanvi  Tomar</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail128">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName128" value="07471008554">
                                <input type="hidden" id="staffJoinedOn128" value="13 Sep 2021">
                                <input type="hidden" name="branch" id="staffBranchID128" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage58" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="58" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="58" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName58">Kamron  Abdul Jabbar</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail58">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName58" value="07487355025">
                                <input type="hidden" id="staffJoinedOn58" value="12 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID58" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage132" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="132" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="132" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName132">Karanjeet  Kaur Waraich</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail132">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName132" value="07448121267">
                                <input type="hidden" id="staffJoinedOn132" value="03 Oct 2021">
                                <input type="hidden" name="branch" id="staffBranchID132" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage136" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="136" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="136" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName136">Kashif  Fiaz</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail136">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName136" value="Kashiffiaz">
                                <input type="hidden" id="staffJoinedOn136" value="02 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID136" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage90" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="90" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="90" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName90">Khalid Shahzad  Muhammad</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail90">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName90" value="07448422882">
                                <input type="hidden" id="staffJoinedOn90" value="11 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID90" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage83" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="83" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="83" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName83">Khizar  Hayat</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail83">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName83" value="07307524671">
                                <input type="hidden" id="staffJoinedOn83" value="01 Jan 2021">
                                <input type="hidden" name="branch" id="staffBranchID83" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage124" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="124" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="124" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName124">Mahmoud  Ahmed</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail124">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName124" value="07939874121">
                                <input type="hidden" id="staffJoinedOn124" value="29 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID124" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage80" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="80" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="80" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName80">Majid  Azeem</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail80">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName80" value="07746871448">
                                <input type="hidden" id="staffJoinedOn80" value="14 Aug 2021">
                                <input type="hidden" name="branch" id="staffBranchID80" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage91" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="91" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="91" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName91">Mamoun Abass Nasaour</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail91">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName91" value="07949736716">
                                <input type="hidden" id="staffJoinedOn91" value="04 Jan 2021">
                                <input type="hidden" name="branch" id="staffBranchID91" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage126" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="126" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="126" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName126">Mehwish  Mehboob</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail126">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName126" value="07834651008">
                                <input type="hidden" id="staffJoinedOn126" value="13 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID126" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage82" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="82" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="82" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName82">Mohamed Abdullah  Sulaiman</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail82">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName82" value="07479051299">
                                <input type="hidden" id="staffJoinedOn82" value="20 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID82" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage105" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="105" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="105" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName105">Mohammad Iftikhar Malik</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail105">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName105" value="07459548810">
                                <input type="hidden" id="staffJoinedOn105" value="02 May 2021">
                                <input type="hidden" name="branch" id="staffBranchID105" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage106" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="106" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="106" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName106">Mohammed  Waheed Awan</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail106">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName106" value="07799063751">
                                <input type="hidden" id="staffJoinedOn106" value="25 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID106" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage134" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="134" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="134" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName134">Mohammed Anees  Akhtar</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail134">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName134" value="07925733069">
                                <input type="hidden" id="staffJoinedOn134" value="08 Sep 2021">
                                <input type="hidden" name="branch" id="staffBranchID134" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage127" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="127" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="127" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName127">MOhammed Jahnagir  Afsar</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail127">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName127" value="07988701243">
                                <input type="hidden" id="staffJoinedOn127" value="14 Aug 2021">
                                <input type="hidden" name="branch" id="staffBranchID127" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage65" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="65" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="65" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName65">Mohammed Tokeer  Qais</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail65">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName65" value="07306096680">
                                <input type="hidden" id="staffJoinedOn65" value="27 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID65" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage79" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="79" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="79" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName79">Mohsan  Aziz</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail79">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName79" value="07448970639">
                                <input type="hidden" id="staffJoinedOn79" value="20 Jan 2021">
                                <input type="hidden" name="branch" id="staffBranchID79" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage116" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="116" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="116" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName116">Mohsan  Aziz</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail116">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName116" value="mohsan">
                                <input type="hidden" id="staffJoinedOn116" value="13 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID116" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage87" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="87" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="87" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName87">Mr Nazakat  Ali Khan</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail87">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName87" value="07308395879">
                                <input type="hidden" id="staffJoinedOn87" value="03 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID87" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage137" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="137" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="137" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName137">Mr Pardeep  </span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail137">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName137" value="Pradeep">
                                <input type="hidden" id="staffJoinedOn137" value="07 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID137" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage135" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="135" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="135" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName135">MR Shivraj  </span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail135">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName135" value="07309 331633">
                                <input type="hidden" id="staffJoinedOn135" value="07 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID135" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage55" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="55" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="55" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName55">Muhammad  Hamaad</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail55">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName55" value="077430433454">
                                <input type="hidden" id="staffJoinedOn55" value="27 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID55" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage67" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="67" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="67" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName67">Muhammad  Ishfaq</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail67">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName67" value="07448104787">
                                <input type="hidden" id="staffJoinedOn67" value="26 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID67" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage70" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="70" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="70" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName70">Muhammad  Rehan</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail70">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName70" value="07309153934">
                                <input type="hidden" id="staffJoinedOn70" value="01 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID70" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage81" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="81" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="81" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName81">Muhammad  Shoaib</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail81">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName81" value="07535980646">
                                <input type="hidden" id="staffJoinedOn81" value="01 Jan 2021">
                                <input type="hidden" name="branch" id="staffBranchID81" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage84" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="84" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="84" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName84">Muhammad  Shairaz</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail84">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName84" value="07838752002">
                                <input type="hidden" id="staffJoinedOn84" value="21 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID84" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage112" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="112" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="112" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName112">Muhammad  Hassan</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail112">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName112" value="07861272131">
                                <input type="hidden" id="staffJoinedOn112" value="05 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID112" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage99" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="99" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="99" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName99">Muhammad Akmal  khan</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail99">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName99" value="07596837232">
                                <input type="hidden" id="staffJoinedOn99" value="26 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID99" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage96" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="96" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="96" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName96">Muhammad Arif  Hussain</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail96">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName96" value="07576286190">
                                <input type="hidden" id="staffJoinedOn96" value="20 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID96" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage97" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="97" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="97" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName97">Muhammad Shafaqat  Ali</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail97">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName97" value="07453414199">
                                <input type="hidden" id="staffJoinedOn97" value="20 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID97" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage118" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="118" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="118" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName118">Murad  Ali</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail118">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName118" value="07448592059">
                                <input type="hidden" id="staffJoinedOn118" value="12 Apr 2021">
                                <input type="hidden" name="branch" id="staffBranchID118" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage129" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="129" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="129" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName129">Palvinder  Singh</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail129">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName129" value="07883451711">
                                <input type="hidden" id="staffJoinedOn129" value="27 Aug 2021">
                                <input type="hidden" name="branch" id="staffBranchID129" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage73" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="73" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="73" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName73">Pir Imad Ali  Shah</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail73">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName73" value="07424922234">
                                <input type="hidden" id="staffJoinedOn73" value="06 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID73" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage125" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="125" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="125" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName125">Raja Ali Akbar Khan</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail125">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName125" value="07853519350">
                                <input type="hidden" id="staffJoinedOn125" value="27 Feb 2021">
                                <input type="hidden" name="branch" id="staffBranchID125" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage114" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="114" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="114" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName114">Razmir  Khan</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail114">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName114" value="07456488576">
                                <input type="hidden" id="staffJoinedOn114" value="20 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID114" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage86" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="86" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="86" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName86">Rizwan  Anwar</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail86">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName86" value="07404280587">
                                <input type="hidden" id="staffJoinedOn86" value="11 Apr 2021">
                                <input type="hidden" name="branch" id="staffBranchID86" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage131" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="131" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="131" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName131">Rizwan  Abbasi</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail131">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName131" value="07310322353">
                                <input type="hidden" id="staffJoinedOn131" value="04 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID131" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage109" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="109" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="109" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName109">Saad  Ali</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail109">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName109" value="07307351975">
                                <input type="hidden" id="staffJoinedOn109" value="01 Aug 2021">
                                <input type="hidden" name="branch" id="staffBranchID109" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage57" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="57" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="57" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName57">Safyan  Liaqat</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail57">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName57" value="07572383853">
                                <input type="hidden" id="staffJoinedOn57" value="27 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID57" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage68" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="68" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="68" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName68">Saima Sarwar  Shamsheri</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail68">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName68" value="07759937226">
                                <input type="hidden" id="staffJoinedOn68" value="27 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID68" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage59" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="59" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="59" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName59">Saqlain  Ali</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail59">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName59" value="07398212239">
                                <input type="hidden" id="staffJoinedOn59" value="27 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID59" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage113" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="113" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="113" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName113">Sheraz  Qayyam</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail113">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName113" value="07869710699">
                                <input type="hidden" id="staffJoinedOn113" value="07 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID113" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage75" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="75" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="75" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName75">Shokat  Siraj</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail75">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName75" value="07455213234">
                                <input type="hidden" id="staffJoinedOn75" value="20 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID75" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage61" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="61" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="61" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName61">Simranjit  Kaur</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail61">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName61" value="07585187252">
                                <input type="hidden" id="staffJoinedOn61" value="09 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID61" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage62" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="62" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="62" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName62">Siraj  Ahmed</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail62">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName62" value="07305315833">
                                <input type="hidden" id="staffJoinedOn62" value="03 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID62" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage88" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="88" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="88" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName88">Sumera  Aamir</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail88">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName88" value="07365533896">
                                <input type="hidden" id="staffJoinedOn88" value="22 May 2021">
                                <input type="hidden" name="branch" id="staffBranchID88" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage111" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="111" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="111" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName111">Taimur  Taimur</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail111">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName111" value="07508255776">
                                <input type="hidden" id="staffJoinedOn111" value="26 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID111" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage72" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="72" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="72" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName72">Taiseen  Mohammed</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail72">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName72" value="07438141657">
                                <input type="hidden" id="staffJoinedOn72" value="14 Jul 2021">
                                <input type="hidden" name="branch" id="staffBranchID72" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage123" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="123" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="123" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName123">Toqeer  Ahmid</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail123">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName123" value="07404905118">
                                <input type="hidden" id="staffJoinedOn123" value="27 Aug 2021">
                                <input type="hidden" name="branch" id="staffBranchID123" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage74" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="74" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="74" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName74">Toseeb  Qais</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail74">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName74" value="07476009556">
                                <input type="hidden" id="staffJoinedOn74" value="27 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID74" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage130" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="130" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="130" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName130">Waqar  Ahmed</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail130">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName130" value="07821072223">
                                <input type="hidden" id="staffJoinedOn130" value="23 Apr 2021">
                                <input type="hidden" name="branch" id="staffBranchID130" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage133" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="133" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="133" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName133">Waqas  Azam</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail133">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName133" value="07898324193">
                                <input type="hidden" id="staffJoinedOn133" value="28 Sep 2021">
                                <input type="hidden" name="branch" id="staffBranchID133" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage103" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="103" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="103" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName103">Yawar  Hayat</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail103">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName103" value="07727074739">
                                <input type="hidden" id="staffJoinedOn103" value="25 Apr 2021">
                                <input type="hidden" name="branch" id="staffBranchID103" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage63" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="63" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="63" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName63">Zaheer  Abbas</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail63">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName63" value="07727848149">
                                <input type="hidden" id="staffJoinedOn63" value="27 Jun 2021">
                                <input type="hidden" name="branch" id="staffBranchID63" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                                <tr>
                  <td>
                    <a href="javascript:;" class="list-group-item">
                       <div class="media-box">
                          <div class="pull-left">
                                                                <img id="staffImage107" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" alt="Image" class="media-box-object img-circle thumb32">
                                                          </div>
                          <div class="media-box-body clearfix">
                                                            <em class="clickStaffDeleteControl fas fa-trash fa-fw text-danger pull-right" data-toggle="modal" alt="107" data-target="#myModalStaffDelete"></em>
                                                           <strong class="clickStaffEditControl media-box-heading text-primary" alt="107" data-toggle="modal" data-target="#myModalStaffEdit">
                                <span class="circle circle-info circle-lg text-left"></span>
                                <span id="staffUserFullName107">Zain UL  Abdeen</span> <span>(Head Office)</span>
                              </strong>
                             <p class="mb-sm" id="staffUserEmail107">
                                <small></small>
                                <input type="hidden" name="staffUserName" id="staffUserUserName107" value="07983127239">
                                <input type="hidden" id="staffJoinedOn107" value="11 Apr 2021">
                                <input type="hidden" name="branch" id="staffBranchID107" value="1">
                             </p>
                          </div>
                       </div>
                    </a>
                  </td>
                </tr>
                            </tbody>
          </table>

          <!-- END list group item-->
       </div>
    </div>
  </div>
  <div class="col-md-6" style="display:none">
    <div class="panel panel-default">
       <div class="panel-heading">
          
          <div class="pull-right label label-success">0</div>
          <div class="panel-title">Client Portal Users</div>
       </div>
       <!-- START list group-->
       <div data-height="250" data-scrollable="" class="list-group">
          <!-- START list group item-->
                                  <!-- END list group item-->
       </div>
       <!-- END list group-->
       <!-- START panel footer-->
       
       <!-- END panel-footer-->
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

      <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="https://rdx.indel.co/asset/vendor/modernizr/modernizr.custom.js"></script>
   <!-- MATCHMEDIA POLYFILL-->
   <script src="https://rdx.indel.co/asset/vendor/matchMedia/matchMedia.js"></script>
   <!-- JQUERY-->
   <script src="https://rdx.indel.co/asset/vendor/jquery/dist/jquery.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/jquery-ui/jquery-ui.js"></script>
   <!-- BOOTSTRAP-->
   <script src="https://rdx.indel.co/asset/vendor/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="https://rdx.indel.co/asset/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
   <!-- JQUERY EASING-->
   <script src="https://rdx.indel.co/asset/vendor/jquery.easing/js/jquery.easing.js"></script>
   <!-- ANIMO-->
   <script src="https://rdx.indel.co/asset/vendor/animo.js/animo.js"></script>
   <!-- SLIMSCROLL-->
   <script src="https://rdx.indel.co/asset/vendor/slimScroll/jquery.slimscroll.min.js"></script>
   <!-- SCREENFULL-->
   <script src="https://rdx.indel.co/asset/vendor/screenfull/dist/screenfull.js"></script>
   <!-- LOCALIZE-->
   
   <!-- RTL demo-->
   <script src="https://rdx.indel.co/asset/app/js/demo/demo-rtl.js"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <!-- SPARKLINE-->
   <script src="https://rdx.indel.co/asset/vendor/sparkline/index.js"></script>
   <!-- FLOT CHART-->
   <script src="https://rdx.indel.co/asset/vendor/Flot/jquery.flot.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/Flot/jquery.flot.resize.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/Flot/jquery.flot.pie.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/Flot/jquery.flot.time.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/Flot/jquery.flot.categories.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/flot-spline/js/jquery.flot.spline.min.js"></script>
   <!-- CLASSY LOADER-->
   <script src="https://rdx.indel.co/asset/vendor/jquery-classyloader/js/jquery.classyloader.min.js"></script>
   <!-- MOMENT JS-->
   <script src="https://rdx.indel.co/asset/vendor/moment/min/moment-with-locales.min.js"></script>
   <!-- DEMO-->
   <script src="https://rdx.indel.co/asset/app/js/demo/demo-flot.js"></script>
   <!-- DATATABLES-->
   <script src="https://rdx.indel.co/asset/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/datatables-colvis/js/dataTables.colVis.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/datatables/media/js/dataTables.bootstrap.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/dataTables.buttons.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/buttons.bootstrap.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/buttons.colVis.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/buttons.flash.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/buttons.html5.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/buttons.print.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/datatables-responsive/js/dataTables.responsive.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/datatables-responsive/js/responsive.bootstrap.js"></script>
   <script src="https://rdx.indel.co/asset/app/js/demo/demo-datatable.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/sweetalert/dist/sweetalert.min.js"></script>
   <script type="text/javascript" src="https://rdx.indel.co/asset/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
   <!-- The basic File Upload plugin-->
   
   <!-- The File Upload processing plugin-->
   
   <!-- The File Upload image preview & resize plugin-->
   
   <!-- DATETIMEPICKER-->
   <script type="text/javascript" src="https://rdx.indel.co/asset/vendor/bootstrap-datepicker-1.6.4-dist/js/bootstrap-datepicker.min.js"></script>
   <!-- CLASSY LOADER-->
   
   <!-- =============== APP SCRIPTS ===============-->
   <script src="https://rdx.indel.co/asset/app/js/app.js"></script>
   <script src="https://rdx.indel.co/asset/vendor/select2/dist/js/select2.js"></script>
     <!-- Modal For Viewing the User data-->
  <div id="myModalView" tabindex="-1" role="dialog" aria-labelledby="myModalLabelLarge" aria-hidden="true" class="modal fade">
     <div class="modal-dialog modal-lg">
        <div class="modal-content">
           <div class="modal-header">
              <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                 <span aria-hidden="true">&times;</span>
              </button>
              <h4 id="myModalLabelLarge" class="modal-title">USER DETAIL</h4>
           </div>
           <div class="modal-body">
             <form method="POST" action="https://rdx.indel.co/users" accept-charset="UTF-8" class="form-horizontal"><input name="_token" type="hidden" value="PGBpit0vQZTq965m7yo1oCPQqIPLNNtDKWDMngqW">
             <div class="row">
                 <div class="col-md-8">
                   <div class="form-group">
                      <label class="col-sm-3 control-label">Branch Name</label>
                      <div class="col-sm-9">
                         <input type="text" name="branch_name" id="branch_name_view" required="required" placeholder="Branch Name" class="form-control" readonly>
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-sm-3 control-label">User Name</label>
                      <div class="col-sm-9">
                         <span id="displayMessage"></span>
                         <input type="text" name="user_name" id="user_name_view" required="required" placeholder="User Name" class="form-control" readonly>
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-sm-3 control-label">Full Name</label>
                      <div class="col-sm-9">
                         <input id="full_name_view" type="text" name="full_name" placeholder="Full Name" class="form-control" readonly>
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-sm-3 control-label">Group</label>
                      <div class="col-sm-9">
                         <input id="group_view" type="text" name="full_name" placeholder="Full Name" class="form-control" readonly>
                      </div>
                   </div>
                   <div class="form-group" style="display:none">
                      <label class="col-sm-3 control-label">Email ID</label>
                      <div class="col-sm-9">
                         <input id="email_id_view" type="text" name="email" placeholder="example@mail.com" class="form-control" readonly>
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-sm-3 control-label">Joined on</label>
                      <div class="col-sm-9">
                         <input id="joined_on_view" type="text" name="email" placeholder="example@mail.com" class="form-control" readonly>
                      </div>
                   </div>
                 </div>
                 <div class="col-sm-4">
                   <div class="">
                     <img id="placeStaffImageHereView" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" class="img-circle" style="width:100%;height:100%">
                   </div>
                 </div>
             </div>
             </form>
           </div>
           <div class="modal-footer">
              <button type="button" data-dismiss="modal" class="btn btn-danger">CLOSE</button>
           </div>
        </div>
     </div>
  </div>

  <!-- Modal For editing the User data-->
  <div id="myModalEdit" role="dialog" aria-labelledby="myModalLabelLarge" aria-hidden="true" class="modal fade">
     <div class="modal-dialog modal-lg">
        <div class="modal-content">
           <div class="modal-header">
              <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                 <span aria-hidden="true">&times;</span>
              </button>
              <h4 id="myModalLabelLarge" class="modal-title">EDIT USER</h4>
              <p style="color:#f05050"><strong>Note: </strong>Please leave the password field blank if you do not want to change it.</p>
           </div>
          <form method="POST" action="https://rdx.indel.co/users/edit" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data"><input name="_token" type="hidden" value="PGBpit0vQZTq965m7yo1oCPQqIPLNNtDKWDMngqW">
           <div class="modal-body">
             <div class="row">
                 <div class="col-md-8">
                   <div class="form-group">
                      <label class="col-sm-3 control-label">User Name</label>
                      <div class="col-sm-9">
                         <span id="displayMessage"></span>
                         <input type="hidden" name="user_id" id="user_id" value="">
                         <input type="hidden" name="can_be_e" id="can_be_e" value="">
                         <input type="hidden" name="branch_id" id="branchIDEdit" value="">
                         <input type="text" name="user_name" id="user_name" required="required" placeholder="User Name" class="form-control" readonly>
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-sm-3 control-label">Full Name</label>
                      <div class="col-sm-9">
                         <input id="full_name" type="text" name="full_name" placeholder="Full Name" class="form-control" readonly>
                      </div>
                   </div>
                   <div class="removeDivIf">
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Group</label>
                        <div class="col-sm-9">
                           <select class="select2-1" name="user_role" id="user_role" style="width:100%" required>
                             <option value="">Select Group</option>
                                                                                                                                                                                                                         <option value="2">Controller</option>
                                                                                                                            <option value="3">Employee</option>
                                                                                       </select>
                        </div>
                     </div>
                   </div>
                   <div class="form-group" style="display:none">
                      <label class="col-sm-3 control-label">Email ID</label>
                      <div class="col-sm-9">
                         <input id="email_id" type="text" name="email" placeholder="example@mail.com" class="form-control">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-sm-3 control-label">Change Password</label>
                      <div class="col-sm-9">
                         <input type="password" name="password" placeholder="password" id="password" class="form-control" autocomplete="new-password">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-sm-3 control-label">Confirm Password</label>
                      <div class="col-sm-9">
                        <span class="passwordMessage"></span>
                         <input type="password" name="confirm_password" placeholder="Confirm Password" id="re_password" class="form-control">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-sm-3 control-label">Image</label>
                      <div class="col-sm-9">
                         <input type="file" name="user_image" data-classbutton="btn btn-default" data-classinput="form-control inline" class="form-control filestyle">
                      </div>
                   </div>
                 </div>
                 <div class="col-sm-4">
                   <div class="placeImageHere">
                     <img id="placeImageHere" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" class="img-circle" style="width:100%;height:100%">
                   </div>
                 </div>
             </div>
             
                          <div class="row" id="removeTheDivIfUserIsSuperAdmin">
               <div class="col-sm-12">
                                    <div class="form-group">
                                                                         <label class="col-sm-2 control-label">Select Branhces</label>
                                                  <div class="col-sm-5">
                           <div class="checkbox c-checkbox needsclick">
                              <label class="needsclick">
                                 <input type="checkbox" name="branches[]" value="1" class="needsclick trainingControl" id="branchSelected1">
                                 <span class="fa fa-check"></span> Head Office
                               </label>
                           </div>
                         </div>
                                                              </div>
               </div>
             </div>
                         
           </div>
           <div class="modal-footer">
              <button type="submit" name="editUser" class="btn btn-green buttonActionsSystem" id="buttonActions">UPDATE</button>
              <button type="button" data-dismiss="modal" class="btn btn-danger">CLOSE</button>
           </div>
           </form>
        </div>
     </div>
  </div>






    
    
    

    <div id="myModalClientEdit" role="dialog" aria-labelledby="myModalLabelLarge" aria-hidden="true" class="modal fade">
       <div class="modal-dialog modal-lg">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                   <span aria-hidden="true">&times;</span>
                </button>
                <h4 id="myModalLabelLarge" class="modal-title">EDIT USER</h4>
                <p style="color:#f05050"><strong>Note:</strong>If you do not want to change the password leave it blank.</p>
             </div>
            <form method="POST" action="https://rdx.indel.co/users/client/edit" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data"><input name="_token" type="hidden" value="PGBpit0vQZTq965m7yo1oCPQqIPLNNtDKWDMngqW">
             <div class="modal-body">
               <div class="row">
                   <div class="col-md-8">
                     <div class="form-group">
                        <label class="col-sm-3 control-label">User Name</label>
                        <div class="col-sm-9">
                           <span id="displayMessage"></span>
                           <input type="hidden" name="user_id" id="user_id_client" value="">
                           <input type="hidden" name="branch_id" value="" id="branch_id_client">
                           <input type="text" name="user_name" id="user_name_client" required="required" placeholder="User Name" class="form-control" readonly>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Full Name</label>
                        <div class="col-sm-9">
                           <input id="full_name_client" type="text" name="full_name" placeholder="Full Name" class="form-control">
                        </div>
                     </div>
                     <div class="form-group" style="display:none">
                        <label class="col-sm-3 control-label">Email ID</label>
                        <div class="col-sm-9">
                           <input id="email_id_client" type="text" name="email" placeholder="example@mail.com" class="form-control">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Change Password</label>
                        <div class="col-sm-9">
                           <input type="password" name="password" placeholder="password" id="password_client" class="form-control" autocomplete="new-password">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Confirm Password</label>
                        <div class="col-sm-9">
                          <span class="passwordMessage"></span>
                           <input type="password" name="confirm_password" placeholder="Confirm Password" id="re_password_client" class="form-control">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Image</label>
                        <div class="col-sm-9">
                           <input type="file" name="user_image" data-classbutton="btn btn-default" data-classinput="form-control inline" class="form-control filestyle">
                        </div>
                     </div>
                   </div>
                   <div class="col-sm-4">
                     <div class="">
                       <img id="placeStaffImageHereClient" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" class="img-circle" style="width:100%;height:100%">
                     </div>
                   </div>
               </div>
             </div>
             <div class="modal-footer">
             <button type="submit" name="editUser" class="btn btn-green" id="buttonActionsClient">UPDATE</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger">CLOSE</button>
             </div>
             </form>
          </div>
       </div>
    </div>




<div id="myModalStaffEdit" role="dialog" aria-labelledby="myModalLabelLarge" aria-hidden="true" class="modal fade">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
               <span aria-hidden="true">&times;</span>
            </button>
                          <h4 id="myModalLabelLarge" class="modal-title">EDIT USER</h4>
              <p style="color:#f05050"><strong>Note:</strong>If you do not want to change the password leave it blank.</p>
                     </div>
        <form method="POST" action="https://rdx.indel.co/users/staff/edit" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data"><input name="_token" type="hidden" value="PGBpit0vQZTq965m7yo1oCPQqIPLNNtDKWDMngqW">
         <div class="modal-body">
           <div class="row">
               <div class="col-md-8">
                 <div class="form-group">
                    <label class="col-sm-3 control-label">User Name</label>
                    <div class="col-sm-9">
                       <span id="displayMessage"></span>
                       <input type="hidden" name="user_id" id="user_id_staff" value="">
                       <input type="hidden" name="branch_id" id="user_branch_id_staff" value="">
                       <input type="text" name="user_name" id="user_name_staff" required="required" placeholder="User Name" class="form-control" readonly>
                    </div>
                 </div>
                 <div class="form-group">
                    <label class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                       <input id="full_name_staff" type="text" name="full_name" placeholder="Full Name" class="form-control" readonly>
                    </div>
                 </div>
                 <div class="form-group" style="display:none">
                    <label class="col-sm-3 control-label">Email ID</label>
                    <div class="col-sm-9">
                       <input id="email_id_staff" type="text" name="email" placeholder="example@mail.com" class="form-control">
                    </div>
                 </div>
                                    <div class="form-group">
                      <label class="col-sm-3 control-label">Change Password</label>
                      <div class="col-sm-9">
                         <input type="password" name="password" placeholder="password" id="password_" class="form-control" autocomplete="new-password">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-sm-3 control-label">Confirm Password</label>
                      <div class="col-sm-9">
                        <span class="passwordMessage"></span>
                         <input type="password" name="confirm_password" placeholder="Confirm Password" id="re_password_" class="form-control">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-sm-3 control-label">Image</label>
                      <div class="col-sm-9">
                         <input type="file" name="user_image" data-classbutton="btn btn-default" data-classinput="form-control inline" class="form-control filestyle">
                      </div>
                   </div>
                                </div>
               <div class="col-sm-4">
                 <div class="">
                   <img id="placeStaffImageHere" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" class="img-circle" style="width:100%;height:100%">
                 </div>
               </div>
           </div>
         </div>
         <div class="modal-footer">
                          <button type="submit" name="editUser" class="btn btn-green" id="buttonActionsStaff">UPDATE</button>
              <button type="button" data-dismiss="modal" class="btn btn-danger">CLOSE</button>
                     </div>
         </form>
      </div>
   </div>
</div>

  <!-- Modal For deleting the User data-->
  <div id="myModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabelLarge" aria-hidden="true" class="modal fade">
     <div class="modal-dialog modal-lg">
        <div class="modal-content">
           <div class="modal-header">
              <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                 <span aria-hidden="true">&times;</span>
              </button>
              <h4 id="myModalLabelLarge" class="modal-title">DELETE USER</h4>
           </div>
           <form method="POST" action="https://rdx.indel.co/users/delete" accept-charset="UTF-8"><input name="_token" type="hidden" value="PGBpit0vQZTq965m7yo1oCPQqIPLNNtDKWDMngqW">
           <div class="modal-body">
             <div class="panel b text-center">
                  <div class="panel-body">
                    <input type="hidden" name="branch_id" id="branchIdDelete" value="">
                      <img id="putImageHere" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" class="img-circle thumb64" style="width: 64px !important;height: 64px !important;">
                     <p class="h4 text-bold mb0" id="putFullName"></p>
                     <p id="putGroupName"></p>
                     <p id="putJoinedON"></p>
                  </div>
                  <div class="panel-body bt">
                    <h4 style="color:#f05050">Are you sure to delete? <br> You will not be able to recover this user again!</h4>
                    <input type="hidden" name="user_id" id="user_id_del">
                  </div>
               </div>
           </div>
           <div class="modal-footer">
           <button type="submit" name="deleteSystemUser" class="btn btn-green">CONFIRM</button>
              <button type="button" data-dismiss="modal" class="btn btn-danger">CLOSE</button>
           </div>
           </form>
        </div>
     </div>
  </div>

  
      
  

  <div id="myModalStaffDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabelLarge" aria-hidden="true" class="modal fade">
     <div class="modal-dialog modal-lg">
        <div class="modal-content">
           <div class="modal-header">
              <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                 <span aria-hidden="true">&times;</span>
              </button>
              <h4 id="myModalLabelLarge" class="modal-title">DELETE USER</h4>
           </div>
           <form method="POST" action="https://rdx.indel.co/users/staff/delete" accept-charset="UTF-8"><input name="_token" type="hidden" value="PGBpit0vQZTq965m7yo1oCPQqIPLNNtDKWDMngqW">
           <div class="modal-body">
             <div class="panel b text-center">
                  <div class="panel-body">
                      <img id="putStaffImageHereDelete" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" class="img-circle thumb64" style="width: 64px !important;height: 64px !important;">
                     <p class="h4 text-bold mb0" id="putStaffFullNameDelete"></p>
                     <p>Staff User</p>
                     <p id="putJoinedONStaffUser"></p>
                  </div>
                  <div class="panel-body bt">
                    <h4 style="color:#f05050">Are you sure to delete? <br> You will not be able to recover this user again!</h4>
                    <input type="hidden" name="user_id" id="user_id_staff_del">
                    <input type="hidden" name="branch_id" id="user_branch_id_staff_delete" value="">
                  </div>
               </div>
           </div>
           <div class="modal-footer">
           <button type="submit" name="deleteStaffUser" class="btn btn-green">CONFIRM</button>
              <button type="button" data-dismiss="modal" class="btn btn-danger">CLOSE</button>
           </div>
           </form>
        </div>
     </div>
  </div>

  
      
  
  <!-- Modal For deleting the User data-->
  <div id="myModalClientDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabelLarge" aria-hidden="true" class="modal fade">
     <div class="modal-dialog modal-lg">
        <div class="modal-content">
           <div class="modal-header">
              <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                 <span aria-hidden="true">&times;</span>
              </button>
              <h4 id="myModalLabelLarge" class="modal-title">DELETE USER</h4>
           </div>
           <form method="POST" action="https://rdx.indel.co/users/client/delete" accept-charset="UTF-8"><input name="_token" type="hidden" value="PGBpit0vQZTq965m7yo1oCPQqIPLNNtDKWDMngqW">
           <div class="modal-body">
             <div class="panel b text-center">
                  <div class="panel-body">

                      <img id="putClientImageHereDelete" src="https://rdx.indel.co/asset/images/user_images/system/dummy.png" class="img-circle thumb64" style="width: 64px !important;height: 64px !important;">
                     <p class="h4 text-bold mb0" id="putClientFullNameDelete"></p>
                     <p>Client User</p>
                     <p id="putJoinedONClientUser"></p>
                  </div>
                  <div class="panel-body bt">
                    <h4 style="color:#f05050">Are you sure to delete? <br> You will not be able to recover this user again!</h4>
                    <input type="hidden" name="user_id" id="user_id_client_del">
                    <input type="hidden" name="branch_id" id="branch_id_client_del">
                  </div>
               </div>
           </div>
           <div class="modal-footer">
             <button type="submit" name="deleteClientUser" class="btn btn-green">CONFIRM</button>
              <button type="button" data-dismiss="modal" class="btn btn-danger">CLOSE</button>
           </div>
           </form>
        </div>
     </div>
  </div>
<script type="text/javascript">
  $(function(){
    $('.datatableOrdered').DataTable();
  });
  $('.select2-1').select2({
      theme: 'bootstrap'
  });
</script>
<script type="text/javascript">
var group_selction = '<div class="form-group">'+
                         '<label class="col-sm-3 control-label">Group</label>'+
                         '<div class="col-sm-9">'+
                            '<select class="select2-1" name="user_role" id="user_role" style="width:100%" required>'+
                              '<option value="">Select Group</option>'+
                                                                                                                                                                                                                                '<option value="2">Controller</option>'+
                                                                                                                                '<option value="3">Employee</option>'+
                                                                                          '</select>'+
                         '</div>'+
                      '</div>';
  var branches = '';
    branches = '<div class="col-sm-12">'+
                                      '<div class="form-group">'+
                                                                            '<label class="col-sm-2 control-label">Select Branhces</label>'+
                                                    '<div class="col-sm-5">'+
                            '<div class="checkbox c-checkbox needsclick">'+
                               '<label class="needsclick">'+
                                  '<input type="checkbox" name="branches[]" value="1" class="needsclick trainingControl" id="branchSelected1">'+
                                  '<span class="fa fa-check"></span>'+
                                  'Head Office'+
                                '</label>'+
                            '</div>'+
                          '</div>'+
                                                                 '</div>'+
                '</div>';
  
  $('.clickEditControl').on('click',function(){
    var user_id = $(this).attr('alt');
    var image_val = $('#systemUserImage'+user_id).attr('src');
    var full_name = $('#systemUserFullName'+user_id).text().trim();
    var email = $('#systemUserEmail'+user_id).val();
    var user_name = $('#systemUserUserName'+user_id).val();
    var group_id = $('#systemUserGroup'+user_id).val();
    var branch_id = $('#branchID'+user_id).val();

    $('#password').val('');
    $('#re_password').val('');
    $('#user_name').val(user_name);
    $('#full_name').val(full_name);
    $('#email_id').val(email);
    $('#user_id').val(user_id);
    $('#branchIDEdit').val(branch_id);
    $('#placeImageHere').attr("src",image_val);
    //$('#user_role').val(group_id).change();
    var do_or_donot = $('#systemCanOrCantNotBe'+user_id).val();
    $('#can_be_e').val(do_or_donot);
    if (do_or_donot == '1') {
      $('.removeDivIf').html('');
    } else {
      // add group div and change values to it
      //$('.removeDivIf').html(group_selction);
      // select all the groups from the concerned branch and show them
      $.ajax({
        url: "https://rdx.indel.co/users/checkNextOptionsGroups",
        type:"POST",
        data: {'branch_id':branch_id, '_token': $('input[name=_token]').val() },
        success:function(data){
            // get branches here and attach it to the place where needed
            if (data != '') {
              var dataDecoded = jQuery.parseJSON(data);
              var groups = '<div class="form-group">'+
                               '<label class="col-sm-3 control-label">Group</label>'+
                               '<div class="col-sm-9">'+
                                 '<select name="user_role" id="user_role" class="select2-1 form-control" style="width:100%" required>';
                  groups += '<option value="">Select Group...</option>';
              for (var i = 0; i < dataDecoded.length; i++) {
                if (dataDecoded[i]['group_id'] == '1') {
                  if ("11" == '1' || "1" == '1') {
                    groups += '<option value="'+dataDecoded[i]['group_id']+'">'+dataDecoded[i]['group_name']+'</option>';
                  }
                }else{
                  groups += '<option value="'+dataDecoded[i]['group_id']+'">'+dataDecoded[i]['group_name']+'</option>';
                }
              }
              groups        += '</select>'+
                            '</div>'+
                        '<div class="col-sm-4"></div></div>';
              $('.removeDivIf').html(groups);
              $('#user_role').val(group_id).change();
              $('.select2-1').select2({ theme: 'bootstrap' });
            }
        },error:function(){
            swal("Warning!", "Something went wrong.", "success");
        }
      });
    }
    if (user_id == '1') {
      $('#removeTheDivIfUserIsSuperAdmin').html('');
    } else if("1" == '1') {
      $('#removeTheDivIfUserIsSuperAdmin').html(branches);
    } else{
      $('#removeTheDivIfUserIsSuperAdmin').html('');
    }
    // retrive the information for branches alloted

    $.ajax({
      url: "https://rdx.indel.co/users/getAllowdBranches",
      type:"POST",
      data: {'user_id':user_id, '_token': $('input[name=_token]').val() },
      success:function(data){
          // get employees here and attach it to the place where needed
          if (data != '') {
            var dataDecoded = jQuery.parseJSON(data);
            for (var i = 0; i < dataDecoded.length; i++) {
              $('#branchSelected'+dataDecoded[i]['branch_id']).attr("checked","checked");
            }
          }
      },error:function(){
          swal("Warning!", "Something went wrong.", "success");
      }
    });
    $('#branchSelected'+branch_id).attr("checked","checked");
    $('#branchSelected'+branch_id).attr("disabled","disabled");
  });

  $('.viewControl').on('click',function(){
    var user_id = $(this).attr('alt');
    var image_val = $('#systemUserImage'+user_id).attr('src');
    var full_name = $('#systemUserFullName'+user_id).text().trim();
    var email = $('#systemUserEmail'+user_id).val();
    var user_name = $('#systemUserUserName'+user_id).val();
    var group = $('#systemUserGroupNmae'+user_id).text().trim();
    var joined_on = $('#systemUserJoined'+user_id).val();
    var branch_name_view = $('#branch_name_for_viewing'+user_id).val();
    $('#password').val('');
    $('#re_password').val('');
    $('#user_name_view').val(user_name);
    $('#full_name_view').val(full_name);
    $('#email_id_view').val(email);
    $('#group_view').val(group);
    $('#branch_name_view').val(branch_name_view);
    $('#joined_on_view').val(joined_on);
    $('#placeStaffImageHereView').attr("src",image_val);
    // var do_or_donot = $('#systemCanOrCantNotBe'+user_id).val();
    // $('#can_be_e').val(do_or_donot);
    // if (do_or_donot == '1') {
    //   $('.removeDivIf').html('');
    // }
  });

  $('#buttonActions').on('click',function(e){
    var password = $('#password').val();
    var re_password = $('#re_password').val();
    if (password != '' || re_password != '') {
      if (password != re_password) {
        e.preventDefault();
        swal("Warning!", "Password matching failed.", "error");
      }
    }
  });

  $('.clickDeleteControl').on('click',function(){
    var user_id = $(this).attr('alt');
    var group_name = $('#systemUserGroupNmae'+user_id).text().trim();
    var image_src = $('#systemUserImage'+user_id).attr('src');
    var full_name = $('#systemUserFullName'+user_id).text().trim();
    var user_name = $('#systemUserUserName'+user_id).val();
    var joined_on = $('#systemUserJoined'+user_id).val();
    var branch_id = $('#branchID'+user_id).val();
    $('#branchIdDelete').val(branch_id);
    $('#putImageHere').attr("src",image_src);
    $('#putFullName').text("Name: "+full_name);
    $('#putGroupName').text("Group: "+group_name);
    $('#putJoinedON').text("Joined on: "+joined_on);
    $('#user_id_del').val(user_id);
  });

  $('#clickingControl').on('click','.clickStaffEditControl',function(){
    var user_id = $(this).attr('alt');
    var full_name = $('#staffUserFullName'+user_id).text().trim();
    var user_name = $('#staffUserUserName'+user_id).val();
    var user_email = $('#staffUserEmail'+user_id).text().trim();
    var image_src = $('#staffImage'+user_id).attr('src');
    var branch_id = $('#staffBranchID'+user_id).val();

    $('#user_branch_id_staff').val(branch_id);
    $('#user_id_staff').val(user_id);
    $('#user_name_staff').val(user_name);
    $('#full_name_staff').val(full_name);
    $('#email_id_staff').val(user_email);
    $('#placeStaffImageHere').attr("src",image_src);
  });

  $('.clickStaffDeleteControl').on('click',function(){
    var user_id = $(this).attr('alt');
    var full_name = $('#staffUserFullName'+user_id).text().trim();
    var user_name = $('#staffUserUserName'+user_id).val();
    var user_joined = $('#staffJoinedOn'+user_id).val();
    var image_src = $('#staffImage'+user_id).attr('src');
    var branch_id = $('#staffBranchID'+user_id).val();

    $('#user_branch_id_staff_delete').val(branch_id);
    $('#user_id_staff_del').val(user_id);
    $('#user_name_staff').text("User Name"+user_name);
    $('#putStaffFullNameDelete').text("Full Name: "+full_name);
    $('#putJoinedONStaffUser').text("Joined on: "+user_joined);
    $('#putStaffImageHereDelete').attr("src",image_src);
  });

  $('.clientEditControl').on('click',function(){
    var user_id = $(this).attr('alt');
    var user_name = $('#clientUserUserName'+user_id).val();
    var join_date = $('#clientUserJoined'+user_id).val();
    var image_src = $('#clientImageSource'+user_id).attr('src');
    var email_id = $('#clientUserEmailId'+user_id).text().trim();
    var full_name = $('#userNameClient'+user_id).text().trim();
    var branch_id = $('#clientUserBranchID'+user_id).val();
    $('#branch_id_client').val(branch_id);
    $('#user_id_client').val(user_id);
    $('#user_name_client').val(user_name);
    $('#full_name_client').val(full_name);
    $('#email_id_client').val(email_id);
    $('#placeStaffImageHereClient').attr("src",image_src);
  });

  $('#buttonActionsClient').on('click',function(e){
    var password = $('#password_client').val();
    var re_password = $('#re_password_client').val();
    if (password != '' || re_password != '') {
      if (password != re_password) {
        e.preventDefault();
        swal("Warning!", "Password matching failed.", "error");
      }
    }
  });

  $('.clientUserDeleteControl').on('click',function(){
      var user_id = $(this).attr('alt');
      var user_name = $('#clientUserUserName'+user_id).val();
      var join_date = $('#clientUserJoined'+user_id).val();
      var image_src = $('#clientImageSource'+user_id).attr('src');
      var email_id = $('#clientUserEmailId'+user_id).text().trim();
      var full_name = $('#userNameClient'+user_id).text().trim();
      var branch_id = $('#clientUserBranchID'+user_id).val();
      $('#putClientImageHereDelete').attr("src",image_src);
      $('#putClientFullNameDelete').text("Client Name: "+full_name);
      $('#putJoinedONClientUser').text("Joined On: "+join_date);
      $('#user_id_client_del').val(user_id);
      $('#branch_id_client_del').val(branch_id);
  });
  $('.buttonActionsSystem').on('click',function(e){
    var full_name = $('#full_name').val();
    if (full_name.trim() == '') {
      e.preventDefault();
      swal("Warning!", "Full name cannot be empty!", "error");
    }
  });
</script>
   <script type="text/javascript">
   // Here date companrison /
   $('.dateCheck').on('click',function(e){
     var f = $('.firstDate').val().split('-');
     var s = $('.secondDate').val().split('-');
     var firstDate = new Date(f[2]+'-'+f[1]+'-'+f[0]);
     var secondDate = new Date(s[2]+'-'+s[1]+'-'+s[0]);
     if (firstDate.getTime() > secondDate.getTime()) {
       $('.placeErrorDates').html('');
       $('.placeErrorDates').html('<span style="color:red">'+$('.secondLabel').text()+' can not be less than '+$('.firstLabel').text()+'</span>');
       e.preventDefault();
       $('.secondDate').focus();
     } else {
       $('.placeErrorDates').html('');
     }
   });

   $('.dateCheck0').on('click',function(e){
     var f = $('.firstDate0').val().split('-');
     var s = $('.secondDate0').val().split('-');
     var firstDate = new Date(f[2]+'-'+f[1]+'-'+f[0]);
     var secondDate = new Date(s[2]+'-'+s[1]+'-'+s[0]);
     if (firstDate.getTime() > secondDate.getTime()) {
       $('.placeErrorDates0').html('');
       $('.placeErrorDates0').html('<span style="color:red">'+$('.secondLabel0').text()+' can not be less than '+$('.firstLabel0').text()+'</span>');
       $('.secondDate0').focus();
       e.preventDefault();
     } else {
       $('.placeErrorDates0').html('');
     }
   });
    //  $(document).ready(function(){
    //    setTimeout(function () {
    //      window.location.replace("https://rdx.indel.co/logout");
    //    }, 3600000);
    //  });
   </script>
   <script type="text/javascript">
       $('.select2-1').select2({
           theme: 'bootstrap'
       });

       $('.select2-3').select2({
           theme: 'bootstrap'
       });
       $('.datepicker').datepicker({
          orientation: "bottom auto",
          daysOfWeekHighlighted: "0",
          weekStart: 1,
          format: "dd-mm-yyyy",
          autoclose: true,
          todayHighlight: true,
          toggleActive: true
      });

      $('.input-daterange').datepicker({
          format: "dd-mm-yyyy",
          orientation: "bottom auto",
          daysOfWeekHighlighted: "0",
          weekStart: 1,
          autoclose: true,
          todayHighlight: true,
          toggleActive: true
      });

      $('.datetimepicker').datetimepicker({
          format: 'LT'
      });

      $('.alpha_numeric_validation').on('keypress',function(e) {
        var code =e.keyCode || e.which;
        if ((code == 8) || (code >= 48 && code <= 57) || (code == 43) || (code >= 97 && code <= 122) || (code == 20) || (code == 16) || (code == 32) || (code >= 65 && code <= 90)) {
          return true;
        } else {
          return false;
        }
      });

      $('.alphabets_validation').on('keypress',function(e) {
        var code =e.keyCode || e.which;
        if ((code == 8) || (code >= 97 && code <= 122) || (code == 20) || (code == 16) || (code == 32) || (code >= 65 && code <= 90)) {
          return true;
        } else {
          return false;
        }
      });

      $('.numeric_validation').on('keypress',function(e) {
        var code =e.keyCode || e.which;
        if ((code == 8) || (code >= 48 && code <= 57) || (code == 32)) {
          return true;
        } else {
          return false;
        }
      });

      var checking_one_point = true;
      var number_of_points = 0;
      var digits_after_point = 0;
      $('.payment_validation_with_point').on('keypress',function(e) {
        var code =e.keyCode || e.which;
        var value_of = $(this).val();
        checking_one_point = true;
        for (var i = 0; i < value_of.length; i++) {
          if (value_of[i] == '.') {
            checking_one_point = false;
          }
          if (checking_one_point == false) {
            digits_after_point += 1;
          }
        }
        // console.log(code);
        if (code == 8) {
          digits_after_point = 0;
          return true;
        } else if (checking_one_point == false && digits_after_point > 2) {
          digits_after_point = 0;
          return false;
        } else if (code == 46 && checking_one_point == true) {
          digits_after_point = 0;
          return true;
        } else if (((code == 8) || (code >= 48 && code <= 57))) {
          digits_after_point = 0;
          return true;
        } else {
          digits_after_point = 0;
          return false;
        }
      });

      $('.contact_no_validation').on('keypress',function(e) {
        var code =e.keyCode || e.which;
        if ((code == 8) || (code >= 48 && code <= 57) || (code == 43)) {
          return true;
        } else {
          return false;
        }
      });

      $('.form-control').on('keypress',function(e) {
        var code =e.keyCode || e.which;
        if (code == 222 || code == 34 || code == 39 || code == 38) {
          return false;
        } else {
          return true;
        }
      });

      $('.text_area_validation').on('keypress',function(e) {
        var code =e.keyCode || e.which;
        if ((code == 8) || (code >= 48 && code <= 57)) {
          return true;
        } else {
          return false;
        }
      });
      $(document).ready(function(){
        $.ajax({
          url: "https://rdx.indel.co/auto/bookOnOff",
          type: "POST",
          data:{'auto':'auto', '_token': $('input[name=_token]').val()},
          success:function(result){
            // nothing to show up
          },
          error:function(){
            // nothing to do with
          }
        });
      });
      // getting the data from the website of licenses //

      // $(document).ready(function(){
      //   $.ajax({
      //     url: "https://services.sia.homeoffice.gov.uk/rolh/PublicRegister/SearchPublicRegisterByLicence",
      //     type: "POST",
      //     data:{'LicenseNo':'1019178839443075','Search':'Search'},
      //     success:function(result){
      //       // nothing to show up
      //       console.log(result);
      //     },
      //     error:function(){
      //       // nothing to do with
      //     }
      //   });
      // });
   </script>
   <script>
      $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
          $(this).next('ul').toggle();
          e.stopPropagation();
          e.preventDefault();
        });
      });
  </script>

@endsection