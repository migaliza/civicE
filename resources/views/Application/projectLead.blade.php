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
    <div id="projectLead1">

      <!-- Multiple Checkboxes (inline) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="role1">Role</label>
        <div class="col-md-4">
          <label class="radio-inline" for="role-0">
            <input type="radio" name="role1" id="role-0" value="primary project Lead">
            Primary project Lead
          </label>
          <label class="radio-inline" for="role-1">
            <input type="radio" name="role1" id="role-1" value="project Lead">
            Project Lead
          </label>
        </div>
      </div>

      <!-- Multiple Checkboxes (inline) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="status1">Status</label>
        <div class="col-md-4">
          <label class="radio-inline" for="status-0">
            <input type="radio" name="status1" id="status-0" value="faculty">
            Faculty
          </label>
          <label class="radio-inline" for="status-1">
            <input type="radio" name="status1" id="status-1" value="student" >
            Student
          </label>
          <label class="radio-inline" for="status-2">
            <input type="radio" name="status1" id="status-2" value="staff" >
            Staff
          </label>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="fName1">First Name</label>  
        <div class="col-md-4">
          <input id="fName1" name="fName1" type="text" placeholder="" class="form-control input-md" required="">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="lName1">Last Name</label>  
        <div class="col-md-4">
          <input id="lName1" name="lName1" type="text" placeholder="" class="form-control input-md" required="">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="otherName1">Other Name</label>  
        <div class="col-md-4">
          <input id="otherName1" name="otherName1" type="text" placeholder="" class="form-control input-md" required="">

        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="gender1">Gender</label>
        <div class="col-md-4">
          <select id="gender1" name="gender1" class="form-control">
            <option value="female">Female</option>
            <option value="male">Male</option>
            <option value="choose not to disclose">Choose not to disclose</option>
          </select>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="citizenship1">Country of Citizenship</label>  
        <div class="col-md-4">
          <input id="citizenship1" name="citizenship1" type="text" placeholder="" class="form-control input-md" required="">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="region1">Region</label>  
        <div class="col-md-4">
          <input id="region1" name="region1" type="text" placeholder="" class="form-control input-md" required="">
          <span class="help-block">if you are Ghanaian enter the you are originally from</span>  
        </div>
      </div>



      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="phoneNumber1">Phone Number</label>  
        <div class="col-md-4">
          <input id="phoneNumber1" name="phoneNumber1" type="text" placeholder="" class="form-control input-md" required="">
          <span class="help-block">enter your current number that we can easily reach you</span>  
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="email1">Ashesi Email Address</label>  
        <div class="col-md-4">
          <input id="email1" name="email1" type="email" placeholder="" class="form-control input-md" required="">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="alternativeEmail1">Alternative Email</label>  
        <div class="col-md-4">
          <input id="alternativeEmail1" name="alternativeEmail1" type="text" placeholder="" class="form-control input-md" required="">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="address1">Residence Address</label>  
        <div class="col-md-4">
          <input id="address1" name="address1" type="text" placeholder="" class="form-control input-md" required="">

        </div>
      </div>

   <!--  <div class="col-md-4">
     <p><b>Enter if you are a student </b></p>
   </div> -->
   <div id="student1" style="display: none">
     <!-- Text input-->
     <div class="form-group ">
      <label class="col-md-4 control-label" for="graduation1">Expected Year of Graduation</label>  
      <div class="col-md-4">
        <input id="graduation1" name="graduation1" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group " >
      <label class="col-md-4 control-label" for="major1">Major</label>  
      <div class="col-md-4">
        <input id="major1" name="major1" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group " >
      <label class="col-md-4 control-label" for="GPA1">Cumulative Grade</label>  
      <div class="col-md-4">
        <input id="GPA1" name="GPA1" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>


    <!-- Multiple Checkboxes (inline) -->
    <div class="form-group " >
      <label class="col-md-4 control-label" for="housing1">Campus Housing</label>
      <div class="col-md-4">
        <label class="radio-inline" for="housing-0">
          <input type="radio" name="housing1" id="housing-0" value="on-campus">
          On-campus
        </label>
        <label class="radio-inline" for="housing-1">
          <input type="radio" name="housing1" id="housing-1" value="off-campus">
          Off-campus
        </label>
        <label class="radio-inline" for="housing-2">
          <input type="radio" name="housing1" id="housing-2" value="Berekuso">
          Berekuso
        </label>
      </div>
    </div>
  </div>
  

  <!-- Text input-->
  <div id="staffaculty1" style="display: none">
    <div class="form-group " >
      <label class="col-md-4 control-label" for="department1">Department</label>  
      <div class="col-md-4">
        <input id="department" name="department1" type="text" placeholder="" class="form-control input-md" required="">
        <span class="help-block">i.e Computer Science, Business or Arts department</span>  
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group " >
      <label class="col-md-4 control-label" for="jTitle1">Job Title</label>  
      <div class="col-md-4">
        <input id="jTitle1" name="jTitle1" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>
  </div>

  <!-- Add another project Lead -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="radios1">Add another Project Lead</label>
    <div class="col-md-4"> 
      <label class="radio-inline" for="radios-0">
        <input type="radio" name="radios1" id="radios-0" value="yes" >
        YES
      </label> 
      <label class="radio-inline" for="radios-1">
        <input type="radio" name="radios1" id="radios-1" value="no">
        NO
      </label>
    </div>
  </div>
</div>




<!--project lead 2-->

<div id="projectlead2" style="display: none">
  <div class="h-divider"></div>
  <!-- Multiple Checkboxes (inline) -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="role2">Role</label>
    <div class="col-md-4">
      <label class="radio-inline" for="role-0">
        <input type="radio" name="role2" id="role-0" value="primary project Lead">
        Primary project Lead
      </label>
      <label class="radio-inline" for="role-1">
        <input type="radio" name="role2" id="role-1" value="project Lead">
        Project Lead
      </label>
    </div>
  </div>

  <!-- Multiple Checkboxes (inline) -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="status2">Status</label>
    <div class="col-md-4">
      <label class="radio-inline" for="status-0">
        <input type="radio" name="status2" id="status-0" value="faculty">
        Faculty
      </label>
      <label class="radio-inline" for="status-1">
        <input type="radio" name="status2" id="status-1" value="student" >
        Student
      </label>
      <label class="radio-inline" for="status-2">
        <input type="radio" name="status2" id="status-2" value="staff" >
        Staff
      </label>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="fName2">First Name</label>  
    <div class="col-md-4">
      <input id="fName2" name="fName2" type="text" placeholder="" class="form-control input-md" required="">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="lName2">Last Name</label>  
    <div class="col-md-4">
      <input id="lName2" name="lName2" type="text" placeholder="" class="form-control input-md" required="">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="otherName2">Other Name</label>  
    <div class="col-md-4">
      <input id="otherName2" name="otherName2" type="text" placeholder="" class="form-control input-md" required="">

    </div>
  </div>

  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="gender2">Gender</label>
    <div class="col-md-4">
      <select id="gender2" name="gender2" class="form-control">
        <option value="female">Female</option>
        <option value="male">Male</option>
        <option value="choose not to disclose">Choose not to disclose</option>
      </select>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="citizenship2">Country of Citizenship</label>  
    <div class="col-md-4">
      <input id="citizenship2" name="citizenship2" type="text" placeholder="" class="form-control input-md" required="">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="region2">Region</label>  
    <div class="col-md-4">
      <input id="region2" name="region2" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block">if you are Ghanaian enter the you are originally from</span>  
    </div>
  </div>



  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="phoneNumber2">Phone Number</label>  
    <div class="col-md-4">
      <input id="phoneNumber2" name="phoneNumber2" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block">enter your current number that we can easily reach you</span>  
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="email2">Ashesi Email Address</label>  
    <div class="col-md-4">
      <input id="email2" name="email2" type="email" placeholder="" class="form-control input-md" required="">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="alternativeEmail2">Alternative Email</label>  
    <div class="col-md-4">
      <input id="alternativeEmail2" name="alternativeEmail2" type="email" placeholder="" class="form-control input-md" required="">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="address2">Residence Address</label>  
    <div class="col-md-4">
      <input id="address2" name="address2" type="text" placeholder="" class="form-control input-md" required="">

    </div>
  </div>

   <!--  <div class="col-md-4">
     <p><b>Enter if you are a student </b></p>
   </div> -->
   <div id="student2" style="display: none">
     <!-- Text input-->
     <div class="form-group ">
      <label class="col-md-4 control-label" for="graduation2">Expected Year of Graduation</label>  
      <div class="col-md-4">
        <input id="graduation2" name="graduation2" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group " >
      <label class="col-md-4 control-label" for="major2">Major</label>  
      <div class="col-md-4">
        <input id="major2" name="major2" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group " >
      <label class="col-md-4 control-label" for="GPA2">Cumulative Grade</label>  
      <div class="col-md-4">
        <input id="GPA2" name="GPA2" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>


    <!-- Multiple Checkboxes (inline) -->
    <div class="form-group " >
      <label class="col-md-4 control-label" for="housing2">Campus Housing</label>
      <div class="col-md-4">
        <label class="radio-inline-inline" for="housing-0">
          <input type="radio" name="housing2" id="housing-0" value="on-campus">
          On-campus
        </label>
        <label class="radio-inline" for="housing-1">
          <input type="radio" name="housing2" id="housing-1" value="off-campus">
          Off-campus
        </label>
        <label class="radio-inline" for="housing-2">
          <input type="radio" name="housing2" id="housing-2" value="Berekuso">
          Berekuso
        </label>
      </div>
    </div>
  </div>
  

  <!-- Text input-->
  <div id="staffaculty2" style="display: none">
    <div class="form-group " >
      <label class="col-md-4 control-label" for="department2">Department</label>  
      <div class="col-md-4">
        <input id="department2" name="department2" type="text" placeholder="" class="form-control input-md" required="">
        <span class="help-block">i.e Computer Science, Business or Arts department</span>  
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group " >
      <label class="col-md-4 control-label" for="jTitle2">Job Title</label>  
      <div class="col-md-4">
        <input id="jTitle2" name="jTitle2" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>
  </div>

  <!-- Add another project Lead -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="radios2">Add another Project Lead</label>
    <div class="col-md-4"> 
      <label class="radio-inline" for="radios-0">
        <input type="radio" name="radios2" id="radios-0" value="yes" >
        YES
      </label> 
      <label class="radio-inline" for="radios-1">
        <input type="radio" name="radios2" id="radios-1" value="no" >
        NO
      </label>
    </div>
  </div>

</div>



<!--project lead 3-->

<div id="projectLead3" style="display: none">
  <!-- Multiple Checkboxes (inline) -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="role3">Role</label>
    <div class="col-md-4">
      <label class="radio-inline" for="role-0">
        <input type="radio" name="role3" id="role-0" value="primary project Lead">
        Primary project Lead
      </label>
      <label class="radio-inline" for="role-1">
        <input type="radio" name="role3" id="role-1" value="project Lead">
        Project Lead
      </label>
    </div>
  </div>

  <!-- Multiple Checkboxes (inline) -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="status3">Status</label>
    <div class="col-md-4">
      <label class="radio-inline" for="status-0">
        <input type="radio" name="status3" id="status-0" value="faculty">
        Faculty
      </label>
      <label class="radio-inline" for="status-1">
        <input type="radio" name="status3" id="status-1" value="student" >
        Student
      </label>
      <label class="radio-inline" for="status-2">
        <input type="radio" name="status3" id="status-2" value="staff" >
        Staff
      </label>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="fName3">First Name</label>  
    <div class="col-md-4">
      <input id="fName3" name="fName3" type="text" placeholder="" class="form-control input-md" required="">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="lName3">Last Name</label>  
    <div class="col-md-4">
      <input id="lName3" name="lName3" type="text" placeholder="" class="form-control input-md" required="">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="otherName3">Other Name</label>  
    <div class="col-md-4">
      <input id="otherName3" name="otherName3" type="text" placeholder="" class="form-control input-md" required="">

    </div>
  </div>

  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="gender3">Gender</label>
    <div class="col-md-4">
      <select id="gender3" name="gender3" class="form-control">
        <option value="female">Female</option>
        <option value="male">Male</option>
        <option value="choose not to disclose">Choose not to disclose</option>
      </select>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="citizenship3">Country of Citizenship</label>  
    <div class="col-md-4">
      <input id="citizenship3" name="citizenship3" type="text" placeholder="" class="form-control input-md" required="">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="region3">Region</label>  
    <div class="col-md-4">
      <input id="region3" name="region3" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block">if you are Ghanaian enter the you are originally from</span>  
    </div>
  </div>



  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="phoneNumber3">Phone Number</label>  
    <div class="col-md-4">
      <input id="phoneNumber3" name="phoneNumber3" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block">enter your current number that we can easily reach you</span>  
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="email3">Ashesi Email Address</label>  
    <div class="col-md-4">
      <input id="email3" name="email3" type="email" placeholder="" class="form-control input-md" required="">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="alternativeEmail3">Alternative Email</label>  
    <div class="col-md-4">
      <input id="alternativeEmail3" name="alternativeEmail3" type="text" placeholder="" class="form-control input-md" required="">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="address3">Residence Address</label>  
    <div class="col-md-4">
      <input id="address3" name="address3" type="text" placeholder="" class="form-control input-md" required="">

    </div>
  </div>

   <!--  <div class="col-md-4">
     <p><b>Enter if you are a student </b></p>
   </div> -->
   <div id="student3" style="display: none">
     <!-- Text input-->
     <div class="form-group ">
      <label class="col-md-4 control-label" for="graduation3">Expected Year of Graduation</label>  
      <div class="col-md-4">
        <input id="graduation3" name="graduation3" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group " >
      <label class="col-md-4 control-label" for="major3">Major</label>  
      <div class="col-md-4">
        <input id="major3" name="major3" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group " >
      <label class="col-md-4 control-label" for="GPA3">Cumulative Grade</label>  
      <div class="col-md-4">
        <input id="GPA3" name="GPA3" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>


    <!-- Multiple Checkboxes (inline) -->
    <div class="form-group " >
      <label class="col-md-4 control-label" for="housing3">Campus Housing</label>
      <div class="col-md-4">
        <label class="radio-inline" for="housing-0">
          <input type="radio" name="housing3" id="housing-0" value="on-campus">
          On-campus
        </label>
        <label class="radio-inline" for="housing-1">
          <input type="radio" name="housing3" id="housing-1" value="off-campus">
          Off-campus
        </label>
        <label class="radio-inline" for="housing-2">
          <input type="radio" name="housing3" id="housing-2" value="Berekuso">
          Berekuso
        </label>
      </div>
    </div>
  </div>
  

  <!-- Text input-->
  <div id="staffaculty3" style="display: none">
    <div class="form-group " >
      <label class="col-md-4 control-label" for="department3">Department</label>  
      <div class="col-md-4">
        <input id="department2" name="department3" type="text" placeholder="" class="form-control input-md" required="">
        <span class="help-block">i.e Computer Science, Business or Arts department</span>  
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group " >
      <label class="col-md-4 control-label" for="jTitle3">Job Title</label>  
      <div class="col-md-4">
        <input id="jTitle3" name="jTitle3" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>
  </div>
</div>
<!--end-->


  <!--another project lead>
  <!-- Button -->
 <div class="form-group text-center " id="btnGroup" >
          <div role="group" class="col-md-4  " >
            <a href="#" id="previous" class="btn btn-primary btn-primary"><i class="fa fa-step-backward"></i> Previous</a>

            <a href="#" id="save" class="btn btn-primary btn-primary"><i class="fa fa-floppy-o fa-fw"></i> Save</a>

            <a href="#" id="next" class="btn btn-primary btn-primary"><i class="fa fa-step-forward"></i> Next</a>
          </div>    
        </div>


</fieldset>
</form>


@endsection