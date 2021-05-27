<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>@yield('title') - Bokkusu</title>
</head>
<body>
<div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light"><b>Bokkusu</b></div>
                <div class="list-group list-group-flush">
                    @if(Auth::user()->role == 1)
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/documents">Documents</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/submission">Submission</a>
                    @else
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/documents">Documents</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/user">User Management</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/user/create">Add User</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/tracking">Tracking</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/tracking_result">Tracking Result</a>
                    @endif
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @if(Auth::user()->role == 1)
                                    Unit Pelaksana
                                    @elseif(Auth::user()->role == 2)
                                    Unit Pengelola
                                    @elseif(Auth::user()->role == 3)
                                    Legal
                                    @elseif(Auth::user()->role == 4)
                                    Pimpinan
                                    @endif
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">
                                        {{Auth::user()->name}}
                                        </a>
                                        <a class="dropdown-item" href="#">About</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/auth/dashboard/logout">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        <!--jquery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        @yield('script')
    

</body>
</html>