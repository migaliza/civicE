@extends('Application.application')
@section('title','Project Lead Motivation')
@section('content');
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><b>Project Lead's Motivation</b></h1>
	</div>
</div>

<form class="form-horizontal">
	<fieldset>



		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="name">Project lead Full Name</label>  
			<div class="col-md-4">
				<input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">

			</div>
		</div>

		<!-- Textarea -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="motivation">Motivation</label>
			<div class="col-md-4">                     
				<textarea class="form-control" id="motivation" name="motivation"></textarea>
			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="cv">Upload CV</label>  
			<div class="col-md-4">
				<input id="cv" name="cv" type="file" placeholder="" class="form-control input-md" required="">

			</div>
		</div>

	</fieldset>
</form>


@endsection