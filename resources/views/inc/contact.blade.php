
@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
		
		<!-- ====== Validation server side ===== 
this will display on on contact.php page if successfull			-->
			@if(count($errors)>0)
				@foreach($errors->all() as $error)
			<div class="alert alert-danger"> {{ $error }} </div>
				@endforeach			
			@endif
			
				<!-- this response is comes from ContactController -->
		@if(session('response'))
			<div class="alert alert-success">{{ session('response') }}</div>
		
		@endif
			
			<!-- validation end -->
		
		
            <div class="panel panel-default">
			
			 <div class="panel-heading">Contact us</div>
				
				
				
				<div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/addcontact') }}">
                        {{ csrf_field() }}
						
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Your Name</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<!-- email input -->

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Your E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" option>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<!-- end email input -->
						
						<!-- start contct no -->
						<div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                            <label for="tel" class="col-md-4 control-label">Contact No</label>

                            <div class="col-md-6">
                                <input id="tel" type="tel" class="form-control" name="tel" value="{{ old('tel') }}" placeholder="0777 123456" maxlength="10" required autofocus>

                                @if ($errors->has('tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
						<!-- end contact no-->
						
						<!-- start course -->
						
						<div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
                            <label for="course" class="col-md-4 control-label">Course</label>

                            <div class="col-md-6">
                                <input id="course" type="text" class="form-control" name="course" value="{{ old('course') }}" placeholder="Dip in Business management" required autofocus>

                                @if ($errors->has('course'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('course') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                            <label for="comment" class="col-md-4 control-label">Comment/ Request</label>

                            <div class="col-md-6">
                                <textarea id="comment" type="textarea" class="form-control" name="comment" value="{{ old('comment') }}" >
								
							</textarea>

                                @if ($errors->has('course'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('course') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>

                                
                            </div>
                        </div>
					</form>
<h4> Note : </h4><p> Please fill this form for any kind of queries. we will contact you soon.</p>
				</div>
			</div>
		</div>
	</div>
</div>

/*---@endsection*/


   