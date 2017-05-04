<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>CivicEngagement - @yield('title')</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/projectHome.css') }}">
	<link rel="stylesheet" tyep="text/css" href="{{ asset('css/bootstrap-theme.css') }}">
	<link rel="stylesheet" tyep="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" tyep="text/css" href="{{ asset('css/css-alpha/bootstrap-grid.css') }}">




</head>
<body>


	@yield('content')
	
	<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
