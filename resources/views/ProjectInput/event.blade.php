@extends('master')
@section('content')
@section('title','New Project')

<form method="POST"  action="/civicdoc/project/event/new" class="form-horizontal">

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

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="List_of_event"></label>  
  <div class="col-md-4">
  <input id="List_of_event" name="List_of_event" type="text" placeholder="List of Event" class="form-control input-md">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date"></label>  
  <div class="col-md-4">
  <input id="date" name="date" type="date" placeholder="Date" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="eventLocation"></label>  
  <div class="col-md-4">
  <input id="eventLocation" name="eventLocation" type="text" placeholder="Event Location" class="form-control input-md">
    
  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="eventBrief"></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="eventBrief" placeholder="Event Brief" name="eventBrief"></textarea>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="attendance"></label>  
  <div class="col-md-4">
  <input id="attendance" name="attendance" type="number" placeholder="attendance" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="eventOutcome"></label>  
  <div class="col-md-4">
  <input id="eventOutcome" name="eventOutcome" type="text" placeholder="Event Outcome" class="form-control input-md">
    
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