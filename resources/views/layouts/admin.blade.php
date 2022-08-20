<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/images/favicon.png')}}">
  <title>@yield('title')</title>
  <!-- Custom CSS -->
  <link href="{{asset('admin/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{asset('admin/dist/css/style.min.css')}}" rel="stylesheet">
  {{-- Datatables --}}
  {{-- <link href="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.css')}}" rel="stylesheet"> --}}
  {{-- parsley validator --}}
  <link href="{{ asset('parsley/parsley.css') }}" rel="stylesheet">
  {{-- My css --}}
  <link href="{{ asset('my_files/mycss.css') }}" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  {{-- <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div> --}}
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar " data-navbarbg="skin5">
      <nav class="navbar fixed-top top-navbar navbar-expand-md navbar-dark navbar-static">
        <div class="navbar-header" data-logobg="skin5">
          <!-- This is for the sidebar toggle which is visible on mobile only -->
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
              class="ti-menu ti-close"></i></a>
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <a class="navbar-brand" href="{{route('admin.dashboard')}}">
            <!-- Logo icon -->
            <b class="logo-icon p-l-10">
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <img src="{{asset('admin/assets/images/logo-icon.png')}}" alt="homepage" class="light-logo" />

            </b>
            <!--End Logo icon -->
            <!-- Logo text -->
            <span class="logo-text">
              <!-- dark Logo text -->
              <!-- <img src="" alt="Admin" class="light-logo" /> -->
              <h2 style="margin-left: 10px; margin-top: 10px;">Admin</h2>
            </span>
            <!-- Logo icon -->
            <!-- <b class="logo-icon"> -->
            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
            <!-- Dark Logo icon -->
            <!-- <img src="" alt="homepage" class="light-logo" /> -->

            <!-- </b> -->
            <!--End Logo icon -->
          </a>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Toggle which is visible on mobile only -->
          <!-- ============================================================== -->
          <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
            data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-left mr-auto">
            <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light"
                href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
            <!-- <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li> -->
          </ul>
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-right">
            <!-- ============================================================== -->
            <!-- Comment -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              {{-- <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i> --}}
              </a>
              {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div> --}}
            </li>
            <!-- ============================================================== -->
            <!-- End Comment -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Messages -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                <ul class="list-style-none">
                  <li>
                    <div class="">
                      <!-- Message -->
                      <a href="javascript:void(0)" class="link border-top">
                        <div class="d-flex no-block align-items-center p-10">
                          <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                          <div class="m-l-10">
                            <h5 class="m-b-0">Hello!</h5>
                            <span class="mail-desc">Welcome to admin panel.</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <!-- ============================================================== -->
            <!-- End Messages -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                  src="{{asset('admin/assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31"></a>
              <div class="dropdown-menu dropdown-menu-right user-dd animated"><br>
                <h3 class="dropdown-item" href="javascript:void(0)"></i>Hello! Admin</h3>
                {{-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a> --}}
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('admin.change.password')}}"><i
                    class="ti-settings m-r-5 m-l-5"></i> Change Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"><i class="fa fa-power-off m-r-5 m-l-5"></i>
                  Logout</a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
                <div class="dropdown-divider"></div>
                {{-- <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View
                    Profile</a></div> --}}
              </div>
            </li>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
          </ul>
        </div>
      </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    @include('includes.admin_sidebar')
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h3 class="page-title">@yield('page-title')</h4>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">

        @include('includes.message')
        @yield('content')
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <footer class="footer text-center">
        All Rights Reserved by {{env('APP_NAME')}}. Technology Partner <a target="_blank"
          href="http://skoder.co">Skoder</a>.
      </footer>
      <div class="modal">
      </div>
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="{{asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery')}}.min.js"></script>
  <script src="{{asset('admin/assets/extra-libs/sparkline/sparkline.js')}}"></script>
  <!--Wave Effects -->
  <script src="{{asset('admin/dist/js/waves.js')}}"></script>
  <!--Menu sidebar -->
  <script src="{{asset('admin/dist/js/sidebarmenu.js')}}"></script>
  <!--Custom JavaScript -->
  <script src="{{asset('admin/dist/js/custom.min.js')}}"></script>
  <!--This page JavaScript -->
  <!-- <script src="{{asset('admin/dist/js/pages/dashboards/dashboard1.js"></')}}script> -->
  <!-- Charts js Files -->
  <script src="{{asset('admin/assets/libs/flot/excanvas.js')}}"></script>
  <script src="{{asset('admin/assets/libs/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('admin/assets/libs/flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('admin/assets/libs/flot/jquery.flot.time.js')}}"></script>
  <script src="{{asset('admin/assets/libs/flot/jquery.flot.stack.js')}}"></script>
  <script src="{{asset('admin/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
  <script src="{{asset('admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
  <script src="{{asset('admin/dist/js/pages/chart/chart-page-init.js')}}"></script>
  <script src="{{ asset('parsley/parsley.min.js') }}"></script>

  {{-- Datatables --}}
  <script src="{{asset('admin/assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
  <script src="{{asset('admin/assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
  <script src="{{asset('admin/assets/extra-libs/DataTables/datatables.min.js')}}"></script>

  {{-- ckeditor 4--}}
  <script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>

  @yield('script')
  <script>
    // Ajax Loading
    $body = $("body");
    $(document).on({
      ajaxStart: function() { $body.addClass("loading"); },
      ajaxStop: function() { $body.removeClass("loading"); }
    });
  </script>
</body>

</html>
