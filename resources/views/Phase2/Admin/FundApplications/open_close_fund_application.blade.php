@extends('Phase2.api_layout')

@section('title', 'View Fund application')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">

		<div class="table-responsive" style="margin-top: 100px; margin-right: 200px">      
			<form class="form-horizontal">
				<fieldset>

					<!-- Form Name -->
					<legend>Open fund application</legend>

					<!-- Multiple Radios (inline) -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="open">Action on Application Window</label>
						<div class="col-md-4"> 
							<label class="radio-inline" for="open-0">
								<input type="radio" name="open" id="open-0" value="open" checked="checked">
								Open
							</label> 
							<label class="radio-inline" for="open-1">
								<input type="radio" name="open" id="open-1" value="close">
								Close
							</label>
						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="window">Specify Window</label>  
						<div class="col-md-4">
							<input id="window" name="window" type="text" placeholder="" class="form-control input-md">
							<span class="help-block">specify fund application window i.e window 1 </span>  
						</div>
					</div>

				</fieldset>
			</form>    
			
		</div>
	</div>



</div>
</div>

@endsection