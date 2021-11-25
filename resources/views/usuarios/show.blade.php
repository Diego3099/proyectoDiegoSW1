@extends('layouts.plantilla')
@section('title','Usuario')
@section('content')


    <h3>Nombre del usuario: {{$usuario->name}}</h3>
    <h3>Apellido del usuario: {{$usuario->last_name}}</h3>
    <h3>Email usuario: {{$usuario->email}}</h3>
    <h3>No.Identificacion: {{$usuario->identificacion}}</h3>
    <h3>Rol o cargo: {{$usuario->rol}}</h3>
   

    <a href="{{route('usuarios.index')}}">Ver usuarios</a>
    <br>
    <a href="{{route('usuarios.edit', $usuario)}}">Editar usuario</a>
    <br>
    <form action="{{route('usuarios.destroy',$usuario)}}" method="POST">
   @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>


    @endsection