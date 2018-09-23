@extends('layouts.admin')

@section('content')

<h3>Course List for Admin View </h3>

@include('inc.form_responce')

<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Subject id</th>
          <th>Subject Name</th>
          <th>created </th>
          <th>updated </th>
          
        </tr>
      </thead>
      <tbody>

        @if($subjects)
          @foreach ($subjects as $subject)
          <tr>
            <td>{{$subject->subject_id}}</td>
            <td>{{$subject->name}}</td>
            <td>{{$subject->created_at->diffForHumans()}}</td>
            <td>{{$subject->updated_at->diffForHumans()}}</td>
        
          @endforeach

        @endif
      </tr>
      </tbody>
    </table>
  </div>

@stop


