<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<!-- favicon -->
	<link rel="shortcut icon" href="{{ asset('assets/images/logo1.png') }}" type="image/x-icon">
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Plugin css -->
	<link rel="stylesheet" href="{{ asset('assets/css/plugin.css') }}">

	<!-- stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.dataTables.css') }}">
	@yield('header')
</head>

<body>

	<!-- SignIn Area End -->

	<!-- jquery -->
	<script src="{{ asset('assets/js/jquery.js') }}"></script>
	<!-- popper -->
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- plugin js-->
	<script src="{{ asset('assets/js/plugin.js') }}"></script>

	<!-- MpusemoverParallax JS-->
	<script src="{{ asset('assets/js/TweenMax.js') }}"></script>
	<script src="{{ asset('assets/js/mousemoveparallax.js') }}"></script>
	<!-- main -->
	<script src="{{ asset('assets/js/main.js') }}"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

</body>

</html>