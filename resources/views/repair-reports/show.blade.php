@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reparatierapport - {{ $repairReport->model }}</h2>
    <div>
        <p><strong>Model:</strong> {{ $repairReport->model }}</p>
        <p><strong>Reden van Reparatie:</strong> {{ $repairReport->repair_reason }}</p>
        <p><strong>Rapportdatum:</strong> {{ $repairReport->report_date }}</p>
        <p><strong>Geplande Reparatiedatum:</strong> {{ $repairReport->repair_date }}</p>
    </div>
    <a href="{{ route('repair-reports.index') }}" class="btn btn-secondary">Terug naar Overzicht</a>
</div>
@endsection
