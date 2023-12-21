@extends('layouts.app')

@section('content')
    <div>
        <html>

        <head>
            <title>Todos</title>
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>

        <body>
            <div class="container">
                <h1 class="text-center my-5">TODOS PAGE</h1>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card card-default">
                            <div class="card-header" style="display: flex; justify-content: space-between">
                                Todos
                                <a href="/new-todos" class="btn btn-success btn-sm float-right">ADD</a>
                            </div>

                            <div class="card-body">
                                <ul class="list-group">
                                    @foreach ($todos as $todo)
                                        <li class="list-group-item">
                                            {{ $todo->name }}
                                            @if (!$todo->completed)
                                                <a href="/todos/{{ $todo->id }}/complete" style="color: white;"
                                                    class="btn btn-warning btn-sm float-right">Complete</a>
                                            @endif
                                            @if ($todo->completed)
                                                <a href="" style="color: white;"
                                                    class="btn btn-success btn-sm float-right">Completed</a>
                                                <a href="/todos/{{ $todo->id }}/again" style="color: white;"
                                                    class="btn btn-info btn-sm float-right">Start again</a>
                                            @endif
                                            <a href="/todos/{{ $todo->id }}"
                                                class="btn btn-primary btn-sm float-right mr-2">Details</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>

        </html>
    </div>
@endsection
