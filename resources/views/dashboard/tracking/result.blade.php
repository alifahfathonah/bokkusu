@extends('dashboard.templates.master')

@section('title','Tracking Result')

@section('content')

<h1>Tracking Result - Bokkusu</h1>

<div class="card">
    <div class="card-body">

    <a class="btn btn-md btn-danger" href="/dashboard/tracking">
    Back to Tracking
    </a>

        <h2>RESULT TRACKING SEARCH</h2>
        <small>{{$count}} Results</small>
        <br>
        <ol>
        @foreach($result as $rs)
            <li>{{$rs->perihal}}
                @if($rs->status == 1)
                                <span class="badge bg-success">
                                Disetujui
                                </span>
                                @elseif($rs->status == 2)
                                <span class="badge bg-warning">
                                Dalam Proses Review
                                </span>
                                @elseif($rs->status == 3)
                                <span class="badge bg-danger">
                                Ditolak
                                </span>
                                @endif
                &nbsp;&nbsp;
                <a class="btn btn-sm btn-info" href="/dashboard/submission/review/{{$rs->id}}">View</a>
            </li>
            <br>
        @endforeach
        </ol>
    </div>
</div>

<br>

@section('script')
<script src="../../js/scripts.js"></script>
<script>
    $('.dropdown-toggle').dropdown();
</script>
@endsection

@endsection