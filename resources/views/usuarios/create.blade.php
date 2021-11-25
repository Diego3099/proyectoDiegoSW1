@extends('layouts.plantilla')
@section('title', 'Crear usuario')
@section('content')
    <h1>Crear usuarios</h1>

    <form action="{{ route('usuarios.store') }}" method="POST">

        @csrf
      
        <label>
            No.Identificacion :
            <input type="text" name="identificacion">
        </label>
        <br>
        <label>
            Nombre :
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Apellido :
            <input type="text" name="last_name">
        </label>
        <br>
        <label>
            Email : 
            <input type="email" name="email">
        </label>
        <br>
        <label>
            Rol o cargo:
            <input type="text" name="rol">
        </label>
        <br>
        <label>
            Contraseña:
            <input type="password" name="password">
        </label>
        <br>
        
        <button type="submit">Crear usuario </button>
    </form>
@endsection


