<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Civic </title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/beta_css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/customize.min.css') }}">
  

    <!-- MetisMenu CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/beta_css/metisMenu.min.css') }}">

    <!-- Timeline CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/beta_css/timeline.css') }}">

    <!-- Custom CSS -->
     <link rel="stylesheet" type="text/css" href="{{ asset('css/beta_css/startmin.css') }}">

    <!-- Morris Charts CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/beta_css/morris.css') }}">

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/beta_css/font-awesome.min.css') }}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Civic Engagement Portal</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        
      
    @if (Route::has('login'))
    <div>
        @if (Auth::check())
            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="{{ route('admin') }}"><i class="fa fa-home fa-fw"></i>Home</a></li>
            </ul>
        @else
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a href="#">
                    <i class="fa fa-bell fa-fw"></i> Login<b class="caret"></b>
                </a>   
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user fa-fw"></i> Register <b class="caret"></b>
                </a>
            </li>
        </ul>
        @endif
    </div>
    @endif
      

    <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    
                    <li>
                        <a href="{{ route('dashboard')}}" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('apiProject') }}"><i class="fa fa-sitemap fa-fw"></i> Project</a>
                    </li>
                    <li>
                        <a href="{{ route('apiIndividual') }}"><i class="fa fa-sitemap fa-fw"></i> Individual project</a>
                    </li>
                    <li>
                        <a href="{{ route('apiDescription') }}"><i class="fa fa-sitemap fa-fw"></i> Project Descriptions</a>
                    </li>
                    <li>
                        <a href="{{ route('apiTier') }}"><i class="fa fa-sitemap fa-fw"></i> Project Tier</a>
                    </li>
                    <li>
                        <a href="{{ route('apiGrand') }}"><i class="fa fa-sitemap fa-fw"></i> Grand Info</a>
                    </li>
                    <li>
                        <a href="{{ route('apiProject') }}"><i class="fa fa-sitemap fa-fw"></i> Milestone</a>
                    </li>
                    <li>
                        <a href="{{ route('apiProject') }}"><i class="fa fa-sitemap fa-fw"></i> Target Population</a>
                    </li>
                    <li>
                        <a href="{{ route('apiProject') }}"><i class="fa fa-sitemap fa-fw"></i> Volunteers </a>
                    </li>
                    <!--<li>
                        <a href="{{ route('apiProject') }}"><i class="fa fa-sitemap fa-fw"></i> Project <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="">View Projects</a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="{{ route('apiProject') }}">View all</a>
                                    </li>
                                    <li>
                                        <a href="#">View By Tier</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#">Project Components <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Milestone</a>
                                    </li>
                                    <li>
                                        <a href="#">Events</a>
                                    </li>
                                    <li>
                                        <a href="#">Grant info</a>
                                    </li>
                                    <li>
                                        <a href="#">Upcoming</a>
                                    </li>
                                    <li>
                                        <a href="#">Milestone</a>
                                    </li>

                                </ul>
                            </li>

                            <li>
                                <a href="#">Active projects <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Milestone</a>
                                    </li>

                                </ul>
                            </li>

                            <li>
                                <a href="#">In active Projects<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Milestone</a>
                                    </li>   
                                </ul>
                            </li>
                        </ul>
                    </li>-->
                </ul>

            </div>
        </div>
</nav>

 <div id="page-wrapper">
        <div class="container-fluid">
            <div id="container">
                @yield('content')
            </div>
        </div>
</div>  

</div>
<script src="{{ asset('js/app.js') }}"></script>

    <!-- jQuery -->
<script src="{{ asset('js/beta_js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/beta_js/bootstrap.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/beta_js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('js/beta_js/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
<script src="{{ asset('js/beta_js/startmin.js') }}"></script>

</body>
</html>
