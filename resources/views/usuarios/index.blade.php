@extends('layouts.plantilla')
@section('title', 'Usuarios')
@section('content')
    <h1>Usuarios registrados</h1>
    <a href="usuarios/create">Crear usuarios</a>
    <ul>
        @foreach ($usuarios as $usuario)


            <li>

                <a href="usuarios/{{ $usuario->id }}">{{ $usuario->name }}</a>

            </li>
        @endforeach
    </ul>

    {{ $usuarios->links() }}

@endsection
