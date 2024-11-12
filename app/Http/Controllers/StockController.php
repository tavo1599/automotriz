<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();
        return view('clients.stock', compact('stocks')); // Asegúrate de que la vista esté en 'clients.stock'
    }

    public function create()
    {
        return view('stocks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'code' => 'required',
            'quantity' => 'required|integer'
        ]);

        Stock::create($request->all());
        return redirect()->route('stocks.index');
    }

    public function edit(Stock $stock)
    {
        return view('stocks.edit', compact('stock'));
    }

    public function update(Request $request, Stock $stock)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'code' => 'required',
            'quantity' => 'required|integer'
        ]);

        $stock->update($request->all());
        return redirect()->route('stocks.index');
    }

    public function destroy(Stock $stock)
    {
        $stock->delete();
        return redirect()->route('stocks.index');
    }
}
