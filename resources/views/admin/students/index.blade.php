@extends('layouts.admin')

@section('content')

<h3>Student List for Admin View </h3>

@include('inc.form_responce')

<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>Full Name</th>
          <th>Address</th>
		  <th>City</th>
		  <th>Country</th>
		  <th>Date of Birth</th>
		  <th>Contact No</th>
		  <th>Home No </th>
		  <th>NIC No</th>
          <th>Email</th>
          <th>Course</th>
          <th>created</th>
          <th>Updated</th>
        </tr>
      </thead>
      <tbody>
	  
	  @if($students)
		  @foreach($students as $student)
        <tr>
          <td>{{$student->std_id}}</td>
          <td>{{$student->fname . " ".$student->lname}}</td>
          <td>{{$student->address}}</td>
		  <td>{{$student->city}}</td>
          <td>{{$student->country}}</td>
          <td>{{$student->dob}}</td>
          <td>{{$student->contact1}}</td>
		  <td>{{$student->contact2 ? $student->contact2 : 'Not available'}}</td>
		  <td>{{$student->nic}}</td>
          <td>{{$student->email}}</td>
          
         <td>{{$student->id->name}}</td>
         {{-- // <td>{{$student->course->duration}}</td> --}}
		  <td>{{$student->created_at->diffForHumans()}}</td>
		  <td>{{$student->updated_at->diffForHumans()}}</td>
		@endforeach
		@endif
        </tr>
      </tbody>
    </table>
  </div>

@stop


