@extends('master')
@section('content')
@section('title','New Project')

<form method="POST"  action="/civicdoc/projects/create/project" class="form-horizontal">

<fieldset>
{{ csrf_field() }}

<!-- Form Name -->
<legend>NEW PROJECT</legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="projectName"></label>  
  <div class="col-md-4">
  <input id="projectName" name="projectName" type="text" placeholder="Project Name" class="form-control input-md">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tier"></label>  
  <div class="col-md-4">
  <input id="tier" name="tier" type="text" placeholder="Tier" class="form-control input-md">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="town"></label>  
  <div class="col-md-4">
  <input id="town" name="town" type="text" placeholder="Town" class="form-control input-md">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="latitude"></label>  
  <div class="col-md-4">
  <input id="latitude" name="latitude" type="text" placeholder="Latitude" class="form-control input-md">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="longitude"></label>  
  <div class="col-md-4">
  <input id="longitude" name="longitude" type="text" placeholder="Longitude" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="region"></label>  
  <div class="col-md-4">
  <input id="region" name="region" type="text" placeholder="Region" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="country"></label>  
  <div class="col-md-4">
  <input id="country" name="country" type="text" placeholder="Country" class="form-control input-md">
    
  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description"></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="description" placeholder="Brief Description" name="description"></textarea>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Commencement_date"></label>  
  <div class="col-md-4">
  <input id="Commencement_date" name="Commencement_date" type="date" placeholder="Commencement Date" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="completion_date"></label>  
  <div class="col-md-4">
  <input id="completion_date" name="completion_date" type="date" placeholder="Completion Date" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="status"></label>  
  <div class="col-md-4">
  <input id="status" name="status" type="text" placeholder="SPtatus" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="primary_activity"></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="primary_activity" placeholder="Primary Activity" name="primary_activity"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="partnerships"></label>  
  <div class="col-md-4">
  <input id="status" name="partnerships" type="text" placeholder="Partnerships" class="form-control input-md">
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" type="submit" class="btn btn-primary">Create</button>
  </div>
</div>


</fieldset>
</form>
@endsection