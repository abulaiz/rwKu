<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ URL::asset('admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('admin/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('admin/vendors/css/vendor.bundle.addons.css') }}">
  <!-- endinject -->
  <link rel="stylesheet" href="{{ URL::asset('admin/vendors/iconfonts/font-awesome/css/font-awesome.css') }}">
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ URL::asset('admin/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ URL::asset('admin/images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    @include('admin.layouts.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      @include('admin.layouts.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @if(session('errors'))
    				@if ($errors->any())
    			    <div class="alert bg-warning" role="alert">
    			        ERROR !!
    			      <a href="#" class="pull-right">
    			        <em class="fa fa-lg fa-close close-alert"></em>
    			      </a>
    			      <ul>
    			        @foreach ($errors->all() as $error)
    			          <li>{{ $error }}</li>
    			        @endforeach
    			      </ul>
    			    </div>
    			  @endif
    			@endif
    		  @if (Session('success'))
    		    <div class="alert bg-success" role="alert">
    		      <em class="fa fa-lg fa-check">&nbsp;</em>
    		        {{ Session('success') }}
    		      <a href="#" class="pull-right">
    		        <em class="fa fa-lg fa-close close-alert"></em>
    		      </a>
    		    </div>
    		  @endif
          @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ URL::asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ URL::asset('admin/vendors/js/vendor.bundle.addons.js') }}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ URL::asset('admin/js/off-canvas.js') }}"></script>
  <script src="{{ URL::asset('admin/js/misc.js') }}"></script>
  <!-- endinject -->
  @yield('extra-js')
</body>
</html>
