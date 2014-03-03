<!doctype html>
<html lang="en">
	<head>
		<title>Welcome to my Framework!</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<script src="{{asset('test')}}"></script>
	</head>
	<body>
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="#">Framework</a>
			</ol>
			<br />
			<h1>@yield('content')</h1>
			<br />
			<h3>Copyright Elliot Anderson 2014 &copy;</h3>
			<br />
			<h6>Version 0.1.1</h6>
		</div>
	</body>
</html>