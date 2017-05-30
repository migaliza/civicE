@extends('API.civic')

@section('title', 'API')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Tracking Target Population</h1>
    </div>
</div>
<div>
    <p>Displays the number of impacted by the project over time.</p>
   

    <div></div>

    <h4>Method:  <b>Get</b></h4>
    <div></div>
    <h5>Url: <a href="https://ashesicivicengagement-dev.herokuapp.com/civicdoc/projects/funding/" target="_blank"> https://ashesicivicengagement-dev.herokuapp.com/civicdoc/projects/funding/{projectId} </a> </h5>

    <div></div>
    <h5>Parameters: </h5>
    <ul>
        <li>project id i.e <i>79827kjdhj</i></li>
    </ul>
  
   
    <div></div>
    <h6><b>Returns: </b> </h6>
<code>
   {<br>
    {<br>
    <samp style="margin-left:40px;color:#ff0000">"Funding": [</samp><br>
        <samp style="margin-left: 80px">{</samp><br>
            <samp style="margin-left: 120px;color:black">"FundingInfo": [</samp><br>
                <samp style="margin-left: 160px">{</samp><br>
                    <samp style="margin-left: 200px;color:black">"grant_name":</samp> "Ford Foundation",<br>
                    <samp style="margin-left: 200px;color:black">"grant_amount":</samp> "3800",<br>
                    <samp style="margin-left: 200px;color:black">"funding_cycle":</samp> "Window 1"<br>
                <samp style="margin-left: 160px">}</samp><br>
            <samp style="margin-left: 120px;color:black">]</samp><br>
        <samp style="margin-left: 80px">}</samp><br>
    <samp style="margin-left:40px;color:#ff0000">]</samp><br>
}<br>
</code>

</div>

@endsection