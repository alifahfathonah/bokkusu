@extends('dashboard.templates.master')

@section('title','Legalization')

@section('content')

<h1>Legalization - Bokkusu</h1>

<table class="table table-striped table-bordered" id="table_legal">
    <thead>
        <tr>
            <th>Name</th>
            <th>File</th>
            <th>Type</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>#</td>
            <td>#</td>
            <td>#</td>
            <td>#</td>
            <td>
                <a class="btn btn-sm btn-danger" href="#">Delete</a>
                <a class="btn btn-sm btn-info" href="#">View</a>
            </td>
        </tr>
    </tbody>
</table>

@section('script')
<script src="../../js/scripts.js"></script>
<script src="../../datatables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#table_legal').DataTable();
    } );
</script>
<script>
    $('.dropdown-toggle').dropdown();
</script>
@endsection

@endsection