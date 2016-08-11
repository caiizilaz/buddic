<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="token" id="token" value="{{ csrf_token() }}">
	<title>TH-BUDDIC</title>
	<link href="{{ elixir('css/app.css') }}" rel="stylesheet">
</head>
<body>
	@include('layout/header')
		@yield('content')
	<script src="{{ elixir('js/app.js') }}"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	@include('layout/footer')
</body>
</html>