<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="token" id="token" value="{{ csrf_token() }}">
	<title>พจนานุกรมพุทธศาสตร์</title>
	<link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Maitree|Taviraj" rel="stylesheet">
</head>
<body>
	@include('layout/header')
	<div class="container">
		@yield('content')
	</div>
	<script src="{{ elixir('js/app.js') }}"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="{{ elixir('js/bundle.js') }}"></script>
	@include('layout/footer')
</body>
</html>