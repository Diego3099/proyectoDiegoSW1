@extends('layouts.plantilla')
@section('title','Actividades')
@section('content')
<h1>Actividades</h1>
<a href="actividades/create">Crear actividad</a>
<ul>
    @foreach ($actividades as $actividad)
    
    
    <li>

    <a href="actividades/{{$actividad->id}}">{{$actividad->name}}</a>

    </li>
    @endforeach
</ul>

{{$actividades->links()}}

@endsection