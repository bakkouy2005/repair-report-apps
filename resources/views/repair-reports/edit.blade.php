@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reparatierapport Bewerken</h2>
    <form action="{{ route('repair-reports.update', $repairReport->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Model</label>
        <input type="text" name="model" value="{{ old('model', $repairReport->model) }}" required>

        <label>Reden van Reparatie</label>
        <select name="repair_reason" id="repair_reason" onchange="showCustomInput()">
            <option value="gebroken glas" {{ $repairReport->repair_reason === 'gebroken glas' ? 'selected' : '' }}>Gebroken Glas</option>
            <option value="defecte wijzer" {{ $repairReport->repair_reason === 'defecte wijzer' ? 'selected' : '' }}>Defecte Wijzer</option>
            <option value="batterij leeg" {{ $repairReport->repair_reason === 'batterij leeg' ? 'selected' : '' }}>Batterij Leeg</option>
            <option value="anders" {{ !in_array($repairReport->repair_reason, ['gebroken glas', 'defecte wijzer', 'batterij leeg']) ? 'selected' : '' }}>Iets Anders...</option>
        </select>
        <input type="text" name="custom_reason" id="custom_reason" value="{{ !in_array($repairReport->repair_reason, ['gebroken glas', 'defecte wijzer', 'batterij leeg']) ? $repairReport->repair_reason : '' }}" placeholder="Geef een andere reden" style="display: none;">

        <label>Datum van Rapport</label>
        <input type="date" name="report_date" value="{{ old('report_date', $repairReport->report_date) }}" required>

        <label>Geplande Reparatiedatum</label>
        <input type="date" name="repair_date" value="{{ old('repair_date', $repairReport->repair_date) }}" required>

        <button type="submit">Bijwerken</button>
    </form>
</div>

<script>
    function showCustomInput() {
        const customReason = document.getElementById('custom_reason');
        const reasonSelect = document.getElementById('repair_reason').value;
        customReason.style.display = reasonSelect === 'anders' ? 'block' : 'none';
    }
    // Toon direct custom input als nodig
    showCustomInput();
</script>
@endsection