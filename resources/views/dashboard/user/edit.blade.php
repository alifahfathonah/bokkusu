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
		<h1>Edit data user</h1>
		<div class="card-body">
			@foreach($user as $usr)
			<form action="/dashboard/user/update" method="POST">
				@csrf
				<input type="hidden" name="id" value="{{$usr->id}}">
				<div class="form-group">
					<label>
						Username
					</label>
					<input type="text" class="form-control" name="username" value="{{$usr->username}}">
					@error('username')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>
						Name
					</label>
					<input type="text" class="form-control" name="name" value="{{$usr->name}}">
					@error('name')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>
						Email
					</label>
					<input type="text" class="form-control" name="email" value="{{$usr->email}}">
					@error('email')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>
						Institution
					</label>
					<input type="text" class="form-control" name="institution" value="{{$usr->institution}}">
					@error('institution')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>
						Sex
					</label>
					<input type="text" class="form-control" name="sex" value="{{$usr->sex}}">
					@error('sex')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<br>
				<input type="submit" class="btn btn-sm btn-success" name="add" value="add">
			</form>
			@endforeach
		</div>
	</div>
</div>

</body>
</html>