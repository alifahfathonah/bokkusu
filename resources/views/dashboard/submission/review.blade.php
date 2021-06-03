<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Review Submission - Sikers</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">

<h1 class="font-weight-bold">Review Submission - Sikers</h1>

@foreach($data as $dt)
<div class="card">
    <div class="card-header">
    <span><b>{{$dt->jenis_dokumen}}</b></span>
    <h1>
    {{$dt->perihal}}
    </h1>
    <small><b>{{$dt->durasi}} days</b></small>
    </div>
    <div class="card-body">
    <h2 class="font-weight-bold">Detail Mitra:</h2>

    <p class="text-justify">
    <h3>Mitra:</h3>
    {{$dt->mitra}}
    </p>

    <p class="text-justify">
    <h3>Institusi Mitra:</h3>
    {{$dt->institusi_mitra}}
    </p>

    <p class="text-justify">
    <h3>Jabatan Mitra:</h3>
    {{$dt->jabatan_mitra}}
    </p>

    <p class="text-justify">
    <h3>Jenis Instansi:</h3>
    {{$dt->jenis_instansi}}
    </p>

    <hr>

    <h2 class="font-weight-bold">Detail Informasi Kerjasama:</h2>
    <p class="text-justify">
    <h3>Deskripsi:</h3>
    {{$dt->deskripsi}}
    </p>
    <p class="text-justify">
    <h3>Rencana implementasi:</h3>
    {{$dt->rencana_implementasi}}
    </p>
    <iframe src="{{ url('../file/'.$dt->files) }}" frameborder="0" width="600" height="600"></iframe>
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