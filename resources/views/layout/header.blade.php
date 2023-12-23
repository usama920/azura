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
    <title> Casthost Radio Dashboard </title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/brand/favicon.ico')}}" type="image/x-icon" />

    <!-- Icons css -->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">

    <!-- Bootstrap css-->
    <link id="style" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Main js -->
    <script src="{{asset('assets/js/local-main.js')}}"></script>

    <!-- Main js -->
    <script src="{{asset('assets/js/local-main.js')}}"></script>

    <!-- Style css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- Plugins css 
        -->
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">

</head>

<body class="ltr main-body app sidebar-mini index">
    <div class="progress-top-bar"></div>

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top" class="back-to-top rounded-circle shadow"><i class="las la-arrow-up"></i></a>

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader" />
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">
        <div class="layout-position-binder">
            <!-- main-header -->
            <div class="main-header side-header sticky nav nav-item">
                <div class="main-container container-fluid">
                    <div class="main-header-left">
                        <div class="responsive-logo">
                            <a href="index.html" class="header-logo">
                                <img src="{{asset('assets/img/brand/logo-white.png')}}" class="mobile-logo dark-logo-1" alt="logo" />
                                <img src="{{asset('assets/img/brand/logo-white-1.png')}}" class="mobile-logo-1 dark-logo-1" alt="logo" />
                            </a>
                        </div>
                        <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                            <!-- <div class="icon"></div> -->
                            <a class="open-toggle" href="javascript:void(0)"><i class="header-icon fe fe-align-left"></i></a>
                            <a class="close-toggle" href="javascript:void(0)"><i class="header-icon fe fe-x"></i></a>
                        </div>
                        <div class="logo-horizontal">
                            <a href="index.html" class="header-logo">
                                <img src="{{asset('assets/img/brand/logo-white.png')}}" class="mobile-logo dark-logo-1" alt="logo" />
                                <img src="{{asset('assets/img/brand/logo-white-1.png')}}" class="mobile-logo-1 dark-logo-1" alt="logo" />
                            </a>
                        </div>
                        <div class="main-header-center ms-4 d-sm-none d-md-none d-lg-block form-group">
                            <input class="form-control" placeholder="Search..." type="search" />
                            <button class="btn br-te-4 br-be-4">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="main-header-right">
                        <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                        </button>
                        <div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                <ul class="nav nav-item header-icons navbar-nav-right ms-auto">
                                    <li class="nav-item full-screen fullscreen-button">
                                        <a class="new nav-link full-screen-link" href="javascript:void(0)"><svg class="ionicon header-icon-svgs" viewBox="0 0 512 512">
                                                <title>Full Width</title>
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M432 320v112H320M421.8 421.77L304 304M80 192V80h112M90.2 90.23L208 208M320 80h112v112M421.77 90.2L304 208M192 432H80V320M90.23 421.8L208 304" />
                                            </svg></a>
                                    </li>
                                    <li class="search-icon d-lg-none d-block">
                                        <form class="navbar-form" role="search">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search" />
                                                <span class="input-group-btn">
                                                    <button type="reset" class="btn btn-default">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                    <button type="submit" class="btn btn-default nav-link resp-btn">
                                                        <svg class="ionicon header-icon-svgs" viewBox="0 0 512 512">
                                                            <title>Search</title>
                                                            <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                        </svg>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                    </li>
                                    <li class="dropdown main-profile-menu nav-item">
                                        <a class="new nav-link profile-user rounded-circle shadow d-flex" href="javascript:void(0)" data-bs-toggle="dropdown"><img alt="" src="{{asset('assets/img/users/11.jpg')}}" /></a>
                                        <ul class="dropdown-menu">
                                            <li class="bg-primary p-3 br-ts-5 br-te-5">
                                                <div class="d-flex wd-100p">
                                                    <div class="avatar">
                                                        <img alt="avatar" class="rounded-circle" src="{{asset('assets/img/users/11.jpg')}}" />
                                                    </div>
                                                    <div class="ms-3 my-auto">
                                                        <h6 class="tx-15 text-black font-weight-semibold mb-0">
                                                            Json Taylor
                                                        </h6>
                                                        <span class="text-black op-8 tx-11">Web Designer</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="profile.html"><i class="fe fe-user"></i>Profile</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="signup.html"><i class="fe fe-power"></i>Log Out</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /main-header -->

            <!-- main-sidebar -->
            <div class="sticky">
                <aside class="app-sidebar">
                    <div class="main-sidebar-header active">
                        <a class="header-logo active" href="index.html">
                            <img src="{{asset('assets/img/brand/logo-white.png')}}" class="main-logo desktop-dark" alt="logo" />
                            <img src="{{asset('assets/img/brand/logo-white-1.png')}}" class="main-logo desktop-dark-1" alt="logo" />
                            <img src="{{asset('assets/img/brand/favicon-white.png')}}" class="main-logo mobile-dark" alt="logo" />
                            <img src="{{asset('assets/img/brand/favicon-white-1.png')}}" class="main-logo mobile-dark-1" alt="logo" />
                        </a>
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left">
                            <svg fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg>
                        </div>
                        <ul class="side-menu">
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <i class="icon ion-md-cube side-menu__icon"></i>
                                    <span class="side-menu__label">Dashboard</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu__label1">
                                        <a href="javascript:void(0)">Dashboard</a>
                                    </li>
                                    <li><a class="slide-item" href="index.html">General</a></li>
                                    <li>
                                        <a class="slide-item" href="index-1.html">Ecommerce</a>
                                    </li>
                                    <li>
                                        <a class="slide-item" href="index-2.html">Projects</a>
                                    </li>
                                    <li><a class="slide-item" href="index-3.html">HRM</a></li>
                                    <li><a class="slide-item" href="index-4.html">CRM</a></li>
                                    <li>
                                        <a class="slide-item" href="index-5.html">Analytics</a>
                                    </li>
                                    <li>
                                        <a class="slide-item" href="index-6.html">Crypto</a>
                                    </li>
                                    <li><a class="slide-item" href="index-7.html">Sales</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right">
                            <svg fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- main-sidebar -->
        </div>