@extends('layouts.plantilla')
@section('title','Curso')
@section('content')


    <h1>Nombre del curso: {{$curso->name}}</h1>
    <h1>Apellido del curso: {{$curso->last_description}}</h1>
    <h1>Email curso: {{$curso->categoria}}</h1>
    
   

    <a href="{{route('cursos.index')}}">Ver cursos</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar curso</a>
    <br>
    <form action="{{route('cursos.destroy',$curso)}}" method="POST">
   @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>


    @endsection