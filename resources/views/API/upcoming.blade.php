@extends('API.civic')

@section('title', 'API')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Upcoming per project</h1>
    </div>
</div>
<div>
    <p>Displays milestones as per the project requested</p>
    

    <div></div>

    <h4>Method:  <b>Get</b></h4>
    <div></div>

    <h5>Url: <a href="https://ashesicivicengagement-dev.herokuapp.com/civicdoc/project/upcoming/retrieve?pId=" target="_blank">https://ashesicivicengagement-dev.herokuapp.com/civicdoc/project/upcoming/retrieve?pId=projectId</a> </h5>

    <div></div>
    <h5>Parameters</h5>
    <ul>
        <li> <b><i>pId (projectId) i.e pId=598cc226aadc6b00712ce902 </i></b>  </li>
    </ul>
    <div></div>
    <h6><b>Returns: </b> </h6>
    <code>
        {<br>
        <samp style="margin-left:40px;color:green">"success":</samp><samp style="color: blue">true</samp>, <br>
        <samp style="margin-left:40px;color:green">"code":</samp><samp style="color: blue">0,</samp><br>
        <samp style="margin-left:40px;color:green">"locale":</samp>"en", <br>
        <samp style="margin-left:40px;color:green">"message":</samp> "OK",<br>
        <samp style="margin-left:40px;color:green">"data":</samp> [<br>
        <samp style="margin-left: 80px">{</samp><br>
        <samp style="margin-left: 120px;color:black">"upcoming":</samp> "Drama Production in partnership with Helen O'Grady Drama Academy",<br>
        <samp style="margin-left: 80px">}</samp><br>
        <samp style="margin-left: 40px">]</samp><br>
    }<br>
</code>

</div>

@endsection