@extends('Phase2.ProjectLeaders.project_dashboard')
@section('content')
@section('title','Target Population')

<div id="page-wrapper">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"></h1>
      </div>
    </div>

    <div >
      <form method="POST"  action="/civicdoc/project/statistics/population/track/new" class="form-horizontal">

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
            <label class="col-md-4 control-label" for="baseline"></label>  
            <div class="col-md-4">
              <input id="baseline" name="baseline" type="number" placeholder="" class="form-control input-md">

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