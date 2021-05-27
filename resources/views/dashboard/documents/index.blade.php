@extends('dashboard.templates.master')

@section('title','Documents')

@section('content')

<h1>Documents - Bokkusu</h1>

<a class="btn btn-primary mb-3" href="/dashboard/documents/create">
    Create Document
</a>

<br>

<table id="table_documents" class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Extension</th>
                                <th>File</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
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