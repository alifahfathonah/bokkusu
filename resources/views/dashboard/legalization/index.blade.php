@extends('dashboard.templates.master')

@section('title','Legalization')

@section('content')

<h1>Legalization - Bokkusu</h1>

<table class="table table-striped table-bordered" id="table_legal">
    <thead>
        <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $dt)
        <tr>
            <td>{{$dt->name}}</td>
            <td>
            @if($dt->status == 1)
            Disahkan
            @elseif($dt->status == 2)
            Proses Review
            @elseif($dt->status == 4)
            Perlu Revisi
            @endif
            </td>
            <td>
                <a class="btn btn-sm btn-info" href="/dashboard/legalization/view/{{$dt->id}}">View</a>
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
        $('#table_legal').DataTable();
    } );
</script>
<script>
    $('.dropdown-toggle').dropdown();
</script>
@endsection

@endsection