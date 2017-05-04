@extends('master')
@section('content')
@section('title','New Project')

<form method="POST"  action="/civicdoc/project/target/population/add" class="form-horizontal">

<fieldset>
{{ csrf_field() }}

<!-- Form Name -->
<legend>POPULATION TARGET</legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="project_name"></label>  
  <div class="col-md-4">
  <input id="project_name" name="project_name" type="hidden" value={{ $projectNamee }} class="form-control input-md">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="target_baseline"></label>  
  <div class="col-md-4">
  <input id="target_baseline" name="target_baseline" type="number" placeholder="Target Baseline" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="target_recent"></label>  
  <div class="col-md-4">
  <input id="target_recent" name="target_recent" type="number" placeholder="Target Recent" class="form-control input-md">
    
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