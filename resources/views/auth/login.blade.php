<!DOCTYPE html>
<html>
    <!--link library-->
    <meta name="viewport" content="device=width-device, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
	<title></title>
</head>
<body>

	<form action="/auth/postlogin" method="POST">
		<label>
			Email
		</label>
		<br>
		<input type="mail" name="email">
		<br>
		<label>
			Password
		</label>
		<br>
		<input type="password" name="password">
		<br>
		<input type="submit" name="login" value="login">
	</form>

</body>
</html>