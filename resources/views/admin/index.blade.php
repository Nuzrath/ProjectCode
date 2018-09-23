@extends('layouts.admin')

@section('content')

<h3>Admin Dashboard for User</h3>

@include('inc.form_responce')

<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>user id</th>
          <th>User Name</th>
          <th>password </th>
          <th>role </th>
          <th>created </th>
          <th>updated </th>
          
        </tr>
      </thead>
      <tbody>

        @if($users)
          @foreach ($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
        
          @endforeach

        @endif
      </tr>
     {{-- /*
	  @if($staffs)
		  @foreach($staffs as $staff)
        <tr>
          <td>{{$staff->staff_id}}</td>
          <td>{{$staff->fname}}</td>
          
		  <td>{{$staff->created_at->diffForHumans()}}</td>
		@endforeach
		@endif
        </tr>*/ --}}
      </tbody>
    </table>
  </div>

@stop


