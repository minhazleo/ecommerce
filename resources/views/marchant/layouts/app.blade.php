<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.ico">

        <!-- plugin css -->
        <link href="{{ asset('backend') }}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Stack css Start -->
@stack('css')
        <!-- Stack css End -->

		<!-- App css -->
		<link href="{{ asset('backend') }}/assets/css/material/bootstrap-material.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="{{ asset('backend') }}/assets/css/material/app-material.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="{{ asset('backend') }}/assets/css/material/bootstrap-material-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="{{ asset('backend') }}/assets/css/material/app-material-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />


    </head>

    <body class="loading">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('marchant.layouts.topbar')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('marchant.layouts.left-sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        @yield('content')

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('marchant.layouts.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
            @include('marchant.layouts.right-sidebar')

        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script>
            $('#summernote').summernote({
              placeholder: 'Hello stand alone ui',
              tabsize: 2,
              height: 120,
              toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
              ]
            });
          </script>
        <script src="{{ asset('backend') }}/assets/js/vendor.min.js"></script>


        <!-- KNOB JS -->
        <script src="{{ asset('backend') }}/assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <!-- Apex js-->
        <script src="{{ asset('backend') }}/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Plugins js-->
        <script src="{{ asset('backend') }}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

        <!-- Dashboard init-->
        <script src="{{ asset('backend') }}/assets/js/pages/dashboard-sales.init.js"></script>
        <!-- Stack JS Start -->
        @stack('scripts')
        <!-- Stack JS Start -->
        <!-- App js -->
        <script src="{{ asset('backend') }}/assets/js/app.min.js"></script>

    </body>
</html>
