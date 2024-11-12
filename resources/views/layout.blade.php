<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automotriz Cisne</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('clients.sidebar')

    <div class="main-content">
        @yield('content')
    </div>
</body>
</html>
