<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Civic </title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/beta_css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/customize.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/customize.css') }}">
    
    

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

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script>
    //referenced from Code Lab
    $(document).ready(function(){
     $('input[name="status1"]').click(function(){

        var status = $(this).attr("value");
        if(status==="student"){
            $("#student1").show('slow');
            $("#staffaculty1").hide();
        }else{
            $("#student1").hide();
            $("#staffaculty1").show('slow');
        }
    });
     $('input[name="radios1"]').click(function(){
        var input = $(this).attr('value');
        if(input === "yes"){
            $('#projectlead2').show();
        }else{
            $('#projectlead2').hide();
        }
    });
     $('input[name="radios2"]').click(function(){
        var input2 = $(this).attr('value');
        if(input2 === "yes"){
            $('#projectLead3').show();
            $('#projectLead3').hide();
        }else{
            $('#projectLead3').hide();
        }
    });
 });
</script>


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
            <!-- Top Navigation: Left Menu -->
            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="#"><i class="fa fa-home fa-fw"></i>Grand Application</a></li>
            </ul>
            
            
            @if (Route::has('login'))
            <div>
                @if (Auth::check())

                <!--right at the top-->
                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i>Deadline
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
                @else

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a href="{{ route('login') }}">
                            <i class="fa fa-bell fa-fw"></i> Login<b class="caret"></b>
                        </a>   
                    </li>
                    <li>
                        <a href="{{ route('register') }}">
                            <i class="fa fa-user fa-fw"></i> Register <b class="caret"></b>
                        </a>
                    </li>
                </ul>
                @endif
            </div>
            @endif


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse " id="applicationCollapse">

                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{ route('grandApllication') }}" class="active"><i class="fa fa-dashboard fa-fw"></i> Tier 1 info</a>
                        </li>

                        <li>
                            <a href=""><i ></i>Application Steps <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('startApplying') }}" class="active"><i class="fa fa-dashboard fa-fw"></i>Project Brief</a>
                                </li>
                                <li>
                                    <a href="{{ route('projectLead') }}"><i class="fa fa-sitemap fa-fw"></i>Project Leaders</a>
                                </li>
                                <li>
                                    <a href="{{ route('pMotivation') }}"><i class="fa fa-sitemap fa-fw"></i>Project Lead Motivation</a>
                                </li>
                                <li>
                                    <a href="{{ route('timelineBudget') }}"><i class="fa fa-sitemap fa-fw"></i>Timeline and Budget</a>
                                </li>
                                <!--put an if condition to check if the person registering is a student-->
                                <li>
                                    <a href="{{ route('recommendation') }}"><i class="fa fa-sitemap fa-fw"></i>Recommendation</a>
                                </li>

                            </ul>
                        </li>
                        <!--<li>
                            <a href="{{ route('apiProject') }}"><i class="fa fa-sitemap fa-fw"></i>Tier 2 Fund Application <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('startApplying') }}" class="active"><i class="fa fa-dashboard fa-fw"></i>Project Brief</a>
                                </li>
                                <li>
                                    <a href="{{ route('projectLead') }}"><i class="fa fa-sitemap fa-fw"></i>Project Leaders</a>
                                </li>
                                <li>
                                    <a href="{{ route('pMotivation') }}"><i class="fa fa-sitemap fa-fw"></i>Project Lead Motivation</a>
                                </li>
                                
                            </ul>
                        </li>-->

                          <!--  <ul>
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
    
    <!-- <script src="{{URL::asset('asset/js/bootstrap.min.js')}}"></script>-->
    

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
   <!--  <script>
     /*$(document).ready(function(){
   alert("ready");
   });*/
</script> -->

</body>
</html>
