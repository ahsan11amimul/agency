 <!-- fixed-top-->
   <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="/dashboard"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item"><a class="navbar-brand" href="/dashboard">
            <!-- <h1 style="margin-left: 10px;font-weight: bold;">Lyonn Agency</h1> -->
            <img style="width: 200px;" class="brand-logo logo-hide1" alt=" admin logo" src="./app-assets/images/logo-ag.png">
            <!-- <h3 style="margin-left: 7px;" class="brand-text" style="color: #000;"><img class="brand-logo logo-hide" style="width: 116px;" alt="admin logo" src="./app-assets/images/logo.png"></h3> -->
          </a></li>
          <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <!-- <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i style="color:#000" class="ft-menu">         </i></a></li> -->
            <div class="btn-group">
                <a href="/dashboard" class="btn btn-secondary" style="background-color: transparent!important;border: none;">
                    <!-- <i class="fa fa-border-all"></i>  -->
                &nbsp; Orders
              </a>
            </div>
            &nbsp;
           
            
            <div class="btn-group">
              <a href="/purchase_order" class="btn btn-secondary" style="background-color: transparent!important;border: none;">
                <!-- <i class="fa fa-bar-chart"></i>  -->
                &nbsp;Purchase Orders
              </a>
            </div>
             <div class="btn-group">
                <a href="/users" class="btn btn-secondary" style="background-color: transparent!important;border: none;">
                    <!-- <i class="fa fa-border-all"></i>  -->
                &nbsp; Users
              </a>
            </div>
          
            &nbsp;
            <div class="btn-group">
              <a href="/jobs" class="btn btn-secondary" style="background-color: transparent!important;border: none;">
                <!-- <i class="fa fa-bar-chart"></i>  -->
                &nbsp;Applied Jobs
              </a>
            </div>
            &nbsp;
            <div class="btn-group">
              <a href="/job_applications" class="btn btn-secondary" style="background-color: transparent!important;border: none;">
                <!-- <i class="fa fa-bar-chart"></i>  -->
                &nbsp;Job Applications
              </a>
            </div>
            &nbsp;
            <div class="btn-group">
              <a href="/services" class="btn btn-secondary" style="background-color: transparent!important;border: none;">
                <!-- <i class="fa fa-bar-chart"></i>  -->
                &nbsp;Services
              </a>
            </div>
            &nbsp;
            <div class="btn-group">
              <a href="/service_areas" class="btn btn-secondary" style="background-color: transparent!important;border: none;">
                <!-- <i class="fa fa-bar-chart"></i>  -->
                &nbsp;Service Areas
              </a>
            </div>
            &nbsp;
           
          </ul>
           <ul class="nav navbar-nav float-right"> 
             
              &nbsp;&nbsp;  
              <li class="dropdown dropdown-user nav-item">
                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span style="color: #000;background: #fff;font-weight: bold;width: 40px;padding: 13px 6px;" class="avatar avatar-online">
                {{auth()->user()->username}}
              </span>
            </a>
             <div class="dropdown-menu dropdown-menu-right">
                  {{-- <a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a>
                    <!-- <a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="user-cards.html"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="chat-application.html"><i class="ft-message-square"></i> Chats</a> -->
                  <div class="dropdown-divider"></div> --}}
                  <a class="dropdown-item" href="/logout"><i class="ft-power"></i> Logout</a>
                </div>
           </ul>
         
        </div>
      </div>
    </div>
  </nav>