<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Review Legalization - Sikers</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">

<h1>Edit Documents - Sikers</h1>

<div class="card">
    <div class="card-body">
        @foreach($documents as $doc)
        <form class="form" action="/dashboard/documents/update" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" class="form-control" name="id" value="{{$doc->id}}">
        <div class="form-group mb-3">
        <label for="name" class="label">
        Name:
        </label>
        <input type="text" class="form-control" name="name" value="{{$doc->name}}">
        </div>
        <br>
        <div class="form-group mb-3">
        <label for="proposal" class="label">
        Proposal Document File:
        </label>
        <input type="file" class="form-control" name="proposal" value="{{$doc->proposal}}">
        </div>
        <div class="form-group mb-3">
        <label for="legal" class="label">
        Legal Document File:
        </label>
        <input type="file" class="form-control" name="doc" value="{{$doc->doc}}">
        </div>
        <div class="form-group">
            <label for="moa">
                MOA Document file
            </label>
                <input name="moa" type="file" class="form-control" value="{{$doc->moa}}">
        </div>
        <div class="form-group">
            <label for="mou">
                MOU Document file
            </label>
                <input name="mou" type="file" class="form-control" value="{{$doc->mou}}">
        </div>
        <div class="form-group">
            <label for="status">
                Status
            </label>
                <input name="status" type="text" class="form-control" value="{{$doc->status}}">
        </div>
        <br>
        <input type="submit" name="update" class="btn btn-md btn-success" value="UPDATE">
        </form>
        @endforeach
    </div>
</div>

</div>
</body>
</html>