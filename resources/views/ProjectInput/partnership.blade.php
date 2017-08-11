@extends('Phase2.ProjectLeaders.project_dashboard')
@section('content')
@section('title','Volunteer Track')
<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12">
        <h4 class="page-header">Partnership</h3>
        </div>
      </div>
      <form class="form-horizontal" method="POST" action="civicdoc/project/partnership/new">
        <fieldset>
          {{ csrf_field() }}

          <div class="form-group">
            <label class="col-md-4 control-label" for="pId"></label>  
            <div class="col-md-4">
              <input id="pId" name="pId" type="hidden" value={{ $projectId }} class="form-control input-md">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="partnership">Partnership</label>  
            <div class="col-md-4">
              <input id="partnership" name="partnership" type="text" placeholder="" class="form-control input-md" required="">
              <span class="help-block">Name of partner</span>  
            </div>
          </div>

          <!-- Textarea -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="description">Description</label>
            <div class="col-md-4">                     
              <textarea class="form-control" id="description" name="description"></textarea>
            </div>
          </div>

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
              <button id="submit" name="submit" class="btn btn-primary">ADD</button>
            </div>
          </div>

        </fieldset>
      </form>
