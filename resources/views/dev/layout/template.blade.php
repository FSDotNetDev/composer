<!DOCTYPE html>
<!--This code was hand-crafted at http://grible.co
	 ╚═════╝ ╚═╝  ╚═╝╚═╝╚═════╝ ╚══════╝╚══════╝

	███████╗ ███████╗ ██╗   ██╗
	██╔════╝ ██╔══██║ ██╚═══██║
	█████╗   ███████║ ████████║
	██╔══╝   ██╔══██║    ██╔══╝
	██║      ██║  ██║    ██║
	╚═╝      ╚═╝  ╚═╝    ╚═╝
	Check our /humans.txt for more about the team
-->
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>CODEINSANE | Dashboard</title>
	@include('dev.layout.inc-stylesheet')
	@yield('css')
</head>
<body>
	<div id="wrapper">
		@include('dev.layout.inc-left-sidebar')
		<div id="page-wrapper" class="gray-bg dashbard-1">
			@include('dev.layout.inc-header')
			@yield('content')
		</div>
	</div>
	@include('dev.layout.inc-scripts')
	@yield('js')
</body>
</html>