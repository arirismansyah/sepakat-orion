<!doctype html>
<html lang="en" dir="ltr">
  <head>

		@include('includes.head')

	</head>

	<body>

		@yield('content')

		<!-- JQUERY JS -->
		<script src="{{url('template/js/jquery.min.js')}}"></script>

		<!-- BOOTSTRAP JS -->
		<script src="{{url('/template/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{url('/template/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- SPARKLINE JS -->
		<script src="{{url('/template/js/jquery.sparkline.min.js')}}"></script>

		<!-- CHART-CIRCLE JS -->
		<script src="{{url('/template/js/circle-progress.min.js')}}"></script>

		<!-- Perfect SCROLLBAR JS-->
		<script src="{{url('/template/plugins/p-scroll/perfect-scrollbar.js')}}"></script>

		<!-- INPUT MASK JS -->
		<script src="{{url('/template/plugins/input-mask/jquery.mask.min.js')}}"></script>

        <!-- Color Theme js -->
        <script src="{{url('/template/js/themeColors.js')}}"></script>

        <!-- CUSTOM JS -->
        <script src="{{url('/template/js/custom.js')}}"></script>

	</body>
</html>
