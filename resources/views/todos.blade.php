<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todos</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .todos {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-top: 100px;
            border-collapse: collapse;
        }

        .todos tr {
            width: 50px;
            height: 50px;
            text-transform: uppercase;
            text-align: center;
        }

        .todos tr td {
            border: 2px solid cornflowerblue;
        }
    </style>
</head>
<body>
<div>
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                    @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Todos
        </div>

        <div class="links">
            <a href=".">Home</a>
            <a href=".">Add Todo</a>
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
</body>
</html>
