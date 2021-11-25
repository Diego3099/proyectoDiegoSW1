@extends('layouts.plantilla')
@section('title', 'Editar usuario')
@section('content')
    <h1>Editar usuario</h1>

    <form action="{{ route('usuarios.update', $usuario) }}" method="POST">

        @csrf
        @method('put')

        <label>
            No.Identificacion:
            <input type="text" name="identificacion" value="{{ $usuario->identificacion }}">
        </label>
        <br>
        <label>
            Nombre:
            <input type="text" name="name" value="{{ $usuario->name }}">
        </label>
        <br>
        <label>
            Apellido:
            <input type="text" name="last_name" value="{{ $usuario->last_name }}">
        </label>
        <br>
        <label>
            Email:
            <input type="email" name="email" value="{{ $usuario->email }}">
        </label>
        <br>
        <label>
            Rol o cargo:
            <input type="text" name="rol" value="{{ $usuario->rol }}">
        </label>
        <br>
        <label>
            Contraseña:
            <input type="password" name="password" value="{{ $usuario->password }}">
        </label>
        <br>
        <br>
        <button type="submit">Modificar Usuario </button>
    </form>



@endsection
