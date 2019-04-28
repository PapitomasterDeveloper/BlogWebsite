@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To Laravel</h1>
        <p>This is a Laravel App</p>
        <p>
            <a class="btn btn-primary btn-lg" href="/login" rol="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" rol="button">Register</a>
        </p>
    </div>
@endsection
