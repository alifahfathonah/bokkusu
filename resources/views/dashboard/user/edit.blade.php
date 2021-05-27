@extends('dashboard.templates.master')

@section('title','Edit User')

@section('content')


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
			</form>
			@endforeach
		</div>
</div>

@section('script')
<script src="../../js/scripts.js"></script>
@endsection

@endsection