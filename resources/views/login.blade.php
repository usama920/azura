<!DOCTYPE html>
<html lang="en" dir="ltr" data-theme-color="default">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 5 admin template,bootstrap 5 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 5,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 5,template admin bootstrap 5" />

    <!-- Title -->
    <title> Login - Radio Casthost </title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/brand/favicon.ico')}}" type="image/x-icon" />

    <!-- Icons css -->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">

    <!--  Bootstrap css-->
    <link id="style" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Main js -->
    <script src="{{asset('assets/js/local-main.js')}}"></script>

    <!-- Style css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body class="ltr error-page1 bg-primary">

    <!-- Progress bar on scroll -->
    <div class="progress-top-bar"></div>


    <!-- Loader -->
    <div id="global-loader">
        <img src="{{asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <div class="square-box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <div class="bg-svg">
        <div class="page">
            <div class="z-index-10">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 mx-auto my-auto py-4 justify-content-center">
                            <div class="card-sigin">
                                <!-- Demo content-->
                                <div class="main-card-signin d-md-flex">
                                    <div class="wd-100p">
                                        <div class="d-flex">
                                            <a href="index.html">
                                                <img src="{{asset('assets/img/brand/favicon-white.png')}}" class="sign-favicon ht-40 logo-dark" alt="logo">
                                                <img src="{{asset('assets/img/brand/favicon-white-1.png')}}" class="sign-favicon ht-40 logo-light-theme" alt="logo">
                                            </a>
                                        </div>
                                        <div class="mt-3">
                                            <h2 class="tx-medium tx-primary">Welcome back!</h2>
                                            <h6 class="font-weight-semibold mb-4 text-dark">Please sign in to continue.</h6>
                                            <div class="panel tabs-style7 scaleX mt-2">
                                                <div class="panel-head">
                                                    <ul class="nav nav-tabs d-block d-sm-flex">
                                                        <li class="nav-item"><a class="nav-link tx-14 font-weight-semibold text-sm-center text-start active" data-bs-toggle="tab" href="#signinTab1">Username</a></li>
                                                    </ul>
                                                </div>
                                                <div class="panel-body p-0">
                                                    <div class="tab-content mt-3">
                                                        <div class="tab-pane active" id="signinTab1">
                                                            <form action="{{url('/tryLogin')}}">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Username" type="text" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Password" type="password" required>
                                                                </div>
                                                                <div class="d-flex align-items-center justify-content-between">

                                                                    <a href="index.html" class="btn btn-primary">Log In</a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- JQuery min js -->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap js -->
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!--Internal  Perfect-scrollbar js -->
    <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

    <!-- authentication js -->
    <script src="{{asset('assets/js/authentication.js')}}"></script>

    <!-- custom js -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

</body>

</html>