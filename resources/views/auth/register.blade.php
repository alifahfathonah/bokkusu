<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Register - Bokkusu</title>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card mt-3">
                    <div class="card-body">
                    <img width="75px" height="75px" class="mx-auto d-block" src="../image/logobokkusu.png" alt="Logo Bokkusu">
	                    <h2 class="title text-center mb-3">Bokkusu - Sign up</h2>
                        <form action="/auth/postregister" method="POST" class="form">
                        @csrf
                            <div class="form-group">
                                <label for="name">
                                    Full Name:
                                </label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="username">
                                    Username:
                                </label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                                <label for="Email">
                                    Email:
                                </label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="institution">
                                    Institution:
                                </label>
                                <input type="text" class="form-control" name="institution">
                            </div>
                            <div class="form-group">
                                <label for="sex">
                                    Sex / Gender:
                                </label>
                                <select class="form-control" name="sex" id="#">
                                    <option selected disabled>SELECT GENDER</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Password:
                                </label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <input type="submit" value="Register" class="btn btn-success">
                            &nbsp;&nbsp;
                            if you have a account, Please <a href="/auth/login">Sign in</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</body>
</html>    