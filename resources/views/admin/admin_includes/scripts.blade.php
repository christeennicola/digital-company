@push('script')
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Alert Delete Message -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(event, formId) {
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
                    document.getElementById(formId).submit();
                }
            });
            return false;
        }
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("topbar-search");
            const tableBody = document.getElementById("dataTableBody");

            // Check From The Current Bage
            if (searchInput && tableBody) {
                searchInput.addEventListener("input", function() {
                    const filterValue = searchInput.value.toLowerCase().trim();
                    const rows = tableBody.getElementsByTagName("tr");

                    //checkby the each rows
                    for (let i = 0; i < rows.length; i++) {
                        const row = rows[i];

                        // To Get All Data From Current Row
                        const rowText = row.textContent.toLowerCase();

                        // Check If The Row Contain the char Or The Input Chars
                        if (rowText.indexOf(filterValue) > -1) {
                            row.style.display = "";
                        } else {
                            row.style.display = "none";
                        }
                    }
                });
            }
        });
    </script>
@endpush
