@extends('API.civic')

@section('title', 'API')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Upcoming Comment</h1>
  </div>
</div>
<div>
  <p>Allow the project lead and volunteers to add a comment on the upcoming event posted by the project lead</p>

  <div></div>

  <h4>Method:  <b>post</b></h4>
  <div></div>
  <h5>Url: <a href="https://ashesicivicengagement-dev.herokuapp.com/civicdoc/project/upcoming/comment/new?pId=" target="_blank">https://ashesicivicengagement-dev.herokuapp.com/civicdoc/project/upcoming/comment/new?pId=---&upId=---&userId---&comment=--</b></a></h5>

  <div></div>
  <h5>Parameters: </h5>
  <ul>
    <li>pId  (projectId)i.e <b>id=<i>79827kjdhj</i></b></li>
    <li>upId (upcoming Id) </li>
    <li>userId</li>
    <li>comment</li>
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