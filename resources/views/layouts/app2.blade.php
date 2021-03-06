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
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        ]) !!};
    $(document).ready(function(){
        
        $('#citizenship').on('change', function(){

            var country = $('#citizenship').val();
            if(country == "Ghana"){
                $('#showRegion').show();
            }
            else{
                $('#showRegion').hide();
            }
        });


    });

</script>

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
                <li><a href="#"><i class="fa fa-home fa-fw"></i></a></li>
            </ul>
            
            
            @if (Route::has('login'))
            <div>
                @if (Auth::check())
                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="{{ route('admin') }}"><i class="fa fa-home fa-fw"></i>Home</a></li>
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


</body>
</html>
