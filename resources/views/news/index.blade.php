<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>News - Sikers</title>
    <link rel="stylesheet" href="../css/news.css">
  </head>
  <body>
    <div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Collapsed content</h5>
    <span class="text-muted">Toggleable via the navbar brand.</span>
  </div>
</div>
<nav class="navbar navbar-light" style="background-color: #FFFFFF;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<div class="homepage">
  <div class="inner-width">
    <div class="content">
  <h1>Sikers News</h1>
  <div class="d-flex justify-content-center" id="get-started">
<a href="/" class="btn btn-outline-light">Back to Home</a>
  </div>
</div>
</div>
</div>

<div class="news">
  <div class="inner-width">
    <div class="content">
        <h1>News</h1>
           <div class="row align-items-center">

          @foreach($news as $data)
          <div class="col-md-4 mb-4 p-2 pr-3">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ url('file/'.$data->thumbnail) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$data->title}}</h5>
              <p class="card-text">{!!$data->description!!}</p>
              <a href="/news/read/{{$data->slug}}" class="btn btn-primary" id="button-news">Read More</a>
            </div>
          </div>
          </div>
          @endforeach

            </div>

</div>
</div>
</div>

<div class="footer"></div>

  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
