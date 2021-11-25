@extends('layouts.plantilla')
@section('title', 'Crear curso')
@section('content')
    <h1>Login</h1>


    <form action="login" method="POST">
       @csrf
        <label></label>
        <input type="email" placeholder="Email">
        </label>
        <br>
        <label>
            <input type="password" placeholder="Contraseña">
        </label>
        <button type="submit">Login</button>
    </form>
@endsection
