@extends('API.civic')

@section('title', 'API')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">View Project By Tier</h1>
    </div>
</div>
<div>
    <p>Displays all the project by tier at Ashesi University College.</p>
   

    <div></div>

    <h4>Method:  <b>Get</b></h4>
    <div></div>
    <h5>Url: <a href="http://ashesicivicengagement-dev.herokuapp.com/civicdoc/projects" >http://ashesicivicengagement-dev.herokuapp.com/civicdoc/projects/ </a> </h5>

    <div></div>
    <h5>Parameters</h5>
    <ul>
        <li>Tier number: enter <b><i> 1 </i></b> for tier 1 and <b><i>2 </i></b> for tier 2</li>
    </ul>

    <div></div>
    <h6><b>Returns: </b> </h6>
<code>
   {<br>
    <samp style="margin-left:40px;color:#ff0000">"Tier2":[</samp><br>
        <samp style="margin-left: 80px">{</samp><br>
            <samp style="margin-left: 120px;color:black">"projectName": </samp>"Berekuso Math Project",<br>
            <samp style="margin-left: 120px;color:black">"location": "0.2167",</samp></p>
            <samp style="margin-left: 120px;color:black">"briefDescription": </samp>"The Berekuso Math Project is one that sends Ashesi students to the Bereksuo Basic School to teach Mathematics and indirectly teach English. It supports the children in Berekuso by exposing them to new methods of teaching which enhances their learning and understanding of Mathematics.",</br>
            <samp style="margin-left: 120px;color:black">"GrandInfo": [</samp>
                <samp style="margin-left: 130px">{</samp><br>
                    <samp style="margin-left: 160px;color:black">"grant_name":</samp> "Ford Foundation",<br>
                    <samp style="margin-left: 160px;color:black">"grant_amount":</samp> "500",<br>
                    <samp style="margin-left: 160px;color:black">"funding_cycle":</samp> "Window 1"<br>
                <samp style="margin-left: 130px">}</samp><br>
            <samp style="margin-left: 120px">],</samp><br>
            <samp style="margin-left: 120px;color:black">"GrandRational":</samp> [<br>
                <samp style="margin-left: 130px">{</samp><br>
                    <samp style="margin-left: 160px;color:black">"funding_rational":</samp> "We want to be able to ensure continuity of this project and also provide a more motivating and efficient structure for volunteers and students who are involved in this program. This will help us make a more substantial impact on the students we teach and interact with." <br>
                <samp style="margin-left: 130px">}</samp><br>
            <samp style="margin-left: 120px">]</samp><br>
        <samp style="margin-left: 80px">}</samp><br>

    <samp style="margin-left: 40px">]</samp><br
<samp style="margin-left:30px">}</samp>
</code>

</div>

@endsection