<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My blog</title>
	<link rel="stylesheet" href="/css/app.css">
	<link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
	 <script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
		
		@include('includes.navbar')
	
		
		@yield('content')

		<footer id="footer" class="text-center">
			Copyright 2017 &copy; BY zUmA
		</footer>

</body>
</html>