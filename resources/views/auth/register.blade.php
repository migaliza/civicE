                              </span>
                              <div class="panel-heading">Register</div>
                          </div>
                      </div>
                      @if ($errors->has('email'))
                      <span class="help-block">
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">

                            <label for="password" class="col-md-4 control-label">Password</label>
                            <option value="project lead">project Lead</option>
                            <!-- Select Status -->
                            <select id="status" name="status" class="form-control">
                              <label class="col-md-4 control-label" for="role">Role</label>
                          </div>
                          @if ($errors->has('citizenship'))
                      </div>

                  </div>
                  <label class="col-md-4 control-label" for="status">Status</label>
              </div>
              <strong>{{ $errors->first('firstName') }}</strong>

              @endif
          </div>
          @if ($errors->has('role'))
      </div>
  </span>
  <div class="col-md-6 col-md-offset-4">
    <select id="role" name="role" class="form-control">
      <span class="help-block">
        <div class="col-md-6">
            <!-- Select Role -->
            <label class="col-md-4 control-label" for="firstName">First Name</label> 

            <option value="faculty">Faculty</option>

            <label class="col-md-4 control-label" for="citizenship">Country of citizenship</label>  
            <div class="form-group">
              <!-- Text last name-->
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                <label class="col-md-4 control-label" for="region">Region (if Ghanaian)</label>  
            </span>
        </div>

        <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">

            <strong>{{ $errors->first('status') }}</strong>
            <div class="row">
                @endif
            </div>
            <div class="panel panel-default">
                @endif

            </form>

        </div>

        <div class="col-md-6">
        </div>

        <button type="submit" class="btn btn-primary">
          @if ($errors->has('lastName'))
      </div>

  </select>
  <div class="col-md-6">
      <input id="citizenship" name="citizenship" type="text" placeholder="" class="form-control input-md" required autofocus autocomplete>

      <option value="student">Student</option>
      <!-- Text first name-->
  </div>
  <!--email address -->
</button>
</select>
<strong>{{ $errors->first('lastName') }}</strong>
</div>
<strong>{{ $errors->first('email') }}</strong>
</div>
<input id="region" name="region" type="text" placeholder="" class="form-control input-md" required autofocus autocomplete>
<div class="col-md-8 col-md-offset-2">
</span>
</div>

<!-- Text citizenship-->
<div class="form-group {{ $errors->has('role') ? ' has-error' : '' }}">
  <div class="col-md-6">
  </span>


  @endif
  <input id="password" type="password" class="form-control" name="password" required>
  <!-- Text citizenship-->
  <div class="panel-body">
    <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
        {{ csrf_field() }}

        <label for="email" class="col-md-4 control-label">E-Mail Address</label>
        <span class="help-block">
        </div>
        @if ($errors->has('status'))
    </div>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    <strong>{{ $errors->first('role') }}</strong>

</div>
<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
    <div class="container">

        @if ($errors->has('password'))
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <strong>{{ $errors->first('password') }}</strong>

            <div class="col-md-6">
            </div>
        </span>

        <span class="help-block">


        </div>
    </div>
    <option value="admin">Admin</option>
</div>
@section('content')
</div>
@endsection

<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
    @endif
    Register
    <div class="col-md-6">
      <span class='help-block'>
          <div class="col-md-6">
              <div class="form-group">
                @extends('layouts.app')
                <span class="help-block">
                  <option value="ordinary">Ordinary</option>
              </span>
              <div class="col-md-6">
                  <label class="col-md-4 control-label" for="lastName">Last Name</label>  

                  <strong>{{ $errors->first('citizenship') }}</strong>
                  <div class="form-group{{ $errors->has('citizenship') ? ' has-error' : '' }}">
                      <input id="firstName" name="firstName" type="text" value="{{ old('name') }}" class="form-control input-md" required autofocus="">
                      <div class="col-md-6">
                          <option value="volunteer">volunteer</option>
                          <input id="lastName" name="lastName" type="text" value="{{ old('name') }}" class="form-control input-md" required autofocus>
                          @if ($errors->has('firstName'))
                          @endif
                          <span class='help-block'>