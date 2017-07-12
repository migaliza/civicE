@extends('Application.application')
@section('content')
@section('title','New Fund Application')

<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Project Lead Infor</h3>
  </div>
</div>

<form class="form-horizontal">
  <fieldset>

    <!-- Multiple Checkboxes (inline) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="role">Role</label>
      <div class="col-md-4">
        <label class="radio-inline" for="role-0">
          <input type="radio" name="role" id="role-0" value="primary project Lead">
          Primary project Lead
        </label>
        <label class="radio-inline" for="role-1">
          <input type="radio" name="role" id="role-1" value="project Lead">
          Project Lead
        </label>
      </div>
    </div>

    <!-- Multiple Checkboxes (inline) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="status">Status</label>
      <div class="col-md-4">
        <label class="radio-inline" for="status-0">
          <input type="radio" name="status" id="status-0" value="faculty">
          Faculty
        </label>
        <label class="radio-inline" for="status-1">
          <input type="radio" name="status" id="status-1" value="student" >
          Student
        </label>
        <label class="radio-inline" for="status-2">
          <input type="radio" name="status" id="status-2" value="staff" >
          Staff
        </label>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="fName">First Name</label>  
      <div class="col-md-4">
        <input id="fName" name="fName" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="lName">Last Name</label>  
      <div class="col-md-4">
        <input id="lName" name="lName" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="otherName">Other Name</label>  
      <div class="col-md-4">
        <input id="otherName" name="otherName" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="gender">Gender</label>
      <div class="col-md-4">
        <select id="gender" name="gender" class="form-control">
          <option value="female">Female</option>
          <option value="male">Male</option>
          <option value="choose not to disclose">Choose not to disclose</option>
        </select>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="citizenship">Country of Citizenship</label>  
      <div class="col-md-4">
        <input id="citizenship" name="citizenship" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="region">Region</label>  
      <div class="col-md-4">
        <input id="region" name="region" type="text" placeholder="" class="form-control input-md" required="">
        <span class="help-block">if you are Ghanaian enter the you are originally from</span>  
      </div>
    </div>



    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="phoneNumber">Phone Number</label>  
      <div class="col-md-4">
        <input id="phoneNumber" name="phoneNumber" type="text" placeholder="" class="form-control input-md" required="">
        <span class="help-block">enter your current number that we can easily reach you</span>  
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="email">Ashesi Email Address</label>  
      <div class="col-md-4">
        <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="alternative email">Alternative Email</label>  
      <div class="col-md-4">
        <input id="alternative email" name="alternative email" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="address">Residence Address</label>  
      <div class="col-md-4">
        <input id="address" name="address" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

   <!--  <div class="col-md-4">
     <p><b>Enter if you are a student </b></p>
   </div> -->
   <div id="student" style="display: none">
     <!-- Text input-->
     <div class="form-group ">
      <label class="col-md-4 control-label" for="graduation">Expected Year of Graduation</label>  
      <div class="col-md-4">
        <input id="graduation" name="graduation" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group " >
      <label class="col-md-4 control-label" for="major">Major</label>  
      <div class="col-md-4">
        <input id="major" name="major" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group " >
      <label class="col-md-4 control-label" for="GPA">Cumulative Grade</label>  
      <div class="col-md-4">
        <input id="GPA" name="GPA" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>


    <!-- Multiple Checkboxes (inline) -->
    <div class="form-group " >
      <label class="col-md-4 control-label" for="housing">Campus Housing</label>
      <div class="col-md-4">
        <label class="checkbox-inline" for="housing-0">
          <input type="checkbox" name="housing" id="housing-0" value="on-campus">
          On-campus
        </label>
        <label class="checkbox-inline" for="housing-1">
          <input type="checkbox" name="housing" id="housing-1" value="off-campus">
          Off-campus
        </label>
        <label class="checkbox-inline" for="housing-2">
          <input type="checkbox" name="housing" id="housing-2" value="Berekuso">
          Berekuso
        </label>
      </div>
    </div>
  </div>
  

  <!-- Text input-->
  <div id="staffaculty" style="display: none">
    <div class="form-group " >
      <label class="col-md-4 control-label" for="department">Department</label>  
      <div class="col-md-4">
        <input id="department" name="department" type="text" placeholder="" class="form-control input-md" required="">
        <span class="help-block">i.e Computer Science, Business or Arts department</span>  
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group " >
      <label class="col-md-4 control-label" for="jTitle">Job Title</label>  
      <div class="col-md-4">
        <input id="jTitle" name="jTitle" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>
  </div>
  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="continue"></label>
    <div class="col-md-4">
      <button id="continue" name="continue" class="btn btn-success">CONTINUE</button>
    </div>
  </div>

</fieldset>
</form>


@endsection