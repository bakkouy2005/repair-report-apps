<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RepairReport;

class RepairReportController extends Controller
{
    public function index()
    {
     
        $repairReports = RepairReport::all();
        return view('repair-reports.index', compact('repairReports'));
    }

    public function create()
    {

        return view('repair-reports.create');
    }

   
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'model' => 'required|string|max:255',
        'repair_reason' => 'nullable|string',
        'custom_reason' => 'nullable|string',
        'report_date' => 'required|date',
        'repair_date' => 'required|date',
    ]);

    $repairReason = $request->repair_reason === 'anders' ? $request->custom_reason : $request->repair_reason;
    $validatedData['repair_reason'] = $repairReason;

    RepairReport::create($validatedData);
    return redirect()->route('repair-reports.index')->with('success', 'Reparatierapport aangemaakt.');
}

    
    public function show(RepairReport $repairReport)
    {
        return view('repair-reports.show', compact('repairReport'));
    }


    public function edit(RepairReport $repairReport)
    {
    return view('repair-reports.edit', compact('repairReport'));
    }

    public function update(Request $request, RepairReport $repairReport)
{
    $validatedData = $request->validate([
        'model' => 'required|string|max:255',
        'repair_reason' => 'nullable|string',
        'custom_reason' => 'nullable|string',
        'report_date' => 'required|date',
        'repair_date' => 'required|date',
    ]);

    $repairReason = $request->repair_reason === 'anders' ? $request->custom_reason : $request->repair_reason;
    $validatedData['repair_reason'] = $repairReason;

    $repairReport->update($validatedData);
    return redirect()->route('repair-reports.index')->with('success', 'Reparatierapport bijgewerkt.');
}

    
    public function destroy(RepairReport $repairReport)
{
    $repairReport->delete();
    return redirect()->route('repair-reports.index')->with('success', 'Rapport verwijderd!');
}

}
