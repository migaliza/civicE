@extends('Application.application')
@section('title','Fund Application')
@section('content');
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><b>Ford Children and Youth Fund – Tier 1 Application</b></h1>
	</div>
</div>
<div>
	<div class ="row">
		<h3>Background information:</h3>
		<h4>About the Ford Children and Youth Fund – Tier 1</h4>
		<p><b><i>Tier 1 application is for projects requesting more than $500 annually. Applications will have two windows for submitting applications for funding, one in the fall and one in the spring.</i></b></p>
		<p>The Fund for Service to Children and Youth is a 2‐year collaboration between The Ford Foundation and Ashesi University College to support student‐centered service projects aimed at making a significant difference in the lives of disadvantaged children and youth in Ghana. The program seeks to increase the impact of community service through moderate funding from the Ford Foundation for high quality projects and through careful monitoring and evaluation of projects by Ashesi University’s Office of Student and Community Affairs.</p>

		<h4>Eligibility</h4>
		<ul>
			<li>Applicant must be an Ashesi student, faculty or staff.</li>
			<li>Project teams must include Ashesi students.</li>
		</ul>

		<h4>Notes</h4>
		<p><b>It is assumed that the person filling this application is the primary project leader and thus will be the contact person.</b></p>
		<div>
			<a href="#"><i class="fa fa-download fa-fw"></i> <b>Budget</b></a>
			<p>You will have to fill the budget and upload it at the end of the application </p>
		</div>

		<div class="row">
			<p>To make an application click <a href="{{ route('startApplying') }}">continue</a> to proceed</p>
		</div>


	</div>

	@endsection