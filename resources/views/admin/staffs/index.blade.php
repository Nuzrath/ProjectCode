@extends('layouts.admin')

@section('content')

<h3>Staff List for Admin View </h3>

<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>Firstname</th>
          <th>Lastname</th>
		  <th>Address</th>
		  <th>Email</th>
          <th>Date of Birth</th>
          <th>Contact No</th>
          
        </tr>
      </thead>
      <tbody>
	  
	  @if($staffs)
		  @foreach($staffs as $staff)
        <tr>
          <td>{{$staff->staff_id}}</td>
          <td>{{$staff->fname}}</td>
          <td>{{$staff->lname}}</td>
          <td>{{$staff->address}}</td>
          <td>{{$staff->email_id}}</td>
          <td>{{$staff->dob}}</td>
          <td>{{$staff->contact1}}</td>
		@endforeach
		@endif
        </tr>
      </tbody>
    </table>
  </div>

@stop


