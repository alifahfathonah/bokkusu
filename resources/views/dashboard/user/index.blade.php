<!DOCTYPE html>
<html>
    <!--link library-->
    <meta name="viewport" content="device=width-device, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
<head>
	<title>User - Bokkusu</title>
</head>
<body>

<div class="container">
<h1>
		Data User
</h1>

<a class="btn btn-primary" href="/dashboard/user/create">
	Create User
</a>

<br>
	
	<ol>
		@foreach($user as $usr)
		<li>{{$usr->name}} - {{$usr->username}}} - {{$usr->email}} -> {{$usr->sex}}
			<a href="/dashboard/user/delete/{{$usr->id}}">delete</a> - <a href="/dashboard/user/edit/{{$usr->id}}">edit</a></li>
		@endforeach
	</ol>

</div>

</body>
</html>