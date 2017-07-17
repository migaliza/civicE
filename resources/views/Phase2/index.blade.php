@extends('Phase2.api_layout')

@section('title', 'ADMINISTRATOR')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Available Projects</h1>
			</div>
		</div>

		<div >@yield('child-content')</div>

		<!-- Your content goes here ...-->

	</div>
</div>

@endsection