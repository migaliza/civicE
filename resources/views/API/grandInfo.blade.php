@extends('API.civic')

@section('title', 'API')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Grand Info</h1>
  </div>
</div>
<div>
  <p>Displays grand info for the project.</p>
  

  <div></div>

  <h4>Method:  <b>Get</b></h4>
  <div></div>
  <h5>Url: <a href="https://ashesicivicengagement-dev.herokuapp.com/civicdoc/projects/funding?pId=" target="_blank"> https://ashesicivicengagement-dev.herokuapp.com/civicdoc/projects/funding?pId=<b>598cb39fec432900711efc22</b></a> </h5>

  <div></div>
  <h5>Parameters: </h5>
  <ul>
    <li>pId (project Id) i.e <i>598cb39fec432900711efc22</i></li>
  </ul>
  
  
  <div></div>
  <h6><b>Returns: </b> </h6>
  <code>
   {<br>
   <samp style="margin-left:40px;color:green">"success": </samp><samp style="color: blue">true</samp>,<br>
   <samp style="margin-left:40px;color:green">"code": </samp><samp style="color: blue">0</samp>,<br>
   <samp style="margin-left:40px;color:green">"local": </samp><samp style="color: green">"en"</samp>,<br>
   <samp style="margin-left:40px;color:green">"message": </samp><samp style="color: green">"OK"</samp>,<br>
   <samp style="margin-left:40px;color:green">"data": </samp>[<br>
   <samp style="margin-left: 80px">{</samp><br>
   <samp style="margin-left: 120px;color:black">"fPartner": "Ford Foundation"</samp><br>
   <samp style="margin-left: 120px;color:black">"fAmount": </samp><samp style="color: blue">3800</samp>,<br>
   <samp style="margin-left: 120px;color:black">"fObjective": "This will be updated as soon as the right data is found"</samp><br>
   <samp style="margin-left: 120px;color:black">"fDescription": "This will be updated as soon as the right data is found"</samp><br>
   <samp style="margin-left: 80px">}</samp><br>
   <samp style="margin-left:40px">]</samp><br>

 }<br>
</code>

</div>

@endsection