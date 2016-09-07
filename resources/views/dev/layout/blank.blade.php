<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>JUMBANGDI | Dashboard</title>
	@include('dev.layout.inc-stylesheet')
	@yield('css')
</head>
<body class="gray-bg">
	@yield('content')
	@include('dev.layout.inc-scripts')
	@yield('js')
</body>
</html>