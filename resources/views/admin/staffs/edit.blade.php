@extends('layouts.admin');

@section('content')
    
<h3>Staff Update for Admin View </h3>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

        @include('inc.form_responce')

        
        {!! Form::model($staff, ['method'=>'PATCH', 'action'=> ['AdminStaffController@update', $staff->staff_id]] ) !!}

        <div class="form-group">
            {!! Form::label('fname', 'First Name:', ['class' => 'col-lg-2 control-label']) !!}

            {!! Form::text('fname', null, ['class' => 'form-control',]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('lname', 'Last Name:', ['class' => 'col-lg-2 control-label']) !!}
    
            {!! Form::text('lname', null, ['class' => 'form-control',]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('address', 'Address:', ['class' => 'col-lg-2 control-label']) !!}
    
            {!! Form::text('address', null, ['class' => 'form-control',]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email Address:', ['class' => 'col-lg-2 control-label']) !!}
    
            {{--  {!! Form::email('email', null, ['class' => 'form-control',]) !!}  --}}
            {{$staff->email}}
        </div>
        
        <div class="form-group">
            {!! Form::label('dob', 'Date of Birth:', ['class' => 'col-lg-2 control-label']) !!}
    
            {!! Form::date('dob', null, ['class' => 'form-control',]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('contact1', 'Mobile Phone No :', ['class' => 'col-lg-2 control-label']) !!}
    
            {!! Form::text('contact1', null, ['class' => 'form-control',]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('contact2', 'Home No :', ['class' => 'col-lg-2 control-label']) !!}
    
            {!! Form::text('contact2', null, ['class' => 'form-control',]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nic_no', 'National ID No :', ['class' => 'col-lg-2 control-label']) !!}
    
            {!! Form::text('nic_no', null, ['class' => 'form-control',]) !!}
        </div>


        <div class="form-group">
            {!! Form::label('passport_no', 'Passport No :', ['class' => 'col-lg-2 control-label']) !!}
    
            {!! Form::text('passport_no', null, ['class' => 'form-control',]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('status', 'Status :', ['class' => 'col-lg-2 control-label']) !!}
    
            {!! Form::text('status', null, ['class' => 'form-control',]) !!}
        </div>

        
        
           
        
        <div class="form-group">
        {!! Form::submit("submit", ['class'=>'btn btn-primary']) !!}
        </div>


        {!! Form::close() !!}
        </div>
    </div>
</div>

@stop

