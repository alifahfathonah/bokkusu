@extends('dashboard.templates.master')

@section('title','Tracking')

@section('content')

<h1>Tracking - Bokkusu</h1>

<div class="card">
    <div class="card-body">
        <form action="#" method="GET">
            @csrf
            <div class="form-group">
                <label for="search">
                    Search:
                </label>
                <input type="search" name="search" placeholder="Search..." autocomplete="off">
                <input type="submit" class="btn btn-success" value="SEARCH">
            </div>
        </form>
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