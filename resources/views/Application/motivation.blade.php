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
		<div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="name1">Project lead Full Name</label>  
				<div class="col-md-4">
					<input id="name1" name="name1" type="text" placeholder="" class="form-control input-md" required="">

				</div>
			</div>

			<!-- Textarea -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="motivation1">Motivation</label>
				<div class="col-md-4">                     
					<textarea class="form-control" id="motivation1" name="motivation1"></textarea>
				</div>
			</div>

			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="cv1">Upload CV</label>  
				<div class="col-md-4">
					<input id="cv1" name="cv1" type="file" placeholder="" class="form-control input-md" required="">
					<span class="help-block">
						<ul>
							<li>Save it as a PDF</li>
							<li>Name the file in the following format: "Full Name CV." ex. Bela Shah CV *</li>
						</ul>
					</span>

				</div>
			</div>
		</div>

		<div class="h-divider"></div>
		
		<div>	
			<div class="form-group">
				<label class="col-md-4 control-label" for="name2">Project lead Full Name</label>  
				<div class="col-md-4">
					<input id="name2" name="name2" type="text" placeholder="" class="form-control input-md" >

				</div>
			</div>

			<!-- Textarea -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="motivation2">Motivation</label>
				<div class="col-md-4">                     
					<textarea class="form-control" id="motivation2" name="motivation2"></textarea>
				</div>
			</div>

			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="cv2">Upload CV</label>  
				<div class="col-md-4">
					<input id="cv2" name="cv2" type="file" placeholder="" class="form-control input-md" >
					<span class="help-block">
						<ul>
							<li>Save it as a PDF</li>
							<li>Name the file in the following format: "Full Name CV." ex. Bela Shah CV *</li>
						</ul>
					</span>

				</div>
			</div>
		</div>

		<div class="h-divider"></div>

		<div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="name3">Project lead Full Name</label>  
				<div class="col-md-4">
					<input id="name3" name="name3" type="text" placeholder="" class="form-control input-md">

				</div>
			</div>

			<!-- Textarea -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="motivation3">Motivation</label>
				<div class="col-md-4">                     
					<textarea class="form-control" id="motivation3" name="motivation3"></textarea>
				</div>
			</div>

			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="cv3">Upload CV</label>  
				<div class="col-md-4">
					<input id="cv3" name="cv3" type="file" placeholder="" class="form-control input-md" >
					<span class="help-block">
						<ul>
							<li>Save it as a PDF</li>
							<li>Name the file in the following format: "Full Name CV." ex. Bela Shah CV *</li>
						</ul>
					</span>

				</div>
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