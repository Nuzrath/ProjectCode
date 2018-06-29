@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/addstudent') }}">
                        {{ csrf_field() }}
<!-- This is my work-->

<!-- fname for first name-->
                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                            <label for="fname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


<!-- lname for last name-->
                        <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                            <label for="lname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" required autofocus>

                                @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
<!-- home address #-->						
                       <div class="form-group">
							<label for="Address" class="col-md-4 control-label">Address</label>
							
							<div class="col-md-6">
							<input id="address" type="textbox" class="form-control" name="address" placeholder="eg: 26, 1st lane" required>
							</div>
						
						</div>


<!-- home address street-->						
                        <div class="form-group">
							<label for="city" class="col-md-4 control-label">City</label>
							
							<div class="col-md-6">
							<input id="city" type="textbox" class="form-control" name="city" placeholder="eg.colombo 06" required>
							</div>
						</div>
						
<!-- Date of Birth-->						
                        <div class="form-group">
							<label for="dob" class="col-md-4 control-label">Date of Birth</label>
							
							<div class="col-md-6">
							<input id="dob" type="textbox" class="form-control" name="city" placeholder="eg.colombo 06" required>
							</div>
						</div>
						
<!-- should be display show age near by this -->

<!-- from https://getbootstrap.com/docs/4.0/components/forms/ -->
						<div class="form-row">
							<div class="col-md-6 mb-3">
							  <label for="validationDefault03">City</label>
							  <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
							</div>
							<div class="col-md-3 mb-3">
							  <label for="validationDefault04">State</label>
							  <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
							</div>
							<div class="col-md-3 mb-3">
							  <label for="validationDefault05">Zip</label>
							  <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
							</div>
						  </div>











<!-- Date of Birth-->						
                        <div class="form-group">
							<label for="city" class="col-md-4 control-label">City</label>
							
							<div class="col-md-6">
							<input id="city" type="textbox" class="form-control" name="city" placeholder="eg.colombo 06" required>
							</div>
						</div>
						
						
<!-- emial address -->						
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
