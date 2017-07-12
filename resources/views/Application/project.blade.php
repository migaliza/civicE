@extends('Application.application')
@section('content')
@section('title','New Fund Application')

<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Project Brief</h3>
  </div>
</div>

<form method="GET" class="form-horizontal" action="/civicdoc/project/grand/application/new">
  <fieldset>

    <!-- Form Name -->


    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="pTitle">Project Title</label>  
      <div class="col-md-4">
        <input id="pTitle" name="pTitle" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="synopsis">Text Area</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="synopsis" name="synopsis"></textarea>
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="continue"></label>
      <div class="col-md-4">
        <button id="continue" name="continue" type="submit" class="btn btn-success">Continue</button>
      </div>
    </div>

  </fieldset>
</form>


@endsection