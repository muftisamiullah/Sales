<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="{{ url('public/css/style.css')}}" type="text/css"> -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <!-- <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <!-- <link href="https://fonts.googleapis.com/css?family=Amiri" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="img/favicon.jpg"> -->
    <title>Anti Viruses</title>
    <link rel="icon" href="/" />
</head>
<body style="overflow-x: hidden;">
    <div class="row2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <nav class="navbar-expand-lg">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">+3(800) 2345-6789</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle small" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Currency
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">$ USD</a>
                                    <a class="dropdown-item" href="#">euro</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle small" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Lang
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">English</a>
                                    <a class="dropdown-item" href="#">Russian</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <nav class="navbar-expand-lg">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle small" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    My Account
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#Register" data-toggle="modal">Register</a>
                                    <a class="dropdown-item" href="#Login" data-toggle="modal">Login</a>
                                </div>
                            </li>
                            <!-- Modal -->
                            <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title colored" id="exampleModalLongTitle">Login</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="/api/login" id="form">
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4" class="colored">Email</label>
                                                    <input type="email" class="form-control" id="email1" placeholder="Email"
                                                        name="email">
                                                    <small class="form-text" style="color:red"></small>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputPassword4" class="colored">Password</label>
                                                    <input type="password" class="form-control" id="password1"
                                                        placeholder="Password" name="password">
                                                    <small class="form-text" style="color:red"></small>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm mr-auto"
                                                        data-dismiss="modal">Close</button>
                                                    <a href="#" class="badge badge-light">forgot password</a>
                                                    <input type="submit" class="btn btn-primary btn-sm" value="Login"
                                                        name="login">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="Register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title colored" id="exampleModalLongTitle">Register</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="/api/register" id="formReg">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4" class="colored">Name</label>
                                                        <input type="text" class="form-control" id="name" placeholder="Name"
                                                            name="name">
                                                        <small class="form-text" style="color:red"></small>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4" class="colored">Phone No</label>
                                                        <input type="number" class="form-control" id="phone"
                                                            placeholder="Phone" name="phone">
                                                        <small class="form-text" style="color:red"></small>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="colored">Email</label>
                                                        <input type="text" class="form-control" id="email" placeholder="Email"
                                                            name="email">
                                                        <small class="form-text" style="color:red"></small>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4" class="colored">Password</label>
                                                        <input type="password" class="form-control" id="password"
                                                            placeholder="Password" name="password">
                                                        <small class="form-text" style="color:red"></small>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4" class="colored">Confirm Password</label>
                                                        <input type="password" class="form-control" id="passwordMatch"
                                                            placeholder="Retype Password">
                                                        <small class="form-text" style="color:red"></small>
                                                    </div>
                                                    <small id="passwordHelpBlock" class="form-text text-muted">
                                                        Your password must be 8-20 characters long, contain letters and
                                                        numbers, and must not contain spaces, special characters, or
                                                        emoji.
                                                    </small>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm mr-auto"
                                                        data-dismiss="modal">Close</button>
                                                    <input type="submit" class="btn btn-primary btn-sm" value="SignUp"
                                                        name="register">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <li class="nav-item">
                                <a class="nav-link small" href="#">Wishlist (0)</a>
                            </li>
                            <li>
                                <!-- <a class="nav-link" href="#" style="display:inline;margin-top:10px;"><i class="fab fa-twitter"></i></a>
                                <a class="nav-link" href="#" style="display:inline;"><i class="fab fa-facebook"></i></a> -->
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row1">
        <div class="container">
            <div class="row pt-3">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                    <form class="form-inline" method="post" enctype="multipart/form-data" style="padding-bottom:20px">
                        <div class="input-group ml-auto">
                            <input type="email" name="email" class="form-control form-control-sm" size="25" placeholder="Search"
                                required>
                            <!-- <div class="input-group-btn"> -->
                            <button type="submit" name="submit" value="Search" class="btn btn-danger btn-sm">
                                <i class="fa fa-search"></i></button>
                            <!-- </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light navstar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="#" width="100" height="40" alt="">Anti Virus</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/api/products">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/api/products/1">Laptops</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/api/products/2">Anti Viruses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/api/products/3">Printers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/api/products/4">Accessories</a>
                    </li>
                </ul>
                <ul class="navbar-nav nav-right ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> Cart 0 item(s)</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>