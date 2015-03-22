<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ elixir('css/all.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">

		@include('flash::message')

		@yield('content')
	</div>

	<script>
			$('#flash-overlay-modal').modal();

	</script>

	@yield('footer')

</body>
</html>
