@extends('master')
@section('content')
@section('title','Milestone')
<!--{{ phpinfo() }}-->
<!--<form method="POST" action="{{ url('createProject') }}"  class="form-horizontal">-->
<form method="POST"  action="/civicdoc/projects/milestone/addMilestone" class="form-horizontal">

<fieldset>
{{ csrf_field() }}

<!-- Form Name -->
<legend>MILESTONE</legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="project_name"></label>  
  <div class="col-md-4">
  <input id="project_name" name="project_name" type="hidden" value={{ $projectNamee }} class="form-control input-md">
    
  </div>
</div>

<!-- Textarea milestone -->
<div class="form-group">
  <label class="col-md-4 control-label" for="milestone"></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="milestone" placeholder="Milestone" name="milestone"></textarea>
  </div>
</div>




<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" type="submit" class="btn btn-primary">ADD</button>
  </div>
</div>


</fieldset>
</form>
@endsection