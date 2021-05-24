<!DOCTYPE html>
<html>
    <!--link library-->
    <meta name="viewport" content="device=width-device, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
	<title></title>
</head>
<style type="text/css">
	body{background-color:;}
</style>
<body>

<div class="container">

<div class="row -flex justify-content-center">
	<div class="col-md-7">
	<div class="card mt-3">
	<div class="card-body">
		<form action="/auth/postlogin" method="POST">
		@csrf
		<div class="form-group">
		<label>
			Email
		</label>
		<br>
		<input class="form-control" type="mail" name="email">
		@error('email')
		<span>{{$message}}</span>
		@enderror
		<br>
		</div>
		<div class="form-group">
		<label>
			Password
		</label>
		<br>
		<input class="form-control" type="password" name="password">
		@error('password')
		<span>{{$message}}</span>
		@enderror
		<br>
		</div>
		<input class="btn btn-success" type="submit" name="login" value="login">
		</form>	
		<br>
		Don't have a account? <a href="#">Sign Up</a>
	</div>
</div>
		
	</div>
</div>


</div>

</body>
</html>