@extends('dashboard.templates.master')

@section('title','Create Documents')

@section('content')

<h1>Create Documents - Bokkusu</h1>

<br>

<div class="card">
    <div class="card-body">
        <form action="/dashboard/documents/store" class="form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="name">
                Name:
            </label>
                <input name="name" type="text" class="form-control">
            </div>
            <div class="form-group">
            <label for="legal">
               Proposal Document file
            </label>
                <input name="proposal" type="file" class="form-control">
            </div>
            <div class="form-group">
            <label for="legal">
                Legal Document file
            </label>
                <input name="doc" type="file" class="form-control">
            </div>
            <div class="form-group">
            <label for="moa">
                MOA Document file
            </label>
                <input name="moa" type="file" class="form-control">
            </div>
            <div class="form-group">
            <label for="mou">
                MOU Document file
            </label>
                <input name="mou" type="file" class="form-control">
            </div>
            <br>
            <button type="submit" class="btn btn-success">
            SUBMIT
            </button>
            <a href="/dashboard/documents" class="btn btn-danger">
            CANCEL
            </a>
        </form>
    </div>
</div>

@section('script')
<script src="../../js/scripts.js"></script>
<script>
    $('.dropdown-toggle').dropdown();
</script>
@endsection


@endsection