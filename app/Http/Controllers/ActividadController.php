<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function index()
    {
        $actividades = Actividad::paginate();
        return view('actividades.index', compact('actividades'));
    }

    public function create()
    {
        return view('actividades.create');
    }
    public function show($id)
    {
        $actividad = Actividad::find($id);
        return view('actividades.show', compact('actividad'));
    }
    public function store(Request $request)
    {
        $actividad = new Actividad();
        $actividad->name = $request->name;
        $actividad->description = $request->description;
        $actividad->save();
        return redirect()->route('actividades.show', $actividad);
    }

    public function edit(Actividad $actividad)
    {
        return view('actividades.edit', compact('actividad'));
    }

    public function update(Request $request, Actividad $actividad)
    {
        $actividad->name = $request->name;
        $actividad->description = $request->description;

        $actividad->save();
        return redirect()->route('actividades.show', $actividad);
    }
    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return redirect()->route('actividades.index');
    }
}
