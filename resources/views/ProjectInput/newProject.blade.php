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
      <form method="POST"  action="/civicdoc/projects/create/project/add" class="form-horizontal">

        <fieldset>
          {{ csrf_field() }}


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


          <!-- Select Multiple -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="impactSectors">Impact Sectors</label>
            <div class="col-md-4">
              <select id="impactSectors" name="impactSectors[]" class="form-control" multiple="multiple">
                <option value="Education">Education</option>
                <option value="Design">Design</option>
                <option value="Technology">Technology</option>
                <option value="Agriculture">Agriculture</option>
                <option value="Entrepreneurship">Entrepreneurship</option>
                <option value="Environment">Environment</option>
                <option value="Welfare">Welfare</option>
                <option value="Counselling">Counselling</option>
                <option value="Mentorship">Mentorship</option>
                <option value="Sanitation">Sanitation</option>
                <option value="Waste management">Waste management</option>
              </select>
              <span class="help-block">Press Ctrl to select multiple values</span>  
            </div>
          </div>

          <!-- Select Multiple -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="impactPopulation">Impact population</label>
            <div class="col-md-4">
              <select id="impactPopulation" name="impactPopulation" class="form-control" multiple="multiple">
                <option value="Students">Students</option>
                <option value="Children">Children</option>
                <option value="Farmers">Farmers</option>
                <option value="Street Children">Street Children</option>
                <option value="Street Children">Street Children</option>
              </select>
              <span class="help-block">Press ctrl to select multiple values</span>  
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