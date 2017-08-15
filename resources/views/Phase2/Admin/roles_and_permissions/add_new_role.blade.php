@extends('Phase2.api_layout')
@section('title','role')
@section('content');
<div id="page-wrapper">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12">
        <h4 class="page-header">New Role</h4>
      </div>
    </div>

    <div style="margin-top: 100px;margin-right: 200px" >
      <form class="form-horizontal" method="POST" action="/civicdoc/role/save">
        <fieldset>

          <!-- Form Name -->
          <legend></legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="name">Name</label>  
            <div class="col-md-4">
              <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
              <span class="help-block">name of the role</span>  
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="displayName">Display Name</label>  
            <div class="col-md-4">
              <input id="displayName" name="displayName" type="text" placeholder="" class="form-control input-md">

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
              <button id="submit" name="submit" class="btn btn-primary">Create</button>
            </div>
          </div>

        </fieldset>
      </form>

    </div>

  </div>
</div>


@endsection
