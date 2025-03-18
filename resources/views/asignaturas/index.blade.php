@extends('layouts.app')

@section('content')
    <h1>Asignaturas</h1>
    <a href="{{ route('asignaturas.create') }}">Agregar nueva asignatura</a>

    <ul>
        @foreach ($asignaturas as $asignatura)
            <li>
                {{ $asignatura->nombre }}
                <a href="{{ route('asignaturas.edit', $asignatura->id) }}">Editar</a>
                <form action="{{ route('asignaturas.destroy', $asignatura->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
                <a href="{{ route('actividades.create', $asignatura->id) }}">Agregar actividad</a>
            </li>
        @endforeach
    </ul>
@endsection
