<!DOCTYPE html>
<html lang="en">
 @include('admin.layout.head');

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Admin Panel</span></a>
            </div>

            <div class="clearfix"></div>

            

            <br />

            <!-- sidebar menu -->
            @include('admin.layout.sidebar');
            <!-- /sidebar menu -->

          </div>  
        </div>

        <!-- top navigation -->
       @include('admin.layout.header');
        <!-- /top navigation -->
       

        <!-- page content -->
       @yield('content')
        <!-- /page content -->

        <!-- footer content -->
       @include('admin.layout.footer');
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('admin_theme/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('admin_theme/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('admin_theme/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('admin_theme/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('admin_theme/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('admin_theme/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('admin_theme/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('admin_theme/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('admin_theme/vendors/skycons/skycons.js')}}"></script>
 
   
      <!-- Custom Theme Scripts -->
      <script src="{{asset('admin_theme/build/js/custom.min.js')}}"></script>
        <script src="{{asset('admin_theme/categoryName.js')}}"></script>
  </body>
</html>
