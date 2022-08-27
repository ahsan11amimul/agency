 <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a class="navbar-brand" href="/dashboard">
              <!-- <h1 style="margin-left: 10px;font-weight: bold;">Lyonn Agency</h1> -->
              <img style="width: 200px;" class="brand-logo logo-hide1" alt=" admin logo" src="{{asset('app-assets/images/logo-ag.png')}}">
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
                  &nbsp; Dashboard
                </a>
              </div>
              &nbsp;
              <!-- <div class="btn-group">
                  <a href="contacts.html" class="btn btn-secondary" style="background-color: transparent!important;border: none;">
             
                   &nbsp;Contacts
                  </a>
              </div>
              &nbsp; -->
              <div class="btn-group">
                <a href="/company_profile" class="btn btn-secondary" style="background-color: transparent!important;border: none;">
                  <!-- <i class="fa fa-bar-chart"></i>  -->
                  &nbsp;Company Profile
                </a>
              </div>
              &nbsp;
              <div class="btn-group">
                <a href="/job_portal" class="btn btn-secondary" style="background-color: transparent!important;border: none;">
                  <!-- <i class="fa fa-bar-chart"></i>  -->
                  &nbsp;Job Portal
                </a>
              </div>
              &nbsp;
              <div class="btn-group">
                <a href="/new_opportunity" class="btn btn-secondary" style="background-color: transparent!important;border: none;">
                  <!-- <i class="fa fa-bar-chart"></i>  -->
                  &nbsp;New Opportunities
                </a>
              </div>
              &nbsp;
              <!-- <div class="btn-group">
                  <a href="servicecapabilities.html" class="btn btn-secondary" style="background-color: transparent!important;border: none;">
                     
                  &nbsp;Service Capabilities
              </a>
              </div>
              &nbsp; -->
              <div class="btn-group">
                  <a href="/service_available" class="btn btn-secondary" style="background-color: transparent!important;border: none;">
                      <!-- <i class="fa fa-info-circle"></i>  -->
                  &nbsp;Services Available
              </a>
              </div>
              <!-- <div class="btn-group">
                  <a href="insurance.html" class="btn btn-secondary" style="background-color: transparent!important;border: none;">
             
                  &nbsp;Insurance Information
              </a>
              </div> -->
             
              <div class="btn-group">
                  <a href="scheduling.html" class="btn btn-secondary" style="background-color: transparent!important;border: none;">
                      <!-- <i class="fa fa-info-circle"></i>  -->
                  <!-- &nbsp;Scheduling -->
              </a>
              </div>
               {{-- &nbsp;
              <div class="btn-group">
                <button class="btn btn-primary" style="background-color: transparent!important;border: none;color: #000;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-bell"></i> 
                </button>
              </div>  
              &nbsp;&nbsp;  
              <div class="btn-group">
                <button class="btn btn-primary" style="background-color: transparent!important;border: none;color: #000;position: relative;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-search" style="position: absolute;right: 20px;top: 18px;"></i> 
                  <input style="border-radius: 20px;padding: 5px 10px;color: #000!important;background: #fff;outline: none;border: 1px solid lightgray;" class="" type="text"/>
                </button>
              </div>  
              &nbsp;&nbsp;  
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span style="color: #000;background: #fff;font-weight: bold;width: 40px;padding: 13px 6px;" class="avatar avatar-online">A.C</span></a>
           --}}
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