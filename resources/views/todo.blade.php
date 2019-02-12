@extends('layout')

@section('todo')
    <p><u>{{ $todo->title }}</u></p>
    <p><strong>{{ $todo->status }}</strong></p>
    <p>{{ $todo->date }}</p>
    <p>{{ $todo->body }}</p>
@endsection
