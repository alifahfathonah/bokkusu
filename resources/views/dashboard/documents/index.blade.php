@extends('dashboard.templates.master')

@section('title','Documents')

@section('content')

<h1>Documents - Sikers</h1>

<a class="btn btn-success mb-3" href="/dashboard/documents/create">
    Create Document
</a>

&nbsp;&nbsp;

<br>

<table class="table table-striped table-bordered" id="table_documents" class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>File</th>
                                <th>Status</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $dt)
                            <tr>
                                <td>{{$dt->name}}</td>
                                <td>{{$dt->doc}}</td>
                                <td>
                                @if($dt->status == 1)
                                <span class="badge bg-success">
                                Disetujui
                                </span>
                                @elseif($dt->status == 2)
                                <span class="badge bg-dark">
                                Dalam Proses Review
                                </span>
                                @elseif($dt->status == 3)
                                <span class="badge bg-danger">
                                Ditolak
                                </span>
                                @elseif($dt->status == 4)
                                <span class="badge bg-warning">
                                Perlu Revisi
                                </span>
                                @endif
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-danger" href="/dashboard/documents/delete/{{$dt->id}}">
                                    Delete
                                    </a>
                                    &nbsp;&nbsp;
                                    <a class="btn btn-sm btn-primary" href="/dashboard/documents/edit/{{$dt->id}}">
                                    Edit
                                    </a>
                                    &nbsp;&nbsp;
                                    <a class="btn btn-sm btn-info" href="/dashboard/documents/review/{{$dt->id}}">
                                    Review
                                    </a>
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
                $('#table_documents').DataTable();
            } );
        </script>
<script>
    $('.dropdown-toggle').dropdown();
</script>
@endsection


@endsection