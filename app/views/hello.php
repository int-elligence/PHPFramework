<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Micro Framework</title>
	</head>
	<body>
		<form action='<?php echo action("AuthController@post");?>' method="POST">
		<input type="text" name="name" placeholder="name"><br />
		<input type="password" name="password" placeholder="Password" />
		<input type="submit" value="Submit" />
		</form>
	</body>
</html>