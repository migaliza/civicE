@extends('Application.application')
@section('title','Fund Application')
@section('content');
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><b>Part Seven – Project Mentor/Recommendation (Students Only)</b></h1>
	</div>
</div>
<div>
	<div class ="row">

		<p>We require one letter of recommendation from someone who can attest to your capacity to carry out your proposed project. Please fill out the information for your recommender. Then, send your recommender the link below, which takes him/her to the online reference form. The form must be completed and submitted online.</p> 
		<p><b>IMPORTANT: Your application will not be considered complete until the recommender form is received.</b></p>


		<form class="form-horizontal">
			<fieldset>

				<!-- Form Name -->
				<legend>Recommendation</legend>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="fullName">Full Name</label>  
					<div class="col-md-4">
						<input id="fullName" name="fullName" type="text" placeholder="" class="form-control input-md" required="">

					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="title">Title</label>  
					<div class="col-md-4">
						<input id="title" name="title" type="text" placeholder="" class="form-control input-md" required="">

					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="organization">Organization</label>  
					<div class="col-md-4">
						<input id="organization" name="organization" type="text" placeholder="" class="form-control input-md" required="">

					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="email">Email Address</label>  
					<div class="col-md-4">
						<input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">

					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="relationship">Length of relationship</label>  
					<div class="col-md-4">
						<input id="relationship" name="relationship" type="text" placeholder="" class="form-control input-md" required="">

					</div>
				</div>

				<!-- Button -->
				

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