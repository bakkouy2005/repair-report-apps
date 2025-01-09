<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Nieuw Reparatierapport Aanmaken</h2>
    <form action="<?php echo e(route('repair-reports.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bakkouy2005/Herd/repair/resources/views/repair-reports/create.blade.php ENDPATH**/ ?>