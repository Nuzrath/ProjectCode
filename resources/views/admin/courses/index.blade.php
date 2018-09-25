@extends('layouts.admin')

@section('content')

<h3>Course List for Admin View </h3>

@include('inc.form_responce')

<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Course id</th>
          <th>Course Name</th>
          <th>Duration </th>
          <th>Course Fee </th>
          <th>created </th>
          <th>updated </th>
          
        </tr>
      </thead>
      <tbody>

        @if($courses)
          @foreach ($courses as $course)
          <tr>
            <td>{{$course->id}}</td>
            <td><a href="{{ route('course.edit', $course->id )}}">{{$course->name}}</a></td>
            <td>{{$course->duration}}</td>
            <td>{{$course->course_fee}}</td>
            <td>{{$course->created_at->diffForHumans()}}</td>
            <td>{{$course->updated_at->diffForHumans()}}</td>
        
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


