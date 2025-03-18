<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
</head>
<body>
    <header>
        <h1>Gestión de Calificaciones</h1>
        <nav>
            <a href="{{ route('asignaturas.index') }}">Asignaturas</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
