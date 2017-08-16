@extends('API.civic')

@section('title', 'API')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Statistics </h1>
    </div>
</div>
<div>
    <p>Displays volunteer and target population track.</p>


    <div></div>

    <h4>Method:  <b>Get</b></h4>
    <div></div>
    <h5>Url: <a href="https://ashesicivicengagement-dev.herokuapp.com/civicdoc/project/impactpopulation/cumulative?pId=" target="_blank"> https://ashesicivicengagement-dev.herokuapp.com/civicdoc/project/impactpopulation/cumulative?pId=<b>982uoi</b>&track=<b>[selectwhat to track]</b> </a> </h5>

    <div></div>
    <h5>Parameters: </h5>
    <ul>
        <li>pId i.e <b><i>79827kjdhj</i></i></li>
        <li>track i.e <b>population</b> <i style="color:green">to display the target population cumulative values</i>or <b>volunteer </b></i><i style="color: blue">to display the volunteer track over time</i></li>
    </ul>


    <div></div>
    <h6><b>Returns: </b> </h6>
    <code>
       {<br>
       <samp style="margin-left:40px;color:green">"success":</samp><samp style="color: blue">true,</samp><br>
       <samp style="margin-left:40px;color:green">"code":</samp><samp style="color: blue">0,</samp><br>
       <samp style="margin-left:40px;color:green">"locale": "en"</samp><br>
       <samp style="margin-left:40px;color:green">"message": "OK"</samp><br>
       <samp style="margin-left:40px;color:green">"data": [</samp><br>
       <samp style="margin-left: 80px">{</samp><br>
       <samp style="margin-left: 120px;color:black">"cumulative":</samp><samp style="color: blue">4,</samp><br>
       <samp style="margin-left: 120px;color:black">"date": {</samp><br>
       <samp style="margin-left: 160px">"timezone_type": </samp><samp style="color: blue">3</samp><br>
       <samp style="margin-left: 160px">"timezone": "UTC"</samp><br>
       <samp style="margin-left: 120px;color:black">}</samp><br>
       <samp style="margin-left: 80px">}</samp><br>
       <samp style="margin-left:40px;color:green">]</samp><br>
   }<br>
</code>

</div>

@endsection