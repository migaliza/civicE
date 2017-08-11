@extends('Phase2.ProjectLeaders.project_dashboard')
@section('content')
@section('title','upcoming')
<div style="margin-top: 100px; margin-right: 100px">
  <div id="page-wrapper">
    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header">@yield('title')</h3>
        </div>
      </div>

      <div>
        <form method="POST"  action="/civicdoc/project/upcoming/new" class="form-horizontal">
          <fieldset>
            {{ csrf_field() }}

            <div class="form-group">
              <label class="col-md-4 control-label" for="pId"></label>  
              <div class="col-md-4">
                <input id="pId" name="pId" type="hidden" value={{ $projectId }} class="form-control input-md">
              </div>
            </div>
            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="upcoming"></label>
              <div class="col-md-4">                     
                <textarea class="form-control" id="upcoming" placeholder="Upcoming" name="upcoming"></textarea>
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
</div>


@endsection