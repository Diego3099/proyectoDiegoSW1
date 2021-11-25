<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::paginate();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }
    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.show', compact('usuario'));
    }
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->identificacion = $request->identificacion;
        $usuario->name = $request->name;
        $usuario->last_name = $request->last_name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->rol = $request->rol;
        $usuario->save();
        return redirect()->route('usuarios.show', $usuario);
    }

    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, Usuario $usuario)
    {
        $usuario->identificacion = $request->identificacion;
        $usuario->name = $request->name;
        $usuario->last_name = $request->last_name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->rol = $request->rol;

        $usuario->save();
        return redirect()->route('usuarios.show', $usuario);
    }
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
