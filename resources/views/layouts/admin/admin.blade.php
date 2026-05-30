<!DOCTYPE html>
<html dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ app()->getLocale() }}">

<head>
    <!-- Start Admin Head Section -->
    @include('admin.admin_includes.head')
    <!-- End Admin Head Section -->

    <!-- Start Admin css Section -->
    @include('admin.admin_includes.style')
    @stack('style')
    <!-- End Admin css Section -->


</head>

<body id="page-top">

    <div id='wrapper'>

        <!-- Start Admin Sidebar -->
        @include('admin.admin_includes.sidebar')
        <!-- End Admin Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Start Admin Includes -->
                @include('admin.admin_includes.header')
                <!-- End Admin Includes -->

                <!-- Start Admin Contents -->
                @yield('admin_main_content')
                <!-- End Admin Contents -->
            </div>
            <!-- Start Admin Footer -->
            @include('admin.admin_includes.footer')
            <!-- End Admin Footer -->

            <!-- Start Admin JavaScript Section -->
            @include('admin.admin_includes.scripts')
            @stack('script')
            <!-- End Admin JavaScript Section -->

        </div>
    </div>
</body>

</html>
