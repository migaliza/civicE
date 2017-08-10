@extends('Phase2.api_layout')

@section('title', 'Manage Users')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid" style="margin-top: 100px">

    <form class="form-horizontal" method="POST" action="/civicdoc/attachrole/new">
      <fieldset>

        <!-- user information -->
        <legend>Form Name</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="fName">First Name</label>  
          <div class="col-md-4">
            <input id="fName" name="fName" value="{!! $fName !!}" type="text" placeholder="" class="form-control input-md">
            
          </div>
        </div>
        <input class="hidden" id="uId" name="uId" type="text" placeholder="" value={{ $uId }} class="form-control input-md">

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="lName">Last name</label>  
          <div class="col-md-4">
            <input id="lName" name="lName" value="{!! $lName !!}" type="text" placeholder="" class="form-control input-md">
            <span class="help-block">help</span>  
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="citizenship">Country of origin</label>  
          <div class="col-md-4">
            <input id="citizenship" name="citizenship" value="{!! $citizenship !!}" type="text" placeholder="" class="form-control input-md">
            <span class="help-block">help</span>  
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="region">Region</label>  
          <div class="col-md-4">
            <input id="region" name="region" type="text" value="{!! $region !!}" placeholder="" class="form-control input-md">
            <span class="help-block">if Ghanaian</span>  
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="role">Assign Role</label>
          <div class="col-md-4">
            <select id="role" name="role" class="form-control">
              <option value="admin">Admin</option>
              <option value="owner">Project Lead</option>
              <option value="volunteer">Volunteer</option>
            </select>
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

    <!-- Your content goes here ...-->

  </div>
</div>

@endsection