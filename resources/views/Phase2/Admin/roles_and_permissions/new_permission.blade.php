@extends('Phase2.api_layout')
@section('title','permissions')
@section('content');
<form class="form-horizontal" method="POST" action="/civicdoc/permission/save">
  <fieldset>

    <!-- Form Name -->
    <legend>Form Name</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Name</label>  
      <div class="col-md-4">
        <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
        <span class="help-block">Name of the Permission</span>  
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
@endsection
