@extends('API.civic')

@section('title', 'API')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Milestone per project</h1>
    </div>
</div>
<div>
    <p>Displays milestones as per the project requested</p>
    

    <div></div>

    <h4>Method:  <b>Get</b></h4>
    <div></div>

    <h5>Url: <a href="https://ashesicivicengagement-dev.herokuapp.com/civicdoc/project/milestone/retrieve?" target="_blank">http://ashesicivicengagement-dev.herokuapp.com/civicdoc/project/milestone/retrieve?pId=projectId</a> </h5>

    <div></div>
    <h5>Parameters</h5>
    <ul>
        <li> <b><i>pId (projectId) i.e pId=598cc226aadc6b00712ce902 </i></b>  </li>
        
    </ul>

    <div></div>
    <h6><b>Returns: </b> </h6>
    <code>
        {<br>
        <samp style="margin-left:40px;color:#ff0000">"Tontro":</samp> [<br>
        <samp style="margin-left: 80px">{</samp><br>
        <samp style="margin-left: 120px;color:black">"projectName":</samp> "Tontro",<br>
        <samp style="margin-left: 120px;color:black">"location":</samp> "0.2503",<br>
        <samp style="margin-left: 120px;color:black">"briefDescription": </samp>"The name Project Tontro is inspired by a maker subculture that already exists in Ghana. Ghanaian kids have had a long tradition of building cars out of tin and flip-flops locally referred to as Tontro cars. Project Tontro aims at building on top of this already existing maker ecosystem, a layer of innovation that takes full advantages of the steady drop in the price-performance of computer hardware. Leveraging on the proliferation of sensor, motors and microcontrollers such as the Arduino, this initiative has started high school kids off on robotics, by having them programme autonomous Tontro cars.",<br>
        <samp style="margin-left: 120px;color:black">"commencementDate":</samp> "2016-08-01",<br>
        <samp style="margin-left: 120px;color:black">"completionDate": </samp>"2017-08-31",<br>
        <samp style="margin-left: 120px;color:black">"primaryActivity":</samp> "Weekly sessions where student get to learn, thinker and develop projects with microcontrollers",<br>
        <samp style="margin-left: 120px;color:black">"partnerships":</samp> "Cosmos Basic School",<br>
        <samp style="margin-left: 120px;color:black">"milestones":</samp> [<br>
        <samp style="margin-left: 130px">{</samp><br>
        <samp style="margin-left: 160px;color:black">"milestone_description": </samp>"Project Tontro has successfully developed a structure around its previously informal activities at the Cosmos Basic School"<br>
        <samp style="margin-left: 130px">},</samp><br>
        <samp style="margin-left: 130px">{</samp><br>
        <samp style="margin-left: 160px;color:black">"milestone_description":</samp> "Students have developed sufficient competence in electronics and product development to embark on thier personal micro-controller projects. Examples include electric dustbin, RFID controlled lock, autonomous lamp etc"<br>
        <samp style="margin-left: 130px">}</samp><br>
        <samp style="margin-left: 120px;color:black">],</samp><br>
        <samp style="margin-left: 120px;color:black">"Upcoming":</samp> [<br
        <samp style="margin-left: 130px">{</samp><br>
        <samp style="margin-left: 160px;color:black">"upcoming": </samp>"Maker-Faire exhibiting inventions of Student's from Project Tontro. Student will get the opportunity to possibly sell thier inventions."<br>
        <samp style="margin-left: 130px">}</samp><br>
        <samp style="margin-left: 120px;color:black">],</samp><br>
        <samp style="margin-left: 120px;color:black">"ImpactSectors":</samp> [<br>
        <samp style="margin-left: 130px">{</samp><br>
        <samp style="margin-left: 160px;color:black">"sector_name":</samp> "Design"<br>
        <samp style="margin-left: 130px">},</samp><br>
        <samp style="margin-left: 130px">{</samp><br>
        <samp style="margin-left: 160px;color:black">"sector_name":</samp> "Technology"<br>
        <samp style="margin-left: 130px">},</samp><br>
        <samp style="margin-left: 130px">{</samp><br>
        <samp style="margin-left: 160px;color:black">"sector_name": </samp>"Education"<br>
        <samp style="margin-left: 130px">},</samp><br>
        <samp style="margin-left: 130px">{  </samp><br>
        <samp style="margin-left: 160px;color:black">"sector_name": </samp>"Education"<br>
        <samp style="margin-left: 130px">}</samp><br>
        <samp style="margin-left: 120px;color:black">],</samp><br>
        <samp style="margin-left: 120px;color:black">"GrandInfo": </samp>[<br>
        <samp style="margin-left: 130px">{</samp>
        <samp style="margin-left: 160px;color:black">"grant_name":</samp> "Ford Foundation",<br>
        <samp style="margin-left: 160px;color:black">"grant_amount": </samp>"3800",<br>
        <samp style="margin-left: 160px;color:black">"funding_cycle": </samp>"Window 1"<br>
        <samp style="margin-left: 130px">}</samp><br>
        <samp style="margin-left: 120px;color:black">],</samp><br>
        <samp style="margin-left: 120px;color:black">"TargetPopulation":</samp> null,<br>
        <samp style="margin-left: 120px;color:black">"LessonsLearnt":</samp> null,<br>
        <samp style="margin-left: 120px;color:black">"TargetPopulationTrack":</samp> [<br>
        <samp style="margin-left: 130px">{</samp><br>
        <samp style="margin-left: 160px;color:black">"target_baseline": </samp>"1",<br>
        <samp style="margin-left: 160px;color:black">"recent": </samp>"4"<br>
        <samp style="margin-left: 130px">}</samp><br>
        <samp style="margin-left: 120px;color:black">],</samp><br>
        <samp style="margin-left: 120px;color:black">"volunteerTrack":</samp> null<br>
        <samp style="margin-left: 80px">}</samp><br
        <samp style="margin-left:40px;color:#ff0000">]</samp><br>
    }<br>
</code>

</div>

@endsection