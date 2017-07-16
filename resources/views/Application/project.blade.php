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

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="pick">Why should we pick you over the others?</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="pick" name="pick"></textarea>
        <span class="help-block">maximum 1000 words</span>
      </div>
    </div>

    <!-- Button -->
    <div class="form-group text-center " id="btnGroup" >
      <div role="group" class="col-md-4  " >

        <a href="#" id="save" class="btn btn-primary btn-primary"><i class="fa fa-floppy-o fa-fw"></i> Save</a>

        <a href="#" id="next" class="btn btn-primary btn-primary"><i class="fa fa-step-forward"></i> Save and Continue</a>
      </div>    
    </div>

  </fieldset>
</form>


@endsection