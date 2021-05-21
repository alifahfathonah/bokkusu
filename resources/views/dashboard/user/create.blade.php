<!DOCTYPE html>
<html>
    <!--link library-->
    <meta name="viewport" content="device=width-device, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
<head>
	<title>Create User - Bokkusu</title>
</head>
<body>

<div class="container">
	<div class="card">
		<h1>Create user data</h1>
		<div class="card-body">
			<form action="/dashboard/user/store" method="POST">
				@csrf
				<div class="form-group">
					<label>
						Username
					</label>
					<input type="text" class="form-control" name="username">
					@error('username')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>
						Name
					</label>
					<input type="text" class="form-control" name="name">
					@error('name')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>
						Email
					</label>
					<input type="text" class="form-control" name="email">
					@error('email')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>
						Institution
					</label>
					<input type="text" class="form-control" name="institution">
					@error('institution')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>
						Sex
					</label>
					<input type="text" class="form-control" name="sex">
					@error('sex')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>
						Password
					</label>
					<input type="password" class="form-control" name="password">
					@error('password')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<br>
				<input type="submit" class="btn btn-sm btn-success" name="add" value="add">
			</form>
		</div>
	</div>
</div>

</body>
</html>