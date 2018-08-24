@extends('layouts.admin')


@section('content')

<h3>Staff create by Admin </h3>

<div class="row">
@if(count($errors)>0)
	<div class="alert alert-danger">
	
	@foreach($errors->all() as $error)
		<ul> <li>{{$error}}</li></ul>
	@endforeach
</div>
@endif

</div>

{!! Form::open(['action' => 'AdminStaffController@store','files'=>true]) !!}

<div class="row">

	<div class="Form-group">

		{!! Form::label('fname', 'First Name:'); !!}
		{!! Form::text('fname', 'john',['class' => 'form-control']);!!}
	</div>

	<div class="Form-group">

		{!! Form::label('lname', 'Last Name:'); !!}
		{!! Form::text('lname', 'ferdin',['class' => 'form-control']);!!}
	</div>
	
	<div class="Form-group">

		{!! Form::label('address', 'Address:'); !!}
		{!! Form::text('address', '1st chapel lane',['class' => 'form-control']);!!}
	</div>
	
	<div class="Form-group">

		{!! Form::label('country', 'Country:'); !!}
		{!! Form::text('country', 'Sri Lanka',['class' => 'form-control']);!!}
	</div>
	
	<div class="Form-group">

		{!! Form::label('dob', 'Date of Birth:'); !!}
		{!! Form::date('dob', \Carbon\Carbon::now()); !!}
	</div>
	
	<div class="Form-group">

		{!! Form::label('contact1', 'Mobile No.'); !!}
		{!! Form::tel('contact1', '0713123456',['class' => 'form-control']); !!}
	</div>
	
	<div class="Form-group">

		{!! Form::label('contact2', 'Home No.'); !!}
		{!! Form::tel('contact2', '0713000000',['class' => 'form-control']); !!}
		*optional
	</div>
	
	<div class="Form-group">

		{!! Form::label('nic', 'National ID No.'); !!}
		{!! Form::text('nic', '555555555V',['class' => 'form-control']); !!}
		
	</div>
	
	<div class="Form-group">

		{!! Form::label('passport_no', 'Passport No.'); !!}
		{!! Form::text('passport_no', null, ['class' => 'form-control']); !!}
		
	</div>
	
	
	<div class="Form-group">

		{!! Form::label('gender', 'Gender'); !!}
		{!! Form::radio('gender', 'male', true); !!} Male
		{!! Form::radio('gender', 'female'); !!} Female
	</div>
	
	<div class="Form-group">

		{!! Form::label('email', 'Email'); !!}
		{!! Form::text('email','',['class' => 'form-control']); !!}
	</div>
	
	
	<div class="Form-group">
	{!! Form::submit('Click Me!');!!}
	</div>
	
	
	
{!! Form::close() !!}
</div>





@stop
<!--
First Name
Last Name
Address
Country
Date of Birth
Mobile No:
'contact2'=>'nullable',
		'nic'=>'required',
		'passport_no'=>'nullable',
		'gender'=>'required',
		'email'=>'required',