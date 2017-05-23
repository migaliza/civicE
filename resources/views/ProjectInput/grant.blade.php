@extends('master')
@section('content')
@section('title','New Project')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

<form method="POST"  action="/civicdoc/project/grant/new" class="form-horizontal">

<fieldset>
{{ csrf_field() }}

<!-- Form Name -->
<legend>GRANT</legend>
<div class="form-group">
  <label class="col-md-4 control-label" for="project_name"></label>  
  <div class="col-md-4">
  <input id="project_name" name="project_name" type="hidden" value={{ $projectNamee }} class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="grant_name"></label>  
  <div class="col-md-4">
  <input id="grant_name" name="grant_name" type="text" placeholder="Grant Name" class="form-control input-md">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="grant_amount"></label>  
  <div class="col-md-4">
  <input id="grant_amount" name="grant_amount" type="number" placeholder="Grant Amount" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="funding_cycle"></label>  
  <div class="col-md-4">
  <input id="funding_cycle" name="funding_cycle" type="text" placeholder="Funding Cycle" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="objective"></label>  
  <div class="col-md-4">
  <input id="objective" name="objective" type="text" placeholder="Funding objective" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="daterange"></label>  
  <div class="col-md-4">
  <input type="text" name="daterange" Placeholder="" value="" class="form-control input-md">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="funding_description"></label>  
  <div class="col-md-4">
  <input id="funding_description" name="funding_description" type="text" placeholder="Funding Description" class="form-control input-md">
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


<script type="text/javascript">

  $('input[name="daterange"]').daterangepicker({
    locale: {
      format: 'YYYY-MM',
      viewmode: "months",
      minViewMode: 'months'
    },
    startDate: '2017-01-01',
    endDate: '2017-12-31',
  },
  function(start,end,label){
    alert("a new range was chosen: "+start.format('YYYY-MM-DD') +'To' + end.format('YYYY-MM-DD'));
  }

  );

</script>



@endsection