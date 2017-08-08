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
		@if (session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
		@endif

		<div >@yield('child-content')</div>

		

	</div>
</div>

@endsection