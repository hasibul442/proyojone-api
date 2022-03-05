@include('dashboard.include.head')

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('dashboard.include.topbar')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('dashboard.include.sidebar')
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
                @include('dashboard.include.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


       @include('dashboard.include.script')
