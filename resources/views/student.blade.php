@extends('layouts.app')

@section('content')
    <ul>
        @foreach($students as $student)
            <li>{{ $student->last_name }} {{ $student->first_name }}: {{$student->speciality}} - {{ $student->course_number }}</li>
        @endforeach
    </ul>
@endsection
