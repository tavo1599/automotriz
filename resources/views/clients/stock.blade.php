<!-- resources/views/clients/stock.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock de Productos</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        @include('clients.dashboard')

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->


            <!-- Tabla de Stock -->
            <div class="content">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tipo</th>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Código</th>
                            <th>Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stocks as $stock)
                            <tr>
                                <td>{{ $stock->id }}</td>
                                <td>{{ $stock->type }}</td>
                                <td>{{ $stock->name }}</td>
                                <td>{{ $stock->brand }}</td>
                                <td>{{ $stock->model }}</td>
                                <td>{{ $stock->code }}</td>
                                <td>{{ $stock->quantity }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
