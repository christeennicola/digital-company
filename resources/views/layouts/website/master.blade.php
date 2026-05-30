<!-- Start Head Section -->
@include('website.includes.head')
<!-- End Head Section -->

<!-- Start Css Section -->
@include('website.includes.style')
@stack('styles')
<!-- End Css Section -->

<!-- Start Header -->
@include('website.includes.header')
<!-- End Header -->

<!-- Start Website Contents -->
@yield('main_content')
<!-- End Website Content -->

<!-- Start Footer -->
@include('website.includes.footer')
<!-- End Footer -->

<!-- Start JavaScript Section -->
@include('website.includes.script')
@stack('scripts')
<!-- End JavaScript Section -->
