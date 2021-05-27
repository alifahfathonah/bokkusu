<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Bokkusu</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- DataTables CSS -->
        <link rel="stylesheet" href="datatables.min.css" />
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
                                        <a class="dropdown-item" href="#!">{{Auth::user()->name}}</a>
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
                    <h1 class="mt-4">Main Dashboard - Bokkusu</h1>

                <div class="row mb-3">

                    <div class="col-sm-3 mb-3">
                        <div class="card bg-secondary text-white">
                        <div class="card-header">
                        <h3>
                        Account
                        </h3>
                        </div>
                        <div class="card-body">
                        <h4>
                        4
                        </h4>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-3 mb-3">
                        <div class="card bg-warning text-white">
                        <div class="card-header">
                        <h3>
                        Submission
                        </h3>
                        </div>
                        <div class="card-body">
                        <h4>
                        4
                        </h4>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-3 mb-3">
                        <div class="card bg-primary text-white">
                        <div class="card-header">
                        <h3>
                        Documents
                        </h3>
                        </div>
                        <div class="card-body">
                        <h4>
                        3
                        </h4>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-3 mb-3">
                        <div class="card bg-danger text-white">
                        <div class="card-header">
                        <h3>
                        Partner
                        </h3>
                        </div>
                        <div class="card-body">
                        <h4>
                        10
                        </h4>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-3 mb-3">
                        <div class="card bg-info text-white">
                        <div class="card-header">
                        <h3>
                        Legal
                        </h3>
                        </div>
                        <div class="card-body">
                        <h4>
                        1
                        </h4>
                        </div>
                        </div>
                    </div>

                </div>

                    <table id="table_submission">
                        <thead>
                            <tr>
                                <th>user</th>
                                <th>email</th>
                                <th>gender</th>
                                <th>institution</th>
                                <th>action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="#"></a>
                                    <a href="#"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!--jquery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!--Core DataTables JS-->
        <script src="datatables.min.js"></script>
        <script>
             $(document).ready( function () {
                $('#table_submission').DataTable();
            } );
        </script>
    </body>
</html>
