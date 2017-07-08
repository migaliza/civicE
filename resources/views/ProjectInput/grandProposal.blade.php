@extends('master')
@section('content')
@section('title','Grand Proposal')

<form method="POST"  action="/civicdoc/projects/create/project/new" class="form-horizontal">

<fieldset>
{{ csrf_field() }}

<!-- Form Name -->
<legend>new proposal</legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="population"></label>  
  <div class="col-md-4">
  <input id="population" name="population" type="text" placeholder="Population" class="form-control input-md"> 
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="community"></label>  
  <div class="col-md-4">
  <input id="community" name="community" type="text" placeholder="Community" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="YC"></label>  
  <div class="col-md-4">
  <input id="YC" name="YC" type="text" placeholder="Youth and Children" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="assets"></label>  
  <div class="col-md-4">
  <input id="region" name="region" type="text" placeholder="Region" class="form-control input-md">
    
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
  <label class="col-md-4 control-label" for="primary_activity"></label>  
  <div class="col-md-4">
  <input id="primary_activity" name="project[primary]" type="text" placeholder="Primary Activity" class="form-control input-md">
    
  </div>
</div>


<!-- input -->
<div class="form-group">
  <label class="col-md-4 control-label" for="impactPopulation"></label>
  <div class="col-md-4">                     
    <input class="form-control" id="impactPopulation" placeholder="Impact Population" name="project[impactPopulation]"></input>
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