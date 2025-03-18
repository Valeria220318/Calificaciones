@extends('layouts.app')

@section('content')
    <h1>Agregar nueva asignatura</h1>

    <form action="{{ route('asignaturas.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre de la asignatura:</label>
        <input type="text" name="nombre" id="nombre" required>
        <button type="submit">Guardar</button>
    </form>

    <a href="{{ route('asignaturas.index') }}">Volver a la lista</a>
@endsection
