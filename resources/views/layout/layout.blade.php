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

        const map = L.map('map').setView([51.505, -0.09], 13);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        const marker = L.marker([51.5, -0.09]).addTo(map);

        const circle = L.circle([51.508, -0.11], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 500
        }).addTo(map);

        const polygon = L.polygon([
            [51.509, -0.08],
            [51.503, -0.06],
            [51.51, -0.047]
        ]).addTo(map);
    </script>

    {{-- pilih tingkatan --}}
    <script>
        $(document).ready(function() {

            $('#filter_btn').on('click', function () {
                var kode_prov = $('#select_prov').val();
                var kode_kab = $('#select_kab').val();

                if (kode_prov == "32" && kode_kab=='06') {
                    $('#container_shap').show()
                    $('#dekripsi_tasik').show()
                    $('#container_descript_none').hide()
                    $('#container_shap_none').hide()
                } else {
                    $('#container_descript_none').show()
                    $('#container_shap_none').show()
                    $('#container_shap').hide()
                    $('#dekripsi_tasik').hide()

                }

            })

            if ($('#select_tingkatan_wilayah').val() == null || $('#select_tingkatan_wilayah').val() == "") {
                $('#select_prov').prop('disabled', 'disabled');
                $('#select_kab').prop('disabled', 'disabled');
                $('#select_kec').prop('disabled', 'disabled');
                $('#select_desa').prop('disabled', 'disabled');
            }

            $('#select_tingkatan_wilayah').on('change', function() {
                console.log($('#select_tingkatan_wilayah').val());
                if ($('#select_tingkatan_wilayah').val() == '1') {
                    $('#select_prov').removeAttr('disabled');
                    $('#select_kab').prop('disabled', 'disabled');
                    $('#select_kec').prop('disabled', 'disabled');
                    $('#select_desa').prop('disabled', 'disabled');
                }
                if ($('#select_tingkatan_wilayah').val() == '2') {
                    $('#select_prov').removeAttr('disabled');
                    $('#select_kab').removeAttr('disabled');
                    $('#select_kec').prop('disabled', 'disabled');
                    $('#select_desa').prop('disabled', 'disabled');
                }
                if ($('#select_tingkatan_wilayah').val() == '3') {
                    $('#select_prov').removeAttr('disabled');
                    $('#select_kab').removeAttr('disabled');
                    $('#select_kec').removeAttr('disabled');
                    $('#select_desa').prop('disabled', 'disabled');
                }
                if ($('#select_tingkatan_wilayah').val() == '4') {
                    $('#select_prov').removeAttr('disabled');
                    $('#select_kab').removeAttr('disabled');
                    $('#select_kec').removeAttr('disabled');
                    $('#select_desa').removeAttr('disabled');
                }
            });





        });
    </script>

    {{-- filter-search-javascript --}}
    <script>
        $(document).ready(function() {

            // fetch kec
            if ($("[name = 'id_kab']").val() != null && $("[name = 'id_kab']").val() != "") {
                var id_kab = $("[name = 'id_kab']").val();
                var data_kecs = function() {
                    var tmp = null;

                    if (id_kab != null && id_kab != "") {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            async: false,
                            method: "POST",
                            url: "{{ url('get-kecs-bykab') }}",
                            data: {
                                'id_kab': id_kab,
                            },
                            success: function(response) {
                                tmp = response;
                            }
                        });
                    }
                    return tmp;
                }();

                data_kecs.forEach(element => {
                    if ($('[name = "id_kec"]').attr('selected_kec') == element['id_kec']) {
                        var option_kec = '<option value="' + element['id_kec'] + '" selected>' + '[' +
                            element['id_kec'] + '] ' + element['nama_kec'] + '</option>';
                    } else {
                        var option_kec = '<option value="' + element['id_kec'] + '">' + '[' + element[
                            'id_kec'] + '] ' + element['nama_kec'] + '</option>';
                    }

                    $('[name = "id_kec"]').append(option_kec);
                });
            }

            // fetch kec ajax
            $("[name = 'id_kab']").on('change', function() {
                var id_kab = $("[name = 'id_kab']").val();
                console.log(id_kab);
                var data_kecs = function() {
                    var tmp = null;

                    if (id_kab != null && id_kab != "") {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            async: false,
                            method: "POST",
                            url: "{{ url('get-kecs-bykab') }}",
                            data: {
                                'id_kab': id_kab,
                            },
                            success: function(response) {
                                tmp = response;
                            }
                        });
                    }
                    return tmp;
                }();

                $('[name = "id_kec"]').html('<option value="">Kecamatan</option>');

                data_kecs.forEach(element => {
                    $('[name = "id_kec"]').append('<option value="' + element['id_kec'] + '">' +
                        '[' + element['id_kec'] + '] ' + element['nama_kec'] + '</option>')
                });


            });

            // fetch desa
            if (($("[name = 'id_kab']").val() != null && $("[name = 'id_kab']").val() != "") && ($(
                    "[name = 'id_kec']").val() != null && $("[name = 'id_kec']").val() != "")) {
                var id_kab = $("[name = 'id_kab']").val();
                var id_kec = $("[name = 'id_kec']").val();
                var data_desa = function() {
                    var tmp = null;

                    if ((id_kab != null && id_kab != "") && (id_kec != null && id_kec != "")) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            async: false,
                            method: "POST",
                            url: "{{ url('get-desa-bykabkec') }}",
                            data: {
                                'id_kab': id_kab,
                                'id_kec': id_kec,
                            },
                            success: function(response) {
                                tmp = response;
                            }
                        });
                    }
                    return tmp;
                }();

                $('[name = "id_desa"]').html('<option value="">Desa</option>');

                data_desa.forEach(element => {
                    if ($('[name = "id_desa"]').attr('selected_desa') == element['id_desa']) {
                        var option_kec = '<option value="' + element['id_desa'] + '" selected>' + '[' +
                            element['id_desa'] + '] ' + element['nama_desa'] + '</option>';
                    } else {
                        var option_kec = '<option value="' + element['id_desa'] + '">' + '[' + element[
                            'id_desa'] + '] ' + element['nama_desa'] + '</option>';
                    }

                    $('[name = "id_desa"]').append(option_kec);
                });
            }

            // fetch kec ajax
            $("[name = 'id_kec']").on('change', function() {
                var id_kab = $("[name = 'id_kab']").val();
                var id_kec = $("[name = 'id_kec']").val();

                var data_desa = function() {
                    var tmp = null;

                    if ((id_kab != null && id_kab != "") && (id_kec != null && id_kec != "")) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            async: false,
                            method: "POST",
                            url: "{{ url('get-desa-bykabkec') }}",
                            data: {
                                'id_kab': id_kab,
                                'id_kec': id_kec,
                            },
                            success: function(response) {
                                tmp = response;
                            }
                        });
                    }
                    return tmp;
                }();

                $('[name = "id_desa"]').html('<option value="">Desa</option>');

                data_desa.forEach(element => {
                    $('[name = "id_desa"]').append('<option value="' + element['id_desa'] + '">' +
                        '[' + element['id_desa'] + '] ' + element['nama_desa'] + '</option>')
                });


            });

        });
    </script>


</body>

</html>
