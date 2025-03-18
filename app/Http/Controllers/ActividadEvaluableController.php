<?php

namespace App\Http\Controllers;

use App\Models\ActividadEvaluable;
use App\Models\Asignatura;
use Illuminate\Http\Request;

class ActividadEvaluableController extends Controller
{
    public function create($asignaturaId)
    {
        $asignatura = Asignatura::findOrFail($asignaturaId);
        return view('actividades.create', compact('asignatura'));
    }

    public function store(Request $request, $asignaturaId)
    {
        $request->validate([
            'tipo_actividad' => 'required',
            'calificacion' => 'required|numeric',
            'fecha' => 'required|date',
        ]);

        ActividadEvaluable::create([
            'asignatura_id' => $asignaturaId,
            'tipo_actividad' => $request->tipo_actividad,
            'calificacion' => $request->calificacion,
            'fecha' => $request->fecha,
        ]);

        return redirect()->route('asignaturas.show', $asignaturaId);
    }

    public function edit($id)
    {
        $actividad = ActividadEvaluable::findOrFail($id);
        return view('actividades.edit', compact('actividad'));
    }

    public function update(Request $request, $id)
    {
        $actividad = ActividadEvaluable::findOrFail($id);

        $request->validate([
            'tipo_actividad' => 'required',
            'calificacion' => 'required|numeric',
            'fecha' => 'required|date',
        ]);

        $actividad->update($request->all());

        return redirect()->route('asignaturas.show', $actividad->asignatura_id);
    }

    public function destroy($id)
    {
        $actividad = ActividadEvaluable::findOrFail($id);
        $actividad->delete();

        return redirect()->route('asignaturas.show', $actividad->asignatura_id);
    }
}

