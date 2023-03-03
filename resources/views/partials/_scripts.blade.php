<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ _asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ _asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ _asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{ _asset('dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ _asset('dist/js/feather.min.js') }}"></script>
    <script src="{{ _asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ _asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ _asset('dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ _asset('assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ _asset('assets/extra-libs/c3/c3.min.js') }}"></script>
    <script src="{{ _asset('assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ _asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{ _asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ _asset('assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ _asset('dist/js/pages/dashboards/dashboard1.min.js') }}"></script>

    @yield('_script')

    <script>
        @if (Session::has('success'))
            toastr.options = {}
            toastr.success("{{ session('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {}
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {}
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {}
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>