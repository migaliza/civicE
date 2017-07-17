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
    <h5>Url: <a href="https://ashesicivicengagement-dev.herokuapp.com/civicdoc/projects/project/description" target="_blank"> https://ashesicivicengagement-dev.herokuapp.com/civicdoc/projects/project/description </a> </h5>

    <div></div>
    
    
    <div></div>
    <h6><b>Returns: </b> </h6>

    <code>
     {<br>
     <samp style="margin-left:40px;color:green">"success": </samp><samp style="color:blue">true,</samp><br>
     <samp style="margin-left:40px;color:green">"code": </samp><samp style="color:blue">0,</samp><br>
     <samp style="margin-left:40px;color:green">"locale": </samp><samp style="color:green">"en",</samp><br>
     <samp style="margin-left:40px;color:green">"message": </samp><samp style="color:green">"OK",</samp><br>
     <samp style="margin-left:40px;color:green">"data": </samp><samp style="color:black">[</samp><br>
     <samp style="margin-left: 80px">{</samp><br>
     <samp style="margin-left: 120px;color:green">"id": </samp> "590ccb97b4d8d200713be843",<br>
     <samp style="margin-left: 120px;color:grren">"projectName": </samp>"Future of Africa - Midunu",<br>
     <p><samp style="margin-left: 120px;color:green">"description":</samp>"Mi Dunu is a feeding program for street kids under Future of Africa initiative. It aims at creating a friendly environment where street children feel comfortable to share their experiences with trained volunteers.",</p>
     <samp style="margin-left: 120px;color:green">"projectName": </samp>"Future of Africa - Midunu",<br>
     <p><samp style="margin-left: 120px;color:green">"impactSector":</samp>"Education Healthcare",</p>
     <samp style="margin-left: 80px">}</samp><br>
     <samp style="margin-left: 40px">]</samp><br
     <samp style="margin-left:30px">}</samp>
 </code>

</div>

@endsection