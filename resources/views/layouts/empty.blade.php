<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@section('title')
		@show
	</title>
	@section('header')
		@show
</head>
<body>
	<div>
		@yield('content')
	</div>

	@section('footer')
	@show
</body>
</html>