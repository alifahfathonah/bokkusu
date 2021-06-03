@extends('dashboard.templates.master')

@section('title','News')

@section('content')

<a href="/dashboard/news/create" class="btn btn-info mt-3">
Create
</a>
&nbsp;

<h1>News - Sikers</h1>

<table class="table table-striped table-bordered" id="table_news">
    <thead>
        <tr>
        <th>Title</th>
        <th>Category</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>
            <a href="#" class="btn btn-sm btn-info">
            Edit
            </a>
            <a href="#" class="btn btn-sm btn-danger">
            Delete
            </a>
        </td>
        </tr>
    </tbody>
</table>

@section('script')
<script src="../../js/scripts.js"></script>
<script src="../../datatables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#table_news').DataTable();
    } );
</script>
<script>
    $('.dropdown-toggle').dropdown();
</script>
@endsection

@endsection