@extends('Phase2.ProjectLeaders.project_dashboard')
@section('content')
@section('title','Fund Information')

<!-- Page Content -->
<div style="margin-top: 100px; margin-right: 100px">
  <div id="page-wrapper">
    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">@yield('title')</h1>
        </div>
      </div>

      <form method="POST"  action="/civicdoc/project/grant/new" class="form-horizontal">

        <fieldset>
          {{ csrf_field() }}

          <!-- Form Name -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="project_name"></label>  
            <div class="col-md-4">
              <input id="project_name" name="project_name" type="hidden" value="{{ $projectId}}" class="form-control input-md">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="fPartner">Funding Partner </label>  
            <div class="col-md-4">
              <input id="fPartner" name="fPartner" type="text" placeholder="" class="form-control input-md">

            </div>
          </div>


          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="fAmount">Funding Amount</label>  
            <div class="col-md-4">
              <input id="fAmount" name="fAmount" type="number" placeholder="" class="form-control input-md">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="fObjective">Funding Objective</label>  
            <div class="col-md-4">
              <input id="fObjective" name="fObjective" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>


          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="fDescription">Funding Description</label>  
            <div class="col-md-4">
              <input id="fDescription" name="fDescription" type="text" placeholder="" class="form-control input-md">
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

    </div>
  </div>
</div>
@endsection