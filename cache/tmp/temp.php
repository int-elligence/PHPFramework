<!doctype html>
<html lang="en">
	<head>
		<title>Welcome to my Framework!</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="#">Framework</a>
			</ol>
			<br />
			<h1>
<form action="<?=action('HomeController@handleForm');?>" method="POST">
<input type="text" name="first_name" placeholder="First Name" class="form-control" />
<br />
<input type="submit" value="Submit" class="btn btn-primary">
</form></h1>
			<br />
			<h3>Copyright Elliot Anderson 2014 &copy;</h3>
			<br />
			<h6>Version 0.1.1</h6>
		</div>
	</body>
</html>