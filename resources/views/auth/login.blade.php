<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
    <meta charset="utf-8">
    <title>Sign-in - Sikers</title>
  </head>
  <body>
    <div class="newsletter-container">
      <div class="picture"></div>
        <div class="login">
          <img src="../image/sikers-logo.png" alt="logo"><br><br>
          <h1>Welcome to Sikers</h1>
          <form class="form" action="/auth/postlogin" method="POST">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="check" onclick="click()">
            <label class="form-check-label" for="Check1">Show / Hide Password</label>
          </div>
          <button id="login-btn" type="submit" class="btn btn-primary">Sign-in</button>
          </form>
          <p><br>don't have any account? please <a href="/auth/register">Sign-up</a></p>
        </div>
    </div>

<script>
function click()
{

  var pw = document.getElementById("password");
  if(pw.type == "password")
  {
    pw.type == "text";
  }else{
    pw.type == "password";
  }

}
</script>
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
