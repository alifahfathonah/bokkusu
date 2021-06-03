@extends('dashboard.templates.master')

@section('title','Tracking')

@section('content')

<h1>Tracking - Sikers</h1>

<div class="row">
<div class="col-md-6">
<div class="card">
    <div class="card-body">
        <form action="/dashboard/tracking/search" method="GET">
            @csrf
                    <div class="form-group">
                    <label for="search">
                        <b>Search:</b>
                    </label>
                    <input class="form-control" type="search" name="search" placeholder="Search..." autocomplete="off">
                    <br>
                    <input type="submit" class="btn btn-success" value="SEARCH">
                    </div>
        </form>
    </div>
</div>
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