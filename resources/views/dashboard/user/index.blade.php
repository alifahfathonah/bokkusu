@extends('dashboard.templates.master')

@section('title','User')

@section('content')

<h1>User - Bokkusu</h1>

<a class="btn btn-primary mb-3" href="/dashboard/user/create">
	Create User
</a>

<br>

<table class="table table-striped table-bordered" id="table_submission" id="table_user">
	<thead>
		<tr>
			<th>Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Institution</th>
			<th>Gender</th>
			<th>Role</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($user as $usr)
		<tr>
			<td>{{$usr->name}}</td>
			<td>{{$usr->username}}</td>
			<td>{{$usr->email}}</td>
			<td>{{$usr->institution}}</td>
			<td>{{$usr->sex}}</td>
			<td>
			@if($usr->role == 1)
			Unit Pelaksana
			@elseif($usr->role == 2)
			Unit Pengelola
			@elseif($usr->role == 3)
			Unit Legal
			@elseif($usr->role == 4)
			Pimpinan
			@elseif($usr->role == 5)
			Tamu
			@endif
			</td>
			<td>
				<a href="/dashboard/user/delete/{{$usr->id}}">
				Delete</a>
				&nbsp;&nbsp;
				<a href="/dashboard/user/edit/{{$usr->id}}">
				Edit</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@section('script')
<script src="../../js/scripts.js"></script>
<script src="../../datatables.min.js"></script>
        <script>
             $(document).ready( function () {
                $('#table_user').DataTable();
            } );
        </script>
<script>
    $('.dropdown-toggle').dropdown();
</script>
@endsection


@endsection