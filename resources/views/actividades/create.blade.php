@extends('layouts.plantilla')
@section('title', 'Create')
@section('content')
    <h1>Create</h1>

    <form action="{{ route('actividades.store') }}" method="POST">

        @csrf


        <label>
            Nombre:
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Descripcion
            <textarea name="description" rows="5"></textarea>
        </label>
        <br>
        <button type="submit">Crear actividad </button>
    </form>



@endsection
