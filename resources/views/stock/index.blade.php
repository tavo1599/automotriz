<!-- resources/views/stocks/index.blade.php -->
@extends('layout')

@section('content')
<h1>Stock de Productos</h1>
<a href="{{ route('stocks.create') }}">Agregar Nuevo Producto</a>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Código</th>
            <th>Cantidad</th>
            <th>Acciones</th>
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
                <td>
                    <a href="{{ route('stocks.edit', $stock->id) }}">Editar</a>
                    <form action="{{ route('stocks.destroy', $stock->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
