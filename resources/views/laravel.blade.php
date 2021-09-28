@extends('layouts.app')

@section('content')
    <ul>
        @foreach($data as $datum)
            <li>{{ $datum }}</li>
        @endforeach
    </ul>
@endsection
