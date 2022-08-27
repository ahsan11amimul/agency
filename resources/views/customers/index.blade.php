@extends('admin_layouts.app')
@section('title','Admin User List')
    
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
                        <div class="col-md-12 mx-auto">
                            {{-- <div class="mt-2">
                                <div class="d-flex justify-content-end">
                                    
                                     <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal02" class="btn btn-primary">Add New Job</button>
                                </div>
                            </div> --}}
                           
                            <div class="mt-1">
                                <div class="table-responsive">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            
                                            
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Job Applied</th>
                                            <th>Added</th>
                                            <th>Updated</th>
                                            
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                        
                                            
                                            <td>{{$user->username}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{App\Models\JobApply::where('user_id',$user->id)->get()->count()}}</td>
                                            
                                          
                                            <td>{{ date('m-d-Y',strtotime($user->created_at)) }}</td>
                                            <td>{{ date('m-d-Y',strtotime($user->updated_at)) }}</td>
                                           
                                           
                                            <td class="d-flex">
                                                
                                                <form action="/users/{{$user->id}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                             </td>
                                           </tr>
                                        @endforeach
                                    </tbody>
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

        </div>
      </div>
    </div>
 
 
<script>
    
</script>
@endsection