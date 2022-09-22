
<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>


<!-- assets Scripts -->
    <script src="{{URL::asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('backend/assets/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('backend/assets/js/at-scripts.js')}}"></script>
    <script src="{{URL::asset('backend/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('backend/theme/vendors/general/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('backend/theme/vendors/custom/js/vendors/sweetalert2.init.js')}}" type="text/javascript"></script>

<!-- end::Global Config -->


@yield('scripts')
