<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="token" id="token" value="{{ csrf_token() }}">
	<title>CRUD with Vue JS</title>
	<link href="{{ elixir('css/app.css') }}" rel="stylesheet">
</head>
<body>
	
	<div class="container-fluid">
		@yield('content')
	</div>
	
	<script src="{{ elixir('js/app.js') }}"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	@extends('layout/footer')
</body>
</html>