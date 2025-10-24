<section class="cv-section">
    <h3 class="section-title">Pengalaman</h3>
    <div class="timeline">
        <?php $__currentLoopData = $experience; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="timeline-item">
            <div class="timeline-period"><?php echo e($exp['period']); ?></div>
            <h4 class="timeline-title"><?php echo e($exp['position']); ?></h4>
            <div class="timeline-subtitle"><?php echo e($exp['company']); ?></div>
            <p><?php echo e($exp['description']); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section><?php /**PATH C:\xampp\htdocs\cv_rifki\resources\views/cv/components/experience.blade.php ENDPATH**/ ?>