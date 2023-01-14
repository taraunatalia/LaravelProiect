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
    <div class="panel-heading" align="center"> Modificare informatii Produs</div>
    <div class="panel-body">
    <!--exista inregistrari in tabelul task -->
    @if (count($errors) > 0)
    <div class="alert alert-danger">
    <strong>Eroare:</strong>
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif
    <!--populez campurile formularului cu datele aferente din tabela task -->

    {!! Form::model($task, ['method' => 'PATCH','route' =>
    ['tasks.update', $task->id]]) !!}
    <div class="form-group">
        <strong for="name">Nume</strong>
        <input type="text" name="name" class="form-control" value="{{$task->name }}">
    </div>
    <div class="form-group">
        <strong for="description">Descriere</strong>
        <textarea name="description" class="form-control" rows="3">{{ $task->description }}</textarea>
    </div>
    <div class="form-group">
        <strong for="price">Pret</strong>
        <input type="number" step="0.01" name="price" class="form-control" rows="3" value="{{ $task->price }}"></input>
    </div>
    <div class="form-group">
        <strong for="image">Img Path</strong>
        <input type="text" name="image" class="form-control" rows="3" value="{{ $task->image }}"></input>
    </div>
    <p>
    <div class="form-group">
        <input type="submit" value="Salvare Modificari" class="btn btn-info">
        <a href="{{route('tasks.index') }}" class="btn btndefault">Cancel</a>
    </div>
    {!! Form::close() !!}
    </div>
    </div>
    </body>
    </html>
@endsection