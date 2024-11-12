<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automotriz Cisne</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h5>Automotriz Cisne</h5>
            <nav>
                <a href="{{ route('dashboard') }}">Home</a>
                <a href="#mantenimientos_fecha">Mantenimientos_fecha</a>
                <a href="{{ route('stocks.index') }}">Stock</a>
                <a href="#clientes_info">Clientes_info</a>
                <a href="#reporte_servicios">Reporte_servicios</a>
            </nav>
            <div class="logo">
                <img src="{{ asset('images/logo_chevrolet.png') }}" alt="Cisne Chevrolet">
                <p>COMPRA LLAMA</p>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->

            <!-- Content -->
            <div class="content-logo">
                {{-- <img src="{{ asset('images/chevrolet_logo.png') }}" alt="Logo Chevrolet"> --}}
            </div>
        </main>
    </div>
</body>
</html>
