@extends('dashboard.templates.master')

@section('title','Create News')

@section('content')

<h1>
    Create News - Sikers
</h1>

<div class="card">
    <div class="card-body">
        <form action="/dashboard/news/store" class="form" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title" class="label">
                    Thumbnail Image:
                </label>
                <input type="file" class="form-control" name="thumb">
            </div>
            <div class="form-group">
                <label for="title" class="label">
                    Title:
                </label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="body" class="label">
                    Description:
                </label>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </div>
            <br>
            <input type="submit" class="btn btn-md btn-success" value="Create">
            <input type="resett" class="btn btn-md btn-warning" value="Reset">
            <a class="btn btn-md btn-danger" href="/dashboard/news">
            Cancel
            </a>
        </form>
    </div>
</div>