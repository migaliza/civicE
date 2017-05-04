@extends('master')
@section('content')
@section('title','New Project')

<form method="POST"  action="/civicdoc/project/lesson/new" class="form-horizontal">

<fieldset>
{{ csrf_field() }}

<!-- Form Name -->
<legend>LESSON</legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="project_name"></label>  
  <div class="col-md-4">
  <input id="project_name" name="project_name" type="hidden" value={{ $projectNamee }} class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="lesson"></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="lesson" placeholder="Lesson Learn" name="lesson"></textarea>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="position"></label>  
  <div class="col-md-4">
  <input id="position" name="position" type="text" placeholder="Position i.e volunteer" class="form-control input-md">
    
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