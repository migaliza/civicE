@extends('Phase2.ProjectLeaders.project_dashboard')

@section('title', 'Project Leader')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Project Lead Dashboard</h1>
			</div>
		</div>

		<div style="margin-top: 100px" >@yield('child-content')</div>

		<!-- Your content goes here ...-->

	</div>
</div>

@endsection