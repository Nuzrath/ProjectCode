@extends('layouts.admin')

@section('content')

<h3>Staff List for Admin View </h3>

@include('inc.form_responce')

<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>Full name</th>
		      <th>Address</th>
          
		<th>Email</th>
          <th>Date of Birth</th>
          <th>Contact No</th>
          <th>NIC No </th>
          <th>Gender </th>
          <th>Status</th>
        <th>appointed</th>
        <th>Updated </th>
          
        </tr>
      </thead>
      <tbody>

     
	  
	  @if($staffs)
		  @foreach($staffs as $staff)
        <tr>
          <td>{{$staff->staff_id}}</td>
          <td><a href="{{ route('staff.edit', $staff->staff_id)}}">{{$staff->fname . " " .$staff->lname}}</a></td>
          <td>{{$staff->address .", " .$staff->country}}</td>
          <td>{{$staff->email}}</td>
          <td>{{$staff->dob}}</td>
          <td>{{$staff->contact1}}</td>
          <td>{{ $staff->nic_no ? $staff->nic_no : $staff->passport_no}}</td>
          <td>{{$staff->gender}}</td>
          <td>{{$staff->status = 1 ? "Active" : "Not Active"}}          </td>
          <td>{{$staff->created_at->format('d/m/y')}}</td>
          <td>{{$staff->updated_at->diffForHumans()}}</td>
          <td>{{$staff->role->name}}</td>
		@endforeach
		@endif
        </tr>
      </tbody>
    </table>
  </div>

@stop


