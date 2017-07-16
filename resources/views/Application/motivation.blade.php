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
				<span class="help-block">
					<ul>
						<li>Save it as a PDF</li>
						<li>Name the file in the following format: "Full Name CV." ex. Bela Shah CV *</li>
					</ul>
				</span>

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


@endsection