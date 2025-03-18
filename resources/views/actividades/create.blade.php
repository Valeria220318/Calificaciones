@extends('layouts.app')

@section('content')
    <h1>Agregar nueva actividad evaluable a la asignatura: {{ $asignatura->nombre }}</h1>

    <form action="{{ route('actividades.store', $asignatura->id) }}" method="POST">
        @csrf
        <label for="tipo_actividad">Tipo de actividad:</label>
        <input type="text" name="tipo_actividad" id="tipo_actividad" required>

        <label for="calificacion">Calificación:</label>
        <input type="number" name="calificacion" id="calificacion" required>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" required>

        <button type="submit">Guardar actividad</button>
    </form>

    <a href="{{ route('asignaturas.index') }}">Volver a la lista de asignaturas</a>
@endsection
