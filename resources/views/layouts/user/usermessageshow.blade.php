<!DOCTYPE html>
<html dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ app()->getLocale() }}">

<head>
    <!-- Start Head Section -->
    @include('user.user_includes.head')
    <!-- End Head Section -->
</head>

<body>

    <!-- Start Website Contents -->
    @yield('main_user')
    <!-- End Website Content -->

    <!-- Start Footer -->
    @include('user.user_includes.footer')
    <!-- End Footer -->

    <!-- Start JavaScript Section -->
    @include('user.user_includes.script')
    @stack('scripts')
    <!-- End JavaScript Section -->
</body>

</html>
