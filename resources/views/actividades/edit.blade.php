@extends('layouts.app')

@section('content')
    <h1>Editar actividad evaluable</h1>

    <form action="{{ route('actividades.update', $actividad->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="tipo_actividad">Tipo de actividad:</label>
        <input type="text" name="tipo_actividad" id="tipo_actividad" value="{{ $actividad->tipo_actividad }}" required>

        <label for="calificacion">Calificación:</label>
        <input type="number" name="calificacion" id="calificacion" value="{{ $actividad->calificacion }}" required>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" value="{{ $actividad->fecha }}" required>

        <button type="submit">Actualizar actividad</button>
    </form>

    <a href="{{ route('asignaturas.index') }}">Volver a la lista de asignaturas</a>
@endsection
