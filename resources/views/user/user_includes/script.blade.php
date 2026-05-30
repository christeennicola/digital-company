@push('scripts')
    <!-- Start Scripts -->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/animation.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('assets/js/templatemo-custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(event, form) {
            // إيقاف الإرسال التلقائي فوراً
            event.preventDefault();

            // تشغيل النافذة المنبثقة
            Swal.fire({
                position: 'center',
                title: 'Are You Sure?',
                text: 'You Will Not Be Able To Restore This Again!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#e00000',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, Delete!',
                cancelButtonText: 'Cancel',
                reverseButtons: true
            }).then((result) => {
                // إذا ضغط المستخدم تأكيد، يتم إرسال الفورم المحدّد
                if (result.isConfirmed) {
                    form.submit();
                }
            });
            return false;
        }
    </script>
    <!-- End Scrpts
@endpush
