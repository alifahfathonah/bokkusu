<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Review Submission - Bokkusu</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">

<h1>Review Submission - Bokkusu</h1>

@foreach($data as $dt)
<div class="card">
    <div class="card-header">
    <span>{{$dt->jenis_dokumen}}</span>
    <h1>
    {{$dt->perihal}}
    </h1>
    <small>{{$dt->durasi}} days</small>
    </div>
    <div class="card-body">
    <p class="text-justify">
    <b>deskripsi:</b> <br>
    {{$dt->deskripsi}}
    </p>
    <br>
    <p class="text-justify">
    <b>rencana implementasi:</b> <br>
    {{$dt->rencana_implementasi}}
    </p>
    <iframe src="{{ url('../file/'.$dt->files) }}" frameborder="0" width="400" height="300"></iframe>
    <br>
    <b>file:</b> <p class="text-justify">{{$dt->files}}</p>
    </div>
    <br>
    <b></b>

<div class="row">

    @if(Auth::user()->role == 2 and 4)
    <div class="col">

    <form action="/dashboard/submission/approve" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$dt->id}}">
    <input type="submit" class="btn btn-sm btn-success" value="Setujui">
    </form>

    &nbsp;&nbsp;
    <form action="/dashboard/submission/disapprove" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$dt->id}}">
    <input type="submit" class="btn btn-sm btn-danger" value="Tolak">
    </form>

    &nbsp;&nbsp;
    <form action="/dashboard/submission/revision" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$dt->id}}">
    <input type="submit" class="btn btn-sm btn-warning" value="Revisi">
    </form>

    <br>
    
    &nbsp;&nbsp;
    <a href="/dashboard/submission" class="btn btn-sm btn-info mb-3">
        Kembali
    </a>

    </div>
    @else

</div>

&nbsp;&nbsp;
<a href="/dashboard/submission" class="btn btn-sm btn-info mb-3">
    Kembali
</a>
@endif
</div>
@endforeach

</div>

</body>
</html>