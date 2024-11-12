<!-- resources/views/stocks/edit.blade.php -->
@extends('layout')

@section('content')
<h1>Editar Producto</h1>

<form action="{{ route('stocks.update', $stock->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Tipo:</label>
    <input type="text" name="type" value="{{ $stock->type }}" required>

    <label>Nombre:</label>
    <input type="text" name="name" value="{{ $stock->name }}" required>

    <label>Marca:</label>
    <input type="text" name="brand" value="{{ $stock->brand }}" required>

    <label>Modelo:</label>
    <input type="text" name="model" value="{{ $stock->model }}" required>

    <label>Código:</label>
    <input type="text" name="code" value="{{ $stock->code }}" required>

    <label>Cantidad:</label>
    <input type="number" name="quantity" value="{{ $stock->quantity }}" required>

    <button type="submit">Actualizar</button>
</form>
@endsection
