@extends('Phase2.api_layout')

@section('title', 'Manage Users')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid" style="margin-top: 100px">

   <form class="form-horizontal">
    <fieldset>

      <!-- View User Details -->
      <legend>Form Name</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="fName"><b>First name</b></label>  
        <div class="col-md-4">

          <input id="fName" name="fName" type="text" value="{!! $fName !!}"  class="form-control input-md" disabled="true" >     

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="lName"><b>Last Name</b></label>  
        <div class="col-md-4">
          <input id="lName" name="lName" type="text" value="{!! $lName !!}" class="form-control input-md" disabled="true">

        </div>
      </div>
      <input id="uId" name="uId" type="text" value="{!! $uId !!}" class="hidden" disabled="true">

      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label" for="citizenship"><b>Country of Origin</b></label>  
        <div class="col-md-4">
          <input id="citizenship" name="citizenship" type="text" value="{!! $citizenship !!}" class="form-control input-md" disabled="true">

        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="region"><b>Region</b></label>  
        <div class="col-md-4">
          <input id="region" name="region" type="text" value="{{! $region !!}" class="form-control input-md" disabled="true">
          <span class="help-block">If the user is Ghanaian</span>  
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="projects_involved"><b>Projects involved In</b></label>  
        <div class="col-md-4">
          <input id="projects_involved" name="projects_involved" type="text" value="" class="form-control input-md" disabled="true">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="role"><b>Role</b></label>  
        <div class="col-md-4">
          <input id="role" name="role" type="text" value="{!! $roleName !!}" class="form-control input-md" disabled="true">

        </div>
      </div>

      <!-- Button -->
      <div class="form-group pull-right">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-4">
          <button id="submit" name="submit" class="btn btn-primary">ADD ROLE</button>
        </div>
      </div>

    </fieldset>
  </form>

</div>
</div>

@endsection