@extends('API.civic')

@section('title', 'API')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Milestone Comment</h1>
  </div>
</div>
<div>
  <p>Allow the project lead and volunteers to add a comment on the milestone posted by the project lead</p>

  <div></div>

  <h4>Method:  <b>post</b></h4>
  <div></div>
  <h5>Url: <a href="https://ashesicivicengagement-dev.herokuapp.com/civicdoc/project/milestone/comment/new?mId=&comment=&uId=" target="_blank">https://ashesicivicengagement-dev.herokuapp.com/civicdoc/project/milestone/comment/new?mId=[milestoneId]</b></a></h5>

  <div></div>
  <h5>Parameters: </h5>
  <ul>
    <li>mId  (milestone Id)i.e <b>mId=<i>79827kjdhj</i></b></li>
    <li>uId (userId) i.e <b>uId=<i>982139ueowqje8u9239</i></b></li>
    <li>comment </li>
  </ul>
  <div></div>
  <h6><b>If successful Returns: </b> </h6>
  <code>
   {<br>
   <samp style="margin-left:40px;color:green">"success": </samp><samp style="color: blue"> true</samp><br>
   <samp style="margin-left:40px;color:green">"code": </samp><samp style="color: blue">0</samp><br>
   <samp style="margin-left:40px;color:green">"locale": "en"</samp><br>
   <samp style="margin-left:40px;color:green">"message": "OK"</samp><br>
   <samp style="margin-left:40px;color:green">"data": [</samp><br>

   <samp style="margin-left: 80px">{</samp><br>
   <samp style="margin-left: 120px;color:black">"message": "Succesfully added a comment to milestone"</samp><br>
   <samp style="margin-left: 80px">}</samp><br>
   <samp style="margin-left:40px;color:green">]</samp><br>
 }<br>
</code>
</div>

@endsection