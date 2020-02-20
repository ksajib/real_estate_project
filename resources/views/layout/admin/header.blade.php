<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Avant">
	<meta name="author" content="The Red Team">

    <link rel="stylesheet" href="{{ asset('admin_assets/css/styles.minc726.css?=140') }}">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>


        <link href='{{ asset("admin_assets/demo/variations/default.css") }}' rel='stylesheet' type='text/css' media='all' id='styleswitcher'>

            <link href='{{ asset("admin_assets/assets/demo/variations/default.css") }}' rel='stylesheet' type='text/css' media='all' id='headerswitcher'>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
	<!--[if lt IE 9]>
        <link rel="stylesheet" href="assets/css/ie8.css">
		<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <script type="text/javascript" src="{{ asset('admin_assets/assets/plugins/charts-flot/excanvas.min.js') }}"></script>
	<![endif]-->

	<!-- The following CSS are included as plugins and can be removed if unused-->

<link rel='stylesheet' type='text/css' href='{{ asset("admin_assets/plugins/form-daterangepicker/daterangepicker-bs3.css") }}' />
<link rel='stylesheet' type='text/css' href='{{ asset("admin_assets/plugins/fullcalendar/fullcalendar.css") }}' />
<link rel='stylesheet' type='text/css' href='{{ asset("admin_assets/plugins/form-markdown/css/bootstrap-markdown.min.css") }}' />
<link rel='stylesheet' type='text/css' href='{{ asset("admin_assets/plugins/codeprettifier/prettify.css") }}' />
<link rel='stylesheet' type='text/css' href='{{ asset("admin_assets/plugins/form-toggle/toggles.css") }}' />
</head>

<body class="">
<script>
//   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
//   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
//   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
//   })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

//   ga('create', 'UA-44426473-2', 'auto');
//   ga('send', 'pageview');

</script>


    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>

        <div class="navbar-header pull-left">
            <a class="navbar-brand" href="#">Avant</a>
        </div>

        <ul class="nav navbar-nav pull-right toolbar">
        	<li class="dropdown">
        		<a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs">{{ ucwords(Auth::user()->name) }}<i class="fa fa-caret-down"></i></span></a>
        		<ul class="dropdown-menu userinfo arrow">
        			<li class="username">
                        <a href="#">
        				    <div class="pull-left"><img src="{{ asset('admin_assets/demo/avatar/dangerfield.png') }}" alt="Jeff Dangerfield"/></div>
        				    <div class="pull-right"><h5>{{ ucwords(Auth::user()->name) }}</h5></div>
                        </a>
        			</li>
        			<li class="userlinks">
        				<ul class="dropdown-menu">
        					<li><a href="{{ route('admin.edit-profile') }}">Edit Profile <i class="pull-right fa fa-pencil"></i></a></li>
        					<li><a href="#">Change Password <i class="pull-right fa fa-cog"></i></a></li>
        					<li class="divider"></li>
        					<li><a href="{{ route('logout') }}" class="text-right">Sign Out</a></li>
        				</ul>
        			</li>
        		</ul>
        	</li>
		</ul>
    </header>

    <div id="page-container">
