@extends('API.civic')

@section('title', 'API')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Project Descriptions</h1>
    </div>
</div>
<div>
    <p>Displays all the project name and description.</p>
   

    <div></div>

    <h4>Method:  <b>Get</b></h4>
    <div></div>
    <h5>Url: <a href="https://ashesicivicengagement-dev.herokuapp.com/civicdoc/projects/project/description"> https://ashesicivicengagement-dev.herokuapp.com/civicdoc/projects/project/description </a> </h5>

    <div></div>
    <h5>Parameters</h5>
   

    <div></div>
    <h6><b>Returns: </b> </h6>
<code>
   {<br>
    <samp style="margin-left:40px;color:#ff0000">"projectDescriptions":[</samp><br>
        <samp style="margin-left: 80px">{</samp><br>
            <samp style="margin-left: 120px;color:black">"projectName": </samp>"Future of Africa - Midunu",<br>
            <p><samp style="margin-left: 120px;color:black">"description":</samp>"Mi Dunu is a feeding program for street kids under Future of Africa initiative. It aims at creating a friendly environment where street children feel comfortable to share their experiences with trained volunteers.",</p>
        <samp style="margin-left: 80px">}</samp><br>
    <samp style="margin-left: 40px">]</samp><br
<samp style="margin-left:30px">}</samp>
</code>

</div>

@endsection