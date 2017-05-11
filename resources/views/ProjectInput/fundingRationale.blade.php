@extends('master')
@section('content')
@section('title','New Project')

<form method="POST"  action="/civicdoc/project/funding/rational/new" class="form-horizontal">

<fieldset>
{{ csrf_field() }}

<!-- Form Name -->
<legend>Add Event </legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="project_name"></label>  
  <div class="col-md-4">
  <input id="project_name" name="project_name" type="hidden" value={{ $projectNamee }} class="form-control input-md">
    
  </div>
</div>




<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="funding_rational"></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="funding_rational" placeholder="Funding Rational" name="funding_rational"></textarea>
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