@extends('layouts.app')

@section('content')
    <h1>Actividades de la asignatura: {{ $asignatura->nombre }}</h1>

    <a href="{{ route('actividades.create', $asignatura->id) }}">Agregar nueva actividad evaluable</a>

    <ul>
        @foreach ($asignatura->actividadesEvaluables as $actividad)
            <li>
                {{ $actividad->tipo_actividad }} - Calificación: {{ $actividad->calificacion }} - Fecha: {{ $actividad->fecha }}
                <a href="{{ route('actividades.edit', $actividad->id) }}">Editar</a>
                <form action="{{ route('actividades.destroy', $actividad->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
