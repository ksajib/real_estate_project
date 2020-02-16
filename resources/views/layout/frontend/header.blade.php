<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Roboto:300,400,500,700|Rubik:400,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/demos/real-estate/real-estate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/demos/real-estate/css/font-icons.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/demos/real-estate/fonts.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/css/components/bs-select.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/css/components/bs-switches.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/css/components/ion.rangeslider.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('assets/css/colorsbf2e.css?color=2C3E50') }}" type="text/css" />
    @stack('css')
</head>

<body class="stretched side-push-panel">

    <div id="side-panel">
        <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>
        <div class="side-panel-wrap">
            <div class="widget clearfix">
                <h4 class="t400">Login with Social Profiles</h4>
                <a href="#" class="button button-rounded t400 btn-block center si-colored noleftmargin si-facebook">Facebook</a>
                <a href="#" class="button button-rounded t400 btn-block center si-colored noleftmargin si-gplus">Google</a>
                <div class="line"></div>
                <h4 class="t400">Existing Account?</h4>
                <div id="error-mess"></div>
                <div id="login-form" name="login-form" class="nobottommargin">
                    @csrf
                    <div class="col_full login-m-b">
                        <label for="login-form-username" class="t400">Email:</label><br/>
                        <span id="error-email"></span>
                        <input type="text" id="login-email" name="email" value="" class="form-control" />
                    </div>
                    <div class="col_full login-m-b">
                        <label for="login-form-password" class="t400">Password:</label><br/>
                        <span id="error-password"></span>
                        <input type="password" id="login-password" name="password" value="" class="form-control" />
                    </div>
                    <div class="col_full nobottommargin">
                        <a class="button button-rounded t400 nomargin login-btn" id="login-form-submit" name="login-form-submit" value="login" onclick="postLogin()">Login</a>
                        <a href="#" class="fright">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div id="wrapper" class="clearfix">
<div id="top-bar" class="transparent-topbar">
    <div class="container clearfix">

        <div class="col_half fright col_last clearfix nobottommargin">
            <div class="top-links">
                <ul>
                    <li class="d-md-none d-lg-block"><a href="#"><i class="icon-call"></i> +1800-123-7890</a></li>
                    @if(!empty(Auth::user()) && Auth::user()->role == 1)
                        <li><a href="{{ route('admin.dashboard') }}">My Account</a></li>
                    @elseif(!empty(Auth::user()) && Auth::user()->role == 2)
                        <li><a href="{{ route('admin.dashboard') }}">My Account</a></li>
                    @else
                        <li><a href="javascript:void(0)" class="side-panel-trigger">Login/Register</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>

<header id="header" class="static-sticky transparent-header dark" data-responsive-class="not-dark">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <div id="logo">
                <a href="#" data-dark-logo="{{ asset('assets/demos/real-estate/images/logo.png') }}" class="standard-logo"><img src="{{ asset('assets/demos/real-estate/images/logo.png') }}" alt="Canvas Logo"></a>
                <a href="#" data-dark-logo="{{ asset('assets/demos/real-estate/images/logo@2x.png') }}" class="retina-logo"><img src="{{ asset('assets/demos/real-estate/images/logo%402x.png') }}" alt="Canvas Logo"></a>
            </div>

            <nav id="primary-menu" class="with-arrows">
                <ul>
                    <li class="current">
                        <a href="{{ route('home') }}">
                            <div>Home</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about-us') }}">
                            <div>About Us</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>Properties</div>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('condo-apartments') }}">
                                    <div>Condo Apartments</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('builders') }}">
                            <div>Builders</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}">
                            <div>Services</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('listing') }}">
                            <div>Listing</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact-us') }}">
                            <div>Contact</div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
