@extends('API.civic')

@section('title', 'API')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Impact Population</h1>
    </div>
</div>
<div>
    <p>Disp
        lays the number of impacted by the project over time.</p>

        <div></div>

        <h4>Method:  <b>Get</b></h4>
        <div></div>
        <h5>Url: <a href="https://ashesicivicengagement-dev.herokuapp.com/civicdoc/project/impactsector/retrieve?pId=" target="_blank">https://ashesicivicengagement-dev.herokuapp.com/civicdoc/project/impactsector/retrieve?pId=[projectId]</b></a></h5>

        <div></div>
        <h5>Parameters: </h5>
        <ul>
            <li>pId  (projectId)i.e <b>id=<i>79827kjdhj</i></b></li>
        </ul>
        <div></div>
        <h6><b>Returns: </b> </h6>
        <code>
           {<br>
           <samp style="margin-left:40px;color:green">"success": </samp><samp style="color: blue"> true</samp><br>
           <samp style="margin-left:40px;color:green">"code": </samp><samp style="color: blue">0</samp><br>
           <samp style="margin-left:40px;color:green">"locale": "en"</samp><br>
           <samp style="margin-left:40px;color:green">"message": "OK"</samp><br>
           <samp style="margin-left:40px;color:green">"data": [</samp><br>

           <samp style="margin-left: 80px">{</samp><br>
           <samp style="margin-left: 120px;color:black">"impactsector": [</samp><br>
           <samp style="margin-left: 200px;color:black">"Counselling":</samp> <br>
           <samp style="margin-left: 200px;color:black">"Mentorship":</samp> <br>
           <samp style="margin-left: 120px;color:black">]</samp><br>
           <samp style="margin-left: 80px">}</samp><br>
           <samp style="margin-left:40px;color:green">]</samp><br>
       }<br>
   </code>
</div>

@endsection