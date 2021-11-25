@extends('layouts.plantilla')
@section('title', 'Crear curso')
@section('content')
    <h1>Crear cursos</h1>

    <form action="{{ route('cursos.store') }}" method="POST">

        @csrf
        <label>
            Nombre:
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Descripcion
            <textarea id="mytextarea" name="description" rows="5"></textarea>
        </label>
        <br>
        <label>
            Categoria:
            <input type="text" name="categoria">
        </label>
        <br>



        <button type="submit">enviar fromulario </button>
    </form>
@endsection
