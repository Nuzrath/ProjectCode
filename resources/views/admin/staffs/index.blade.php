@extends('layouts.admin')

@section('content')

<h3>Staff List for Admin View </h3>

@include('inc.form_responce')

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
          <th>NIC No </th>
          <th>Status</th>
		      <th>appointed</th>
          
        </tr>
      </thead>
      <tbody>

     
	  
	  @if($staffs)
		  @foreach($staffs as $staff)
        <tr>
          <td>{{$staff->staff_id}}</td>
          <td>{{$staff->fname}}</td>
          <td>{{$staff->lname}}</td>
          <td>{{$staff->address .", " .$staff->country}}</td>
          <td>{{$staff->email}}</td>
          <td>{{$staff->dob}}</td>
          <td>{{$staff->contact1}}</td>
          <td>{{ $staff->nic_no ? $staff->nic_no : $staff->passport_no}}</td>
          <td>{{$staff->status = 1 ? "Active" : "Not Active"}}          </td>
		  <td>{{$staff->created_at->diffForHumans()}}</td>
		@endforeach
		@endif
        </tr>
      </tbody>
    </table>
  </div>

@stop


