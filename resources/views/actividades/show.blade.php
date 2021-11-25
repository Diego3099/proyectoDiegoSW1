@extends('layouts.plantilla')
@section('title','Actividad')
@section('content')


    <h1>Nombre del curso: {{$actividad->name}}</h1>
    <h1>Descripcion: {{$actividad->description}}</h1>

    <a href="{{route('actividades.index')}}">Ver actividades</a>
    <br>
    <a href="{{route('actividades.edit', $actividad)}}">Editar Curso</a>
    <br>
    <form action="{{route('actividades.destroy',$actividad)}}" method="POST">
   @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>


    @endsection