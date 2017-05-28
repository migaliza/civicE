@extends('API.civic')

@section('title', 'API')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Available Projects</h1>
    </div>
</div>
<div>
    <p>Displays all the project at Ashesi University College. Funded by Ford Foundation and any other foundation</p>

    <h4>Method:  <b>Get</b></h4>
    <div></div>
    <h6>Url: <a href="http://ashesicivicengagement-dev.herokuapp.com/civicdoc/projects" target="_blank">http://ashesicivicengagement-dev.herokuapp.com/civicdoc/projects </a> </h6>

    <div></div>
    <h6><b>Returns: </b> </h6>
    <code>
    {<br> 
    <samp style="color:#ff0000">Projects: </samp>[ <br>
<p style="margin-left: 30px">{</p>
<p style="margin-left: 40px"><samp style="color:black">"_id":</samp> "590ccb97b4d8d200713be843",</p>
<p style="margin-left: 40px"><samp style="color:black">"project_namee":</samp> "Future of Africa - Midunu",</p>
<p style="margin-left: 40px"><samp style="color:black">"town":</samp> "Accra",</p>
<p style="margin-left: 40px"><samp style="color:black">"region": </samp> "Greater Accra",</p>
<p style="margin-left: 40px"><samp style="color:black">"country": </samp>"Ghana",</p>
<p style="margin-left: 40px"><samp style="color:black">"longitude":</samp><i style="color:blue"> "0.0747",</i></p>
<p style="margin-left: 40px"><samp style="color:black">"latitude":</samp> <i style="color:blue">"5.8143",</i></p>
<p style="margin-left: 40px"><samp  style="color:black">"brief_description":</samp> "Mi Dunu is a feeding program for street kids under Future of Africa initiative. It aims at creating a friendly environment where street children feel comfortable to share their experiences with trained volunteers.",</p>
<p style="margin-left: 40px"><samp style="color:black">"commencement_date":</samp> "2016-05-01",</p>
<p style="margin-left: 40px"><samp style="color:black">"completion_date":</samp> "2017-09-30",</p>
<p style="margin-left: 40px"><samp  style="color:black">"primary_activity":</samp> "Weekly nourishment and game time where volunteers attempt to build relatioship with street children which they intend to harness to provide the children with skills, opportunity and resources",</p>
<p style="margin-left: 40px"><samp  style="color:black">"partnerships":</samp> "Helen O'Grady Drama Academy",</p>
<p style="margin-left: 40px"><samp  style="color:black">"updated_at":</samp> "2017-05-05 18:59:35",</p>
<p style="margin-left: 40px"><samp  style="color:black">"created_at":</samp> "2017-05-05 18:59:35",</p>
<p style="margin-left: 40px"><samp cstyle="color:black"><b>"Impact_sectors":</b></samp> [</p>
<p style="margin-left: 40px">{<br></p>
<p style="margin-left: 80px"><samp style="color:black">"sector_name":</samp> "Welfare"</p>
<p style="margin-left: 40px">},<br></p>
<p style="margin-left: 40px">{<br></p>
<p style="margin-left: 80px"><samp style="color:black">"sector_name":</samp> "Mentorship"</p>
<p style="margin-left: 40px">}<br></p>
],<br>
<p style="margin-left: 40px"><samp  style="color:black"><b>"Grand_info":</b></samp> [<br></p>
<p style="margin-left: 40px">{<br></p>
<p style="margin-left: 80px"><samp  style="color:black">"grant_name":</samp> "Ford Foundation",<br></p>
<p style="margin-left: 80px"><samp style="color:black">"grant_amount":</samp> <i style="color:blue">"4800"</i>,<br></p>
<p style="margin-left: 80px"><samp  style="color:black">"funding_cycle":</samp> "Window 2"<br></p>
<p style="margin-left: 40px">}<br></p>
],<br>
<p style="margin-left: 40px"><samp  style="color:black"><b>"Population_Track":</b></samp> [<br></p>
<p style="margin-left: 40px">{<br></p>
<p style="margin-left: 80px"><samp  style="color:black">"target_baseline": </samp> <i style="color:blue">"1"</i>,<br></p>
<p style="margin-left: 80px"><samp  style="color:black">"recent":</samp> <i style="color:blue"> "51"</i><br></p>
<p style="margin-left: 40px">}<br></p>
],<br>
<p style="margin-left: 40px"><samp  style="color:black"><b>"Volunteer_Track":</b></samp> [<br></p>
<p style="margin-left: 40px">{<br></p>
<p style="margin-left: 80px"><samp  style="color:black">"target_baseline":</samp> <i style="color:blue"> "45"</i>,<br></p>
<p style="margin-left: 80px"><samp style="color:black">"recent":</samp> <i style="color:blue">"52"</i><br></p>
<p style="margin-left: 40px">}<br></p>
],<br>
<p style="margin-left: 40px"><samp  style="color:black"><b>"milestones":</b></samp> [<br></p>
<p style="margin-left: 40px">{<br></p>
<p style="margin-left: 80px"><samp style="color:black">"milestone_description":</samp> "Midunu has succesfully launched the Relationship building phase of its 4-step approach to allievating the conditions of street children"<br></p>
<p style="margin-left: 40px">},<br></p>
<p style="margin-left: 40px">{<br></p>
<p style="margin-left: 80px"><samp  style="color:black">"milestone_description":</samp> "Midunu has established a partnership with Helen O'Grady Drama Academy in a bid to kick-off the skills building and opportunity creation phase of its 4-step approach. This will culminate in a drama production that will cast children under the Initiative."<br></p>
<p style="margin-left: 40px">}<br></p>
],<br>
<p style="margin-left: 40px"><samp  style="color:black"><b>"Upcoming":</b></samp> [<br></p>
{<br>
<p style="margin-left: 80px"><samp style="color:black">"upcoming":</samp> "Drama Production in partnership with Helen O'Grady Drama Academy"<br></p>
<p style="margin-left: 40px">},<br></p>
{<br>
<p style="margin-left: 40px"><samp style="color:black">"upcoming":</samp> "Explore options for eanrollment or re-enrollment of street children"<br></p>
<p style="margin-left: 40px">},<br></p>
<p style="margin-left: 40px">{<br></p>
<p style="margin-left: 80px"><samp style="color:black">"upcoming":</samp> "Resolve issues relating to biographical data of street children"<br></p>
<p style="margin-left: 40px">}<br></p>
]<br>
},<br>
</code>


</div>

@endsection