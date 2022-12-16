<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<base href="{{URL::asset('')}}">
	<link rel="shortcut icon" type="image/png" href="{{URL::asset('anhda4/logo/logo.png')}}"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('fontawesome/css/all.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
	<script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
</head>
<body>
	@include('navigation')
	@section('content')

	@show
	@include('footer')
</body>
</html>