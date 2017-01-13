<!DOCTYPE html>
<html lang="en-US">
	<head>
		@include('includes.head')
		@yield('page-css')
	</head>
	<body>
		@yield('content')
		@include('includes.footer')
		@yield('page-js')
	</body>
</html>