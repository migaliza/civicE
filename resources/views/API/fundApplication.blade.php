@extends('API.civic')
@section('title','API')
@section('content');
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Fund Application</h1>
	</div>
</div>
<div>
	<div class ="row">
		<h2>Fund application components</h2>
		<ul>
			<li>Project Leaders </li>
			<li>Project Proposal</li>
			<li>project Lead motivations</li>
		</ul>
		<div class="row">
			<h3>Create a new Fund</h3>
			<p>Allows you to create a funding application which you can add the other components of the application</p>
			<h6>Method:<b>Get</b></h6>
			<h6> Url: <a href="https://ashesicivicengagement-dev.herokuapp.com/civicdoc/project/grand/application/new" target='_blank'>https://ashesicivicengagement-dev.herokuapp.com/civicdoc/project/grand/application/new</a></h6>
			<h6>Parameters: </h6>
			<ul>
				<li>pTitle <b>project title</b></li>
				<li>synopsis <b>project synopsis</b></li>
			</ul>
		</div>
		<div class="row">
			<h3>Project Leads</h3>
			<p>Allows you to add project leads to the fund application</p>
			<h6>Method:<b>Get</b></h6>
			<h6> Url: <a href="#" target='_blank'></a></h6>
			<h6>Parameters: </h6>
			<ul>
				<li>grantId <b><i>very important as it identifies an application uniquely</i></b></li>
				<li>role <b>should a select categories are <i>primary lead, project lead</i></b></li>
				<li>status is <b><i>student</i></b> or <b><i>faculty</i></b> it should be a select to restrict the input</li>
				<li>fName </li>
				<li>lName</li>
				<li>gender <b><i>select male or female or choose not to disclose</i></b></li>
				<li>citizenship</li>
				<li>region <b><i>if one entered Ghana</i></b></li>
				<p><i>If one selected student as their status, they <b>MUST</b> enter the following</i></p>
				<li>graduation</li>
				<li>major</li>
				<li>phoneNumber</li>
				<li>residentAddress</li>
				<li>ashesiEmail</li>
				<li>GPA</li>
				<li>housing <b>select <i>on campus</i>or <i>off campus</i></b></li>
				<p><i>If one selected faculty as status they <b>MUST</b> to enter the following</i></p>
				<li>department</li>
				<li>jobTitle</li>
			</ul>
		</ul>
	</div>

	<div class="row">
		<h3>Add Project Proposal</h3>
		<p>Allows you to add project proposal to a funding application</p>
		<h6>Method:<b>Get</b></h6>
		<h6> Url: <a href="#" target='_blank'></a></h6>
		<h6>Parameters: </h6>
		<ul>
			<li>grantId </li>
			<li>population <b>the target population</b></li>
			<li>communityNeed</li>
			<li>YC <b>does it influence Youth and Children Select yes or No</b></li>
			<li>assets</li>
			<li>approach</li>
			<li>successMeasure</li>
			<li>impediments</li>
			<li>continue</li>
			<li>volunteerRoles</li>
			<li>shareSuccess</li>
		</ul>
	</div>

	<div class="row">
		<h3>Enter project lead motivation</h3>
		<p>Allows you to enter project lead motivation to a funding application</p>
		<h6>Method:<b>Get</b></h6>
		<h6> Url: <a href="#" target='_blank'></a></h6>
		<h6>Parameters: </h6>
		<ul>
			<li>name</li>
			<li>motivation</li>
			<li>cv <b>upload a file preferably pdf</b></li>
		</ul>
	</div>









</div>

@endsection