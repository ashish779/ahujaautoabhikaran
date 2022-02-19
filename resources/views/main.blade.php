<!DOCTYPE html>
<html>
<head id="ctl00_head1">
	@include('includes/head')
</head>
<body>
<div class="wrapper">
	@include('includes/nav')
	@yield('content')
</div>
	@include('includes/footer')
</body>
</html>