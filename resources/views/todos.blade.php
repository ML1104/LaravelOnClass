@extends('layout')

@section('todos')
    <div>
        <div class="todoHeader">
            <div class="title m-b-md">
                Todos
            </div>

            <div class="links">
                <a href=".">Home</a>
                <a href="todo/create">Add Todo</a>
            </div>
        </div>

        @php
            $todos = \App\Todos::all();
        @endphp

        {{--don't do this^^--}}



        <table class="todos">
            @foreach($todos as $todo)
                <tr class="todo">
                    <td>{{str_limit($todo->date, 10)}}</td>
                    <td>{{str_limit($todo->status, 10)}}</td>
                    <td>{{str_limit($todo->title, 10)}}</td>
                    <td>{{str_limit($todo->body, 50)}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
