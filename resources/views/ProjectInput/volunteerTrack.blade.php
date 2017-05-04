@extends('master')
@section('content')
@section('title','New Project')

<form method="POST"  action="/civicdoc/project/volunteer/track/add" class="form-horizontal">

<fieldset>
{{ csrf_field() }}

<!-- Form Name -->
<legend>POPULATION track</legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="project_name"></label>  
  <div class="col-md-4">
  <input id="project_name" name="project_name" type="hidden" value={{ $projectNamee }} class="form-control input-md">
    
  </div>
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="volunteer_baseline"></label>  
  <div class="col-md-4">
  <input id="volunteer_baseline" name="volunteer_baseline" type="number" placeholder="Volunteer Baseline" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="volunteer_recent"></label>  
  <div class="col-md-4">
  <input id="volunteer_recent" name="volunteer_recent" type="number" placeholder="Volunteer Recent" class="form-control input-md">
    
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