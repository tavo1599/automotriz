<!-- resources/views/stocks/create.blade.php -->
@extends('layout')

@section('content')
<h1>Agregar Nuevo Producto</h1>

<form action="{{ route('stocks.store') }}" method="POST">
    @csrf
    <label>Tipo:</label>
    <input type="text" name="type" required>

    <label>Nombre:</label>
    <input type="text" name="name" required>

    <label>Marca:</label>
    <input type="text" name="brand" required>

    <label>Modelo:</label>
    <input type="text" name="model" required>

    <label>Código:</label>
    <input type="text" name="code" required>

    <label>Cantidad:</label>
    <input type="number" name="quantity" required>

    <button type="submit">Guardar</button>
</form>
@endsection
