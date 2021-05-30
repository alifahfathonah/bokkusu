<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/register.css">
    <meta charset="utf-8">
    <title>Register - Bokkusu</title>
  </head>
  <body>
    <div class="newsletter-container">
      <div class="picture"></div>
        <div class="login">
          <img src="../image/logobokkusu.png" alt="logo"><br><br>
          <h1>Welcome to us</h1>
          <form class="form" action="/auth/postregister" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fullname</label>
                <input name="name" type="text" class="form-control" id="" aria-describedby="">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input name="username" type="text" class="form-control" id="" aria-describedby="">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Institution</label>
                <input name="institution" type="text" class="form-control" id="" aria-describedby="">
            </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <label for="exampleSelectGender1" class="form-label">Gender</label>
          <select name="gender" class="form-select" aria-label="Default select example">
          <option disable selected>Please select gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
        <br>
          <button id="button-sign-up" type="submit" class="btn btn-primary">Sign-up</button>
        </form>
          <p><br>already have any account? please <a href="/auth/login">Login</a></p>
        </div>
    </div>
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
