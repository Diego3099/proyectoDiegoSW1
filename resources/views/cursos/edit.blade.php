@extends('layouts.plantilla')
@section('title', 'Editar Cursos')
@section('content')
    <h1>Editar</h1>

    <form action="{{ route('cursos.update', $curso) }}" method="POST">

        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="name" value="{{ $curso->name }}">
        </label>
        <br>
        <label>
            Descripcion
            <textarea name="description" rows="5">{{ $curso->description }}</textarea>
        </label>
        <br>

        <label>
            Categoria:
            <input type="text" name="categoria" value="{{ $curso->categoria }}">
        </label>

        <button type="submit">Actualizar Curso </button>
    </form>



@endsection
