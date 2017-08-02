@extends('Phase2.api_layout')
@section('content')
@section('title','New Project')


<div id="page-wrapper">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12">
        <h4 class="page-header">Breadcrumbs</h4>
      </div>
    </div>

    <div style="">
      <form method="POST"  action="/civicdoc/projects/create/project/new" class="form-horizontal">

        <fieldset>
          {{ csrf_field() }}

          <!-- Form Name -->
          <legend>NEW PROJECT</legend>


          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="projectName">Project Name</label>  
            <div class="col-md-4">
              <input id="projectName" name="projectName" type="text" placeholder="" class="form-control input-md"> 

            </div>
          </div>



          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="facultyId">Faculty Id</label>  
            <div class="col-md-4">
              <input id="facultyId" name="facultyId" type="text" placeholder="" class="form-control input-md">

            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="town">Town</label>  
            <div class="col-md-4">
              <input id="town" name="town" type="text" placeholder="" class="form-control input-md">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="region">Region</label>  
            <div class="col-md-4">
              <input id="region" name="region" type="text" placeholder="" class="form-control input-md">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="latitude">Latitude</label>  
            <div class="col-md-4">
              <input id="latitude" name="latitude" type="text" placeholder="" class="form-control input-md">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="longitude">Longitude</label>  
            <div class="col-md-4">
              <input id="longitude" name="longitude" type="text" placeholder="" class="form-control input-md">

            </div>
          </div>


          <!-- Textarea -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="description">Brief Description</label>
            <div class="col-md-4">                     
              <textarea class="form-control" id="description" placeholder="" name="description"></textarea>
            </div>
          </div>


          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Commencement_date">Commencement Date</label>  
            <div class="col-md-4">
              <input id="Commencement_date" name="Commencement_date" type="date" placeholder="" class="form-control input-md">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="completion_date">Completion Date</label>  
            <div class="col-md-4">
              <input id="completion_date" name="completion_date" type="date" placeholder="" class="form-control input-md">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="primary_activity">Primary Activity</label>  
            <div class="col-md-4">
              <input id="primary_activity" name="project[primary]" type="text" placeholder="" class="form-control input-md">

            </div>
          </div>


          <!-- input -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="impactPopulation"> Impact Population (I dhould to a multiple selection)</label>
            <div class="col-md-4">                     
              <input class="form-control" id="impactPopulation" placeholder="" name="project[impactPopulation]"></input>
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
      
    </div>

    <!-- Your content goes here ...-->

  </div>
</div>


@endsection