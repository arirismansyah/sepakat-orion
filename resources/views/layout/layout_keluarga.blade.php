<!doctype html>
<html lang="en" dir="ltr">

<head>

    @include('includes.head')

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ url('/template/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            @include('includes.header')
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            @include('includes.sidebar')
            <!--/APP-SIDEBAR-->

            <!--app-content open-->

            @yield('content')

        </div>

        <!-- Sidebar-right -->
        @include('includes.sidebar_right')
        <!--/Sidebar-right-->

        <!-- FOOTER -->
        <footer class="footer">
            @include('includes.footer')
        </footer>
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ url('/template/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ url('/template/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ url('/template/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- SPARKLINE JS-->
    <script src="{{ url('/template/js/jquery.sparkline.min.js') }}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{ url('/template/js/circle-progress.min.js') }}"></script>

    <!-- INPUT MASK JS-->
    <script src="{{ url('/template/plugins/input-mask/jquery.mask.min.js') }}"></script>

    <!-- SIDE-MENU JS -->
    <script src="{{ url('/template/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ url('/template/js/sticky.js') }}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{ url('/template/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ url('/template/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('/template/plugins/p-scroll/pscroll.js') }}"></script>
    <script src="{{ url('/template/plugins/p-scroll/pscroll-1.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ url('/template/js/themeColors.js') }}"></script>

    <!-- FULL CALENDAR JS -->
    <script src='{{ url('/template/plugins/fullcalendar/moment.min.js') }}'></script>
    <script src='{{ url('/template/plugins/fullcalendar/fullcalendar.min.js') }}'></script>

    <!-- FILE UPLOADES JS -->
    <script src="{{ url('/template/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ url('/template/plugins/fileuploads/js/file-upload.js') }}"></script>

    <!-- INTERNAL Bootstrap-Datepicker js-->
    <script src="{{ url('/template/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- INTERNAL File-Uploads Js-->
    <script src="{{ url('/template/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ url('/template/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ url('/template/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ url('/template/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ url('/template/plugins/fancyuploder/fancy-uploader.js') }}"></script>


    <!-- SELECT2 JS -->
    <script src="{{ url('/template/plugins/select2/select2.full.min.js') }}"></script>

    <!-- BOOTSTRAP-DATERANGEPICKER JS -->
    <script src="{{ url('/template/plugins/bootstrap-daterangepicker/moment.min.js') }}"></script>
    <script src="{{ url('/template/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- INTERNAL Bootstrap-Datepicker js-->
    <script src="{{ url('/template/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

    <!-- INTERNAL Sumoselect js-->
    <script src="{{ url('/template/plugins/sumoselect/jquery.sumoselect.js') }}"></script>

    <!-- TIMEPICKER JS -->
    <script src="{{ url('/template/plugins/time-picker/jquery.timepicker.js') }}"></script>
    <script src="{{ url('/template/plugins/time-picker/toggles.min.js') }}"></script>

    <!-- INTERNAL intlTelInput js-->
    <script src="{{ url('/template/plugins/intl-tel-input-master/intlTelInput.js') }}"></script>
    <script src="{{ url('/template/plugins/intl-tel-input-master/country-select.js') }}"></script>
    <script src="{{ url('/template/plugins/intl-tel-input-master/utils.js') }}"></script>

    <!-- INTERNAL jquery transfer js-->
    <script src="{{ url('/template/plugins/jQuerytransfer/jquery.transfer.js') }}"></script>

    <!-- INTERNAL multi js-->
    <script src="{{ url('/template/plugins/multi/multi.min.js') }}"></script>

    <!-- DATEPICKER JS -->
    <script src="{{ url('/template/plugins/date-picker/date-picker.js') }}"></script>
    <script src="{{ url('/template/plugins/date-picker/jquery-ui.js') }}"></script>
    <script src="{{ url('/template/plugins/input-mask/jquery.maskedinput.js') }}"></script>

    <!-- MULTI SELECT JS-->
    <script src="{{ url('/template/plugins/multipleselect/multiple-select.js') }}"></script>
    <script src="{{ url('/template/plugins/multipleselect/multi-select.js') }}"></script>

    <!-- FORMELEMENTS JS -->
    <script src="{{ url('/template/js/formelementadvnced.js') }}"></script>
    <script src="{{ url('/template/js/form-elements.js') }}"></script>

    <!-- SWEET-ALERT JS -->
    <script src="{{ url('') }}/template/plugins/sweet-alert/sweetalert.min.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{ url('/template/js/custom.js') }}"></script>

    <script type="module" src="{{ url('/js/app.js') }}"></script>

    {{-- <script src="{{url('/js/conference_admin.js')}}"></script>
    <script src="{{url('/js/admin/m_user.js')}}"></script>
    <script src="{{url('/js/admin/m_konsultasi.js')}}"></script>
    <script src="{{url('/js/admin/jadwal_konsultasi.js')}}"></script> --}}

    {{-- chart js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>


    <script>
        $('#filter_btn').on('click', function() {
            var id_rt = $('#select_keluarga').val();
            var url_image = '/plot_shap/keluarga/'+id_rt+'.png';
            console.log(url_image);

            $('#img_plot_shap').attr('src', url_image)
        });


        $('#select_keluarga').on('change', function() {
            const longitude_point = $('option:selected', this).attr('att_long');
            const latitude_point = $('option:selected', this).attr('att_lat');
            const opt_val = $('option:selected', this).val();
            const opt_text = $('option:selected', this).text();

            var map = L.map('map');

            map.setView([latitude_point, longitude_point], 13);

            const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            const marker = L.marker([latitude_point, longitude_point]).addTo(map).bindPopup(
                "<b>"+opt_text+"</b><br>"+opt_val).openPopup();

        });
    </script>


</body>

</html>
