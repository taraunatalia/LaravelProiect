@extends('layouts.app')
@section('content')

<html>
    <head>
 <title>Laravel Add To Cart Function - ItSolutionStuff.com</title>
 <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/fontawesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <div class="panel panel-default">
        <div class="panel-heading"> View Task </div>
            <div class="panel-body">
                <div class="pull-right">
                    <a class="btn btn-default" href="{{ route('tasks.index') }}">Inapoi</a>
                </div>
            <div class="form-group">
                <strong>Nume: </strong> {{ $task->name }}
            </div>

            <div class="form-group">
                <strong>Descriere: </strong> {{ $task->description }}
            </div>
        </div>
    </div>

</body>
</html>

@endsection