
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>iHATEC</title>
  <!-- base:css -->
  <link rel="stylesheet" href="spica/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="spica/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="spica/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="spica/images/halal.png" />
</head>
@can('isAdmin')
<body>
  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="house">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">HOME</span>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Components</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="prosedur">
            <i class="mdi mdi-view-headline menu-icon"></i>
            <span class="menu-title">PROSEDUR</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-palette menu-icon"></i>
              <span class="menu-title">UPP ONLINE</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="creatupp">CREATE UPP</a></li>
                <li class="nav-item"> <a class="nav-link" href="penilaian">PENILAIAN</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-palette menu-icon"></i>
              <span class="menu-title">ADMIN</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="departemen">DEPARTEMEN</a></li>
                <li class="nav-item"> <a class="nav-link" href="ktprosedur">KATEGORI PROSEDUR</a></li>
                <li class="nav-item"> <a class="nav-link" href="kodepro">NAMA DAN KODE PROSEDUR</a></li>
            </ul>
        </div>
  </ul>
</nav>
                @endcan
                @can('isApproval')
   <div class="container-scroller d-flex">
      <!-- partial:./partials/_sidebar.html -->
           <nav class="sidebar sidebar-offcanvas" id="sidebar">
             <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                      <i class="mdi mdi-palette menu-icon"></i>
                      <span class="menu-title">APPROVAL</span>
                      <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="uppprocs">UPP PROCCES</a></li>
                        <li class="nav-item"> <a class="nav-link" href="uppaprl">UPP Aproval</a></li>
                        <li class="nav-item"> <a class="nav-link" href="uppaprv">UPP APPROVED</a></li>
                        <li class="nav-item"> <a class="nav-link" href="uppchck">UPP check</a></li>
                        <li class="nav-item"> <a class="nav-link" href="uppclsd">UPP Closed</a></li>
              </ul>
            </div>
      </ul>
    </nav>
    @endcan
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-8 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="spica/images/halal.png" alt="logo"/></a>
          </div>
          <ul class="navbar-nav navbar-nav-right">
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
          <li class="nav-item">
            <a class="nav-link">

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            this.closest('form').submit();">
                      <button type="button" class="btn btn-success">LOGOUT</button>
                </a>
                </form>

            </a>
          </li>
        </div>

      </nav>

      @yield('content')

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="spica/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="spica/vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="spica/js/off-canvas.js"></script>
  <script src="spica/js/hoverable-collapse.js"></script>
  <script src="spica/js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="spica/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
