@extends('layouts.app')

@section('content')
    <h1>Editar asignatura</h1>

    <form action="{{ route('asignaturas.update', $asignatura->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre de la asignatura:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $asignatura->nombre }}" required>
        <button type="submit">Actualizar</button>
    </form>

    <a href="{{ route('asignaturas.index') }}">Volver a la lista</a>
@endsection
