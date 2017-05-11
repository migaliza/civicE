@extends('master')
@section('content')
@section('title','Project')
<link rel="stylesheet" tyep="text/css" href="{{ asset('css/navigate.css') }}">
<div>
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                
                <div class="navi">
                    <ul>
                        <li class="active"><a href="{{ url('/project/new') }}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Projects</span></a></li>
                        <li><a href="{{ route('Milestone', [$projectN]) }}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Milestone</span></a></li>
                        <li><a href="{{ route('event', [$projectN]) }}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Event</span></a></li>
                        <li><a href="{{ route('upcoming', [$projectN]) }}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Upcoming</span></a></li>
                        <li><a href="{{ route('grant', [$projectN]) }}"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Grand Info</span></a></li>
                        <li><a href="{{ route('target', [$projectN]) }}"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Target Population</span></a></li>
                        <li><a href="{{ route('impact',[$projectN]) }}"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Impact</span></a></li>
                        <li><a href="{{ route('lesson', [$projectN]) }}"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Lesson</span></a></li>

                        <li><a href="{{ route('popTrack', [$projectN]) }}"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Target Population Track</span></a></li>

                        <li><a href="{{ route('volTrack', [$projectN]) }}"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Volunteer track</span></a></li>

                        <li><a href="{{ route('fRational', [$projectN]) }}"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Funding Rational</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Search" id="search">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs"><a href="" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown"><img src="http://jskrishna.com/work/merkury/images/user-pic.jpg" alt="user">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                    <h1>{{ rawurldecode($projectN) }}</h1>
                    <!--<h2>{{ rawurldecode($projectN) }}</h2>-->
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 gutter">
                        <input id="project_name" name="project_name" type="hidden" value={{ $projectN }} class="form-control input-md">

                           
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection