@extends('master')
@section('content')
@section('title','New Project')

<form method="POST"  action="/civicdoc/project/grant/new" class="form-horizontal">

<fieldset>
{{ csrf_field() }}

<!-- Form Name -->
<legend>GRANT</legend>
<div class="form-group">
  <label class="col-md-4 control-label" for="project_name"></label>  
  <div class="col-md-4">
  <input id="project_name" name="project_name" type="hidden" value={{ $projectNamee }} class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="grant_name"></label>  
  <div class="col-md-4">
  <input id="grant_name" name="grant_name" type="text" placeholder="Grant Name" class="form-control input-md">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="grant_amount"></label>  
  <div class="col-md-4">
  <input id="grant_amount" name="grant_amount" type="number" placeholder="Grant Amount" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="funding_cycle"></label>  
  <div class="col-md-4">
  <input id="funding_cycle" name="funding_cycle" type="text" placeholder="Funding Cycle" class="form-control input-md">
    
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