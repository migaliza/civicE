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
    <h6>Url: <a href="http://ashesicivicengagement-dev.herokuapp.com/civicdoc/projects" >http://ashesicivicengagement-dev.herokuapp.com/civicdoc/projects </a> </h6>

    <div></div>
    <h6><b>Returns: </b> </h6>
    <code>[<br> 
    <samp style="color:#ff0000">projects: </samp><br>[
{
"_id": "590ccb97b4d8d200713be843",
"project_namee": "Future of Africa - Midunu",
"tier": "1",
"location_name": "0.0747",
"location_latitude": "5.8143",
"brief_description": "Mi Dunu is a feeding program for street kids under Future of Africa initiative. It aims at creating a friendly environment where street children feel comfortable to share their experiences with trained volunteers.",
"commencement_date": "2016-05-01",
"completion_date": "2017-09-30",
"primary_activity": "Weekly nourishment and game time where volunteers attempt to build relatioship with street children which they intend to harness to provide the children with skills, opportunity and resources",
"partnerships": "Helen O'Grady Drama Academy",
"updated_at": "2017-05-05 18:59:35",
"created_at": "2017-05-05 18:59:35",
"Impact_sectors": [
{
"sector_name": "Welfare"
},
{
"sector_name": "Mentorship"
}
],
"Grand_info": [
{
"grant_name": "Ford Foundation",
"grant_amount": "4800",
"funding_cycle": "Window 2"
}
],
"Population_Track": [
{
"target_baseline": "1",
"recent": "51"
}
],
"Volunteer_Track": [
{
"target_baseline": "45",
"recent": "52"
}
],
"milestones": [
{
"milestone_description": "Midunu has succesfully launched the Relationship building phase of its 4-step approach to allievating the conditions of street children"
},
{
"milestone_description": "Midunu has established a partnership with Helen O'Grady Drama Academy in a bid to kick-off the skills building and opportunity creation phase of its 4-step approach. This will culminate in a drama production that will cast children under the Initiative."
}
],
"Upcoming": [
{
"upcoming": "Drama Production in partnership with Helen O'Grady Drama Academy"
},
{
"upcoming": "Explore options for eanrollment or re-enrollment of street children"
},
{
"upcoming": "Resolve issues relating to biographical data of street children"
}
]
},
</code></p>


</div>




@endsection