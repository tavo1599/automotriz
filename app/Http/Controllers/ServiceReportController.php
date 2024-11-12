<?php

namespace App\Http\Controllers;

use App\Models\ServiceReport;
use App\Models\Client;
use Illuminate\Http\Request;

class ServiceReportController extends Controller
{
    public function index()
    {
        $reports = ServiceReport::with('client')->get();
        return view('reports.index', compact('reports'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('reports.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'service_type' => 'required',
            'description' => 'required',
            'amount' => 'required|numeric',
        ]);

        ServiceReport::create($request->all());
        return redirect()->route('reports.index');
    }

    public function edit(ServiceReport $report)
    {
        $clients = Client::all();
        return view('reports.edit', compact('report', 'clients'));
    }

    public function update(Request $request, ServiceReport $report)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'service_type' => 'required',
            'description' => 'required',
            'amount' => 'required|numeric',
        ]);

        $report->update($request->all());
        return redirect()->route('reports.index');
    }

    public function destroy(ServiceReport $report)
    {
        $report->delete();
        return redirect()->route('reports.index');
    }
}
