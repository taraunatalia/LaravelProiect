@extends('layouts.app')

@section('content')

@if(Auth::user()->is_admin)
        <div align="center">
            <a href="{{ route('tasks.index') }}">Admin Options</a>
        </div>
    @endif 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 <div class="card-header">{{ __('Dashboard') }}</div>
                <a href="register"><i class="fas fa-usercircle"></i>Login</a>
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
