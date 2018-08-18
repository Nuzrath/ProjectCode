@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Staff Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('staff.store') }}">
                        {{ csrf_field() }}

						<!-- User type for bict portal 
					
						<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="user_id" class="col-md-4 control-label">User type </label>

                            <div class="col-md-6">
                                <input id="user_id" type="input" class="form-control" name="type" value="{{ old('user_id') }}">

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
						<!-- end bict user type -->
						 				
						
                        <div class="form-group{{ $errors->has('email_id') ? ' has-error' : '' }}">
                            <label for="email_id" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email_id" type="email" class="form-control" name="email_id" value="{{ old('email_id') }}" required autofocus>

                                @if ($errors->has('email_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contact1') ? ' has-error' : '' }}">
                            <label for="contact1" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="contact1" type="password" class="form-control" name="contact1" required>

                                @if ($errors->has('contact1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
