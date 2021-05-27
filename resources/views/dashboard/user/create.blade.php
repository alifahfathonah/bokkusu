@extends('dashboard.templates.master')

@section('title','Create User')

@section('content')

	<div class="card mt-3">
		<div class="card-header">
			<h1>Create user data</h1>
		</div>
		<div class="card-body">
			<form action="/dashboard/user/store" method="POST">
				@csrf
				<div class="form-group">
					<label>
						Username
					</label>
					<input type="text" class="form-control" name="username" value="{{ old('username')}}">
					@error('username')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>
						Name
					</label>
					<input type="text" class="form-control" name="name" value="{{ old('name') }}">
					@error('name')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>
						Email
					</label>
					<input type="text" class="form-control" name="email" value="{{ old('email') }}">
					@error('email')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>
						Institution
					</label>
					<input type="text" class="form-control" name="institution" value="{{ old('institution') }}">
					@error('institution')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>
						Gender
					</label>
					<input type="text" class="form-control" name="sex" value="{{ old('sex') }}">
					@error('sex')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>
						Password
					</label>
					<input type="password" class="form-control" name="password" value="{{old('password') }}">
					@error('password')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>
						Role (1 - 4)
					</label>
					<input type="password" class="form-control" name="role" value="{{old('role') }}">
					@error('role')
					<span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				<br>
				<input type="submit" class="btn btn-success" name="add" value="ADD USER">
				&nbsp;&nbsp;
				<a class="btn btn-danger" href="/dashboard/user">
				CANCEL
				</a>
			</form>
		</div>
	</div>

@section('script')
<script src="../../js/scripts.js"></script>
<script>
    $('.dropdown-toggle').dropdown();
</script>
@endsection


@endsection