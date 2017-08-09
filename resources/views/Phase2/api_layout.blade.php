<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Civic - @yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/beta_css/bootstrap.min.css') }}">
    

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
            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="#"><i class="fa fa-home fa-fw"></i>Home</a></li>
            </ul>

            <!-- Top Navigation: Right Menu -->
            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown navbar-inverse">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>Update
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> {{ Auth::user()->lName }}<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </li>

                    <li>
                        <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('newProject')}}" class="active"><i class="fa fa-dashboard fa-fw"></i> Add new Project</a>
                    </li>
                    <li>
                        <a href="{{route('manageUsers')}}" class="active"><i class="fa fa-dashboard fa-fw"></i> Manage Users</a>
                    </li>

                    <li>
                        <a href="{{ route('manageFundApplications') }}" class="active"><i class="fa fa-dashboard fa-fw"></i>Fund Application</a>
                    </li>

                    <li>
                        <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Roles and Permissions</a>
                    </li>

                    <li>
                        <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Project Leaders</a>
                    </li>
                    
                </ul>

            </div>
        </div>
    </nav>
    <div id="container">
        @yield('content')
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
