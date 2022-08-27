@extends('admin_layouts.app')
@section('title','Admin Purchase Order')
    
@section('content')
@include('admin_layouts.partials.navbar')
 <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar main-content-01" data-open="click" data-menu="vertical-menu" data-col="2-columns">
    <div class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <!-- <li class=" nav-item"><a href="index.html"><i class="icon-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span><span class="badge badge badge-info badge-pill float-right mr-2">5</span></a>
            <ul class="menu-content">
              <li class="active"><a class="menu-item" href="dashboard-ecommerce.html" data-i18n="nav.dash.ecommerce">eCommerce</a>
              </li>
              <li><a class="menu-item" href="dashboard-project.html" data-i18n="nav.dash.project">Project</a>
              </li>
              <li><a class="menu-item" href="dashboard-analytics.html" data-i18n="nav.dash.analytics">Analytics</a>
              </li>
              <li><a class="menu-item" href="dashboard-crm.html" data-i18n="nav.dash.crm">CRM</a>
              </li>
              <li><a class="menu-item" href="dashboard-fitness.html" data-i18n="nav.dash.fitness">Fitness</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-screen-tablet"></i><span class="menu-title" data-i18n="nav.templates.main">Templates</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#" data-i18n="nav.templates.vert.main">Vertical</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="../vertical-menu-template" data-i18n="nav.templates.vert.classic_menu">Classic Menu</a>
                  </li>
                  <li><a class="menu-item" href="../vertical-compact-menu-template" data-i18n="nav.templates.vert.compact_menu">Compact Menu</a>
                  </li>
                  <li><a class="menu-item" href="../vertical-content-menu-template" data-i18n="nav.templates.vert.content_menu">Content Menu</a>
                  </li>
                  <li><a class="menu-item" href="../vertical-overlay-menu-template" data-i18n="nav.templates.vert.overlay_menu">Overlay Menu</a>
                  </li>
                  <li><a class="menu-item" href="../vertical-multi-level-menu-template" data-i18n="nav.templates.vert.multi_level_menu">Multi-level Menu</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="#" data-i18n="nav.templates.horz.main">Horizontal</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="../horizontal-menu-template" data-i18n="nav.templates.horz.classic">Classic</a>
                  </li>
                  <li><a class="menu-item" href="../horizontal-top-icon-menu-template" data-i18n="nav.templates.horz.top_icon">Top Icon</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          -->
          <!-- <li class=" navigation-header"><span data-i18n="nav.category.pages">Client Information</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Pages"></i>
          </li>
          <li class=" nav-item"><a href="email-application.html"><span class="menu-title" data-i18n="nav.email-application.main">Required Information</span></a></li>
          <li class=" nav-item"><a href="client-onboard-services-required.html"><span class="menu-title" data-i18n="nav.email-application.main">Services Required </span></a></li>
          <li class=" nav-item"><a href="email-application.html"><span class="menu-title" data-i18n="nav.email-application.main">Internal</span></a></li>
          <li class=" nav-item"><a href="client-onboard.html"><span class="menu-title" data-i18n="nav.email-application.main">Accounts & Returns Details</span></a></li>
          <li class=" nav-item"><a href="email-application.html"><span class="menu-title" data-i18n="nav.email-application.main">Staff Tasks</span></a></li>
          <li class=" nav-item"><a href="email-application.html"><span class="menu-title" data-i18n="nav.email-application.main">Vat Details</span></a></li>
          <li class=" nav-item"><a href="email-application.html"><span class="menu-title" data-i18n="nav.email-application.main">Staff Task Monitor</span></a></li>
          <li class=" nav-item"><a href="email-application.html"><span class="menu-title" data-i18n="nav.email-application.main">Business Details</span></a></li>
          <li class=" nav-item"><a href="email-application.html"><span class="menu-title" data-i18n="nav.email-application.main">Main Contact</span></a></li>
          <li class=" nav-item"><a href="email-application.html"><span class="menu-title" data-i18n="nav.email-application.main">Secondary Contact</span></a></li>
          <li class=" nav-item"><a href="email-application.html"><span class="menu-title" data-i18n="nav.email-application.main">Income Details</span></a></li>
          <li class=" nav-item"><a href="email-application.html"><span class="menu-title" data-i18n="nav.email-application.main">Accountants</span></a></li>
          <li class=" nav-item"><a href="email-application.html"><span class="menu-title" data-i18n="nav.email-application.main">Other Details</span></a></li>
          <li class=" nav-item"><a href="email-application.html"><span class="menu-title" data-i18n="nav.email-application.main">Details</span></a></li>
          <li class=" nav-item"><a href="email-application.html"><span class="menu-title" data-i18n="nav.email-application.main">Agent Authorization</span></a></li>
          <li class=" nav-item"><a href="email-application.html"><span class="menu-title" data-i18n="nav.email-application.main">Organization</span></a></li> -->
          
       
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
                        <div class="col-md-8 mx-auto">
                            <div class="mt-1">
                                <div class="text-center">
                                    <h2>Purchase Order Request Form</h2>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Date:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Requested By:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Account # / Name:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">PurchaseFunds Apprvd:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-8">
                                        <div class="mt-1">
                                            <label for="">Will this chargeneed to be transferred to anothor account in the fture?</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="radio" name="radio1">&nbsp;Yes&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="radio1">&nbsp;No&nbsp;&nbsp;&nbsp;
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Vendor:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Quote No:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Address:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mt-1">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Contact Person:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Phone No:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <!-- <input type="date" class="form-control"> -->
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Fax No:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>

                                            <th>Description</th>
                                            <th>Stock #</th>
                                            <th>Qty.</th>
                                            <th>Unit Price</th>
                                            <th>Total Cost</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <tr>
                                            <td colspan="2">Other Requirements for Purchase: Attach as Needed</td>
                                            <td colspan="2">Shipping Costs</td>
                                            <td></td>
                                        </tr>
                                    <tr>
                                            <td colspan="2" rowspan="2">
                                                Under $5000 - No additional quote Needed<br>
                                                $5000 - $25000 - At least Two vertical quotes Needed<br>
                                                $25000 - $50000 - At least Two Written quotes must be attached<br>
                                            
                                            </td>
                                            <td colspan="2">Other Charges</td>
                                            <td></td>
                                        </tr>
                                    <tr>
                                            <td colspan="2">Total Charges</td>
                                            <td></td>
                                        </tr>
                                    </tbody>				
                                </table>
                            </div>
                            <div class="mt-3 mb-5">
                                <div class="text-center">
                                    <h3>CHECKLIST & INFORMATION</h3>
                                </div>
                                <div class="mt-2 mb-5">
                                    <p><b>Verity funds available</b> through Debra if Grant-funded, Tracey if State-Funded or appropriate account manager (i-e. Roger j Jan) </p>
                                    <p><ol>
                                        <li>1 - Complete Purchase Order Request Form. ALL INFORMATION IS NEEDED </li>
                                        <li>2 - if you have not purchased from the Vandor before, check with max to see if they are already on the list. if not on UFs list, forms. will need to be faxed to the company, See Max for forms to be used</li>
                                        <li>3 - Most common missing information is which account is covering the charge</li>
                                        <li>4 - Please do not submit a request to purchase without all  required information</li>
                                    </ol></p>
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


@endsection