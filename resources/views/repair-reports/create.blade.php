@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Nieuw Reparatierapport Aanmaken</h2>
    <form action="{{ route('repair-reports.store') }}" method="POST">
        @csrf
        <label>Model</label>
        <input type="text" name="model" required>
        
        <label>Reden van Reparatie</label>
        <select id="repair_reason" name="repair_reason" onchange="toggleCustomReason()">
            <option value="gebroken glas">Gebroken Glas</option>
            <option value="defecte wijzer">Defecte Wijzer</option>
            <option value="batterij leeg">Batterij Leeg</option>
            <option value="custom">Iets Anders...</option>
            
        </select>
        <input type="text" id="custom_reason" name="custom_reason" style="display: none;" placeholder="Beschrijf het probleem">
        
        <label>Datum van Rapport</label>
        <input type="date" name="report_date" required>
        
        <label>Geplande Reparatiedatum</label>
        <input type="date" name="repair_date" required>

        <button type="submit">Opslaan</button>
    </form>
</div>

<script>
    function toggleCustomReason() {
        const reasonSelect = document.getElementById('repair_reason');
        const customReasonInput = document.getElementById('custom_reason');
        customReasonInput.style.display = reasonSelect.value === 'custom' ? 'block' : 'none';
    }
</script>
@endsection
