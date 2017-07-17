@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="margin-top: 100px">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <!--first name-->
                        <div class="form-group{{ $errors->has('fName') ? ' has-error' : '' }}">
                            <label for="fName" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="fName" type="text" class="form-control" name="fName" value="{{ old('fName') }}" required autofocus>

                                @if ($errors->has('fName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fName') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <!--last name-->
                        <div class="form-group{{ $errors->has('lName') ? ' has-error' : '' }}">
                            <label for="lName" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lName" type="text" class="form-control" name="lName" value="{{ old('lName') }}" required autofocus>

                                @if ($errors->has('lName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lName') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <!--email address-->

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <!--citizenship-->

                        <div class="form-group{{ $errors->has('citizenship') ? ' has-error' : '' }}">
                            <label for="citizenship" class="col-md-4 control-label">Country of citizenship</label>

                            <div class="col-md-6">
                                <input id="citizenship" type="text" class="form-control" name="citizenship" value="{{ old('citizenship') }}" required autofocus>

                                @if ($errors->has('citizenship'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('citizenship') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <!--region if citizenship is Ghana-->
                        <div id="showRegion" style="display: none">
                            <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
                                <label for="region" class="col-md-4 control-label">Region</label>

                                <div class="col-md-6">
                                    <input id="region" type="text" class="form-control" name="region" value="{{ old('region') }}" required>

                                    @if ($errors->has('region'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('region') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!--status whether student or Faculty-->
                        <!-- Multiple Radios (inline) -->
                        <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
                          <label class="col-md-4 control-label" for="statusRegister">Status</label>
                          <div class="col-md-4"> 
                            <label class="radio-inline" for="statusRegister-0">
                              <input type="radio" name="statusRegister" id="statusRegister-0" value="student" checked="checked">
                              STUDENT
                          </label> 
                          <label class="radio-inline" for="statusRegister-1">
                              <input type="radio" name="statusRegister" id="statusRegister-1" value="faculty">
                              FACULTY
                          </label> 
                          <label class="radio-inline" for="statusRegister-2">
                              <input type="radio" name="statusRegister" id="statusRegister-2" value="staff">
                              STAFF
                          </label>
                      </div>
                  </div>


                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection