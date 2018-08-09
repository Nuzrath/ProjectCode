<h1> student Index to show pivot table </h1>

@foreach ($subjects as $subject)
    {{ $subject->pivot->subject_id }}
    {{ $subject->pivot->course_id }}
@endforeach