@extends('layouts.plantilla')
@section('title', 'Editar actividad')
@section('content')
    <h1>Editar</h1>

    <form action="{{ route('actividades.update', $actividad) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <input type="text" name="name" value="{{ $actividad->name }}">
        </label>
        <br>
        <label>
            Descripcion
            <textarea name="description" rows="5">{{ $actividad->description }}</textarea>
        </label>
        <br>
        <button type="submit">Actualizar Actividad </button>
    </form>



@endsection
