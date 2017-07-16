@extends('Application.application')
@section('title','Fund Application')
@section('content');
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><b>Timeline And Budget</b></h1>
	</div>
</div>
<div>
	<div class ="row">
		
		<p>Download the <a href="{{ route('download') }}"><i class="fa fa-download fa-fw"></i> <b>Budget and poject Timeline</b></a></p>
		<ul>
			<p>When completed, please be sure to do the following before uploading the budget and project timeline:</p>
			<li>Do a print preview and be sure that your template can be printed without information being cut off on the right hand margin. This makes it easier for your selection committee to understand your submission.</li>
			<li>Save the template as a PDF.</li>
			<li>Name the file in the following format: "Full Name Timeline and Budget." ex. Bela Shah Timeline and Budget *</li>

		</ul> 

		<form method="POST" class="form-horizontal" action="/civicdoc/poject/grand/application/timelinebudget/upload" enctype="multipart/form-data">
			<fieldset>

				<!-- Form Name -->
				<legend>Upload Timeline and Budget</legend>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="grandId"></label>  
					<div class="col-md-4">
						<input id="grantId" name="grantId" type="text" value="595e81609a8920067d1f3a00" placeholder="" class="form-control input-md">

					</div>
				</div>

				<!-- File Button --> 
				<div class="form-group">
					<label class="col-md-4 control-label" for="timelineBudget">Budget and project timeline</label>
					<div class="col-md-4">
						<input id="timelineBudget" name="timelineBudget" class="input-file" type="file">
					</div>
				</div>

				<div class="form-group text-center " id="btnGroup" >
					<div role="group" class="col-md-4  " >
						<a href="#" id="previous" class="btn btn-primary btn-primary"><i class="fa fa-step-backward"></i> Previous</a>

						<a href="#" id="save" class="btn btn-primary btn-primary"><i class="fa fa-floppy-o fa-fw"></i> Save</a>

						<a href="#" id="next" class="btn btn-primary btn-primary"><i class="fa fa-step-forward"></i> Next</a>
					</div>		
				</div>


			</fieldset>
		</form>


	</div>

	@endsection