<?php $__env->startSection('content'); ?>
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold">Reparatierapporten</h2>

            <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('repair-reports.create')); ?>" style="background-color: #3b82f6; color: white; padding: 0.5rem 1.5rem; border-radius: 0.375rem; display: inline-block; text-decoration: none;">
                Nieuw Rapport Aanmaken
            </a>
            <?php endif; ?>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php $__currentLoopData = $repairReports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold"><?php echo e($report->model); ?></h3>
                    <p><strong>Reden van Reparatie:</strong> <?php echo e($report->repair_reason); ?></p>
                    <p><strong>Rapportdatum:</strong> <?php echo e($report->report_date); ?></p>
                    <p><strong>Geplande Reparatiedatum:</strong> <?php echo e($report->repair_date); ?></p>

                    <?php if(auth()->guard()->check()): ?>
                    <div class="mt-4 flex justify-between items-center">
                        <a href="<?php echo e(route('repair-reports.show', $report->id)); ?>" class="text-blue-500 hover:text-blue-700">Bekijken</a>
                        <a href="<?php echo e(route('repair-reports.edit', $report->id)); ?>" class="text-yellow-500 hover:text-yellow-700">Bewerken</a>
                        <form action="<?php echo e(route('repair-reports.destroy', $report->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-500 hover:text-red-700">Verwijderen</button>
                        </form>
                    </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bakkouy2005/Herd/repair/resources/views/repair_reports/index.blade.php ENDPATH**/ ?>