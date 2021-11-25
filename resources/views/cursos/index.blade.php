@extends('layouts.plantilla')
@section('title', 'Cursos')
@section('content')
    <h1>Cursos</h1>
    <a href="cursos/create">Crear cursos</a>
    <ul>
        @foreach ($cursos as $curso)


            <li>

                <a href="cursos/{{ $curso->id }}">{{ $curso->name }}</a>

            </li>
        @endforeach
    </ul>

    {{ $cursos->links() }}

@endsection
