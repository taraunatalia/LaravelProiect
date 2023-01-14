@extends('layouts.app')
@section('content')
@if(Auth::user()->is_admin)
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{ $message }}</p>
        </div>
    @endif

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
    <div class="panel-heading" align="center"> <strong> Lista produselor </strong> </div>
    <div class="panel-body">
    <div class="form-group">
    <div align="center">
        <a href="/tasks/create" class="btn btn-default">Adaugare Produs Nou</a>
    </div>
    </div>
    <table class="table table-bordered table-stripped">
        <tr>
        <th width="20">ID</th>
            <th>Nume</th>
            <th>Descriere</th>
            <th>Pret</th>
            <th width="300">Actiune</th>
        </tr>
    @if (count($tasks) > 0)
        @foreach ($tasks as $key => $task)

        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $task->name }}</td>
            <td>{{ $task->description }}</td>
            <td>{{ $task->price }} RON</td>
            <td>
               <!-- <a class="btn btn-success" href="{{ route('tasks.show',$task->id) }}">Vizualizare</a> -->
                <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Modificare</a>
                <button class="btn btn-success">
                    {{ Form::open(['method' => 'DELETE','route' =>
                    ['tasks.destroy', $task->id],'style'=>'display:inline']) }}
                    {{ Form::submit('Delete', ['class' => 'btn btndanger']) }}
                    {{ Form::close() }}
                </button>
            </td>
        </tr>
        @endforeach
    @else
        <tr> <td colspan="4">Nu exista produse!</td> </tr>
    @endif
    </table>
    <!-- Introduce nr pagina -->
    {{$tasks->render()}}
    </div>
    </div>
                    </body>
                    </html>
    @endsection

@else
 <h1 align="center" >Nu aveti drepturi</h1>

@endif