<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automotriz Cisne - Home</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('clients.sidebar')


    <main class="main-content">
        

        <div class="content-logo">
            <img src="{{ asset('images/chevrolet_logo.png') }}" alt="Logo Chevrolet">
        </div>
    </main>
</body>
</html>
