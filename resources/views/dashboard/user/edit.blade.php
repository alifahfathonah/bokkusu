<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Edit User - Bokkusu</title>
</head>
<body>

<!-- Page content-->
<div class="container">

<h1>Edit data user</h1>

<div class="card">
		<div class="card-body">
			@foreach($user as $usr)
			<form class="form" action="/dashboard/user/update" method="POST">
				@csrf
				<input class="form-control" type="hidden" name="id" value="{{$usr->id}}">
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
						Gender
					</label>
					<input type="text" class="form-control" name="sex" value="{{$usr->sex}}">
					@error('sex')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>
						Role
					</label>
					<input type="text" class="form-control" name="sex" value="{{$usr->role}}">
					@error('role')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<br>
				<input type="submit" class="btn btn-sm btn-success" name="add" value="add">
				<a href="/dashboard/user" class="btn btn-sm btn-danger">
				cancel
				</a>
			</form>
			@endforeach
		</div>
</div>

</div>


    

</body>
</html>