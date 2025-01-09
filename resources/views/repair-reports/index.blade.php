@extends('layouts.app')

@section('content')
<div class="mb-3">
    <a href="{{ route('repair-reports.create') }}" class="btn btn-primary">
        Nieuw Reparatierapport Aanmaken
    </a>
</div>

<div class="report-gallery">
    @foreach ($repairReports as $report)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $report->model }}</h5>
            <p class="card-text"><strong>Reden van Reparatie:</strong> {{ $report->repair_reason }}</p>
            <p class="card-text"><strong>Rapportdatum:</strong> {{ $report->report_date }}</p>
            <p class="card-text"><strong>Geplande Reparatiedatum:</strong> {{ $report->repair_date }}</p>
            <a href="{{ route('repair-reports.edit', $report->id) }}" class="btn btn-warning">Bewerken</a>
            <form action="{{ route('repair-reports.destroy', $report->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Verwijderen</button>
            </form>
        </div>
    </div>
    @endforeach
</div>

@endsection
