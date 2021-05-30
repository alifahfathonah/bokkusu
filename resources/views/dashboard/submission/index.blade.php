@extends('dashboard.templates.master')

@section('title','Submission')

@section('content')

<a href="/dashboard/submission/create" class="btn btn-info mt-3">
Create
</a>
&nbsp;

<h1>Submission - Bokkusu</h1>

<br>

<table class="table table-striped table-bordered" id="table_submission">
    <thead>
        <tr>
            <th>Jenis Dokumen</th>
            <th>Perihal</th>
            <th>Durasi</th>
            <th>Unit Pelaksana</th>
            <th>Deskripsi</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($submission as $sb)
        <tr>
            <td>{{$sb->jenis_dokumen}}</td>
            <td>{{$sb->perihal}}</td>
            <td>{{$sb->durasi}} Days</td>
            <td>{{$sb->unit_pelaksana}}</td>
            <td>{{$sb->deskripsi}}</td>
            <td>
                @if($sb->status == 1)
                <span class="badge bg-success">
                Disetujui
                </span>
                @elseif($sb->status == 2)
                <span class="badge bg-dark">
                Dalam Proses Review
                </span>
                @elseif($sb->status == 3)
                <span class="badge bg-danger">
                Ditolak
                </span>
                @elseif($sb->status == 4)
                <span class="badge bg-warning">
                Perlu Revisi
                </span>
                @endif
            </td>
            <td>
            <a class="btn btn-sm btn-primary" href="/dashboard/submission/review/{{$sb->id}}">review</a>
            &nbsp;&nbsp;
            <a class="btn btn-sm btn-info" href="/dashboard/submission/edit/{{$sb->id}}"><i class="fas fa-pencil"></i>edit</a>
            &nbsp;&nbsp;
            <a class="btn btn-sm btn-danger" href="/dashboard/submission/delete/{{$sb->id}}"><i class="fa fa-trash-alt"></i></a>
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
        $('#table_submission').DataTable();
    } );
</script>
<script>
    $('.dropdown-toggle').dropdown();
</script>
@endsection


@endsection