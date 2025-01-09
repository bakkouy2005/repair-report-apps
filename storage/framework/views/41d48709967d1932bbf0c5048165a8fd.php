<?php $__env->startSection('content'); ?>
<div class="mb-3">
    <a href="<?php echo e(route('repair-reports.create')); ?>" class="btn btn-primary">
        Nieuw Reparatierapport Aanmaken
    </a>
</div>

<div class="report-gallery">
    <?php $__currentLoopData = $repairReports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo e($report->model); ?></h5>
            <p class="card-text"><strong>Reden van Reparatie:</strong> <?php echo e($report->repair_reason); ?></p>
            <p class="card-text"><strong>Rapportdatum:</strong> <?php echo e($report->report_date); ?></p>
            <p class="card-text"><strong>Geplande Reparatiedatum:</strong> <?php echo e($report->repair_date); ?></p>
            <a href="<?php echo e(route('repair-reports.edit', $report->id)); ?>" class="btn btn-warning">Bewerken</a>
            <form action="<?php echo e(route('repair-reports.destroy', $report->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Verwijderen</button>
            </form>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bakkouy2005/Herd/repair/resources/views/repair-reports/index.blade.php ENDPATH**/ ?>