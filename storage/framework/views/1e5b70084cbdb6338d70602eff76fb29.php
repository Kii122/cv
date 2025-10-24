<section class="cv-section">
    <h3 class="section-title">Pendidikan</h3>
    <div class="timeline">
        <?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="timeline-item">
            <div class="timeline-period"><?php echo e($edu['period']); ?></div>
            <h4 class="timeline-title"><?php echo e($edu['degree']); ?></h4>
            <div class="timeline-subtitle"><?php echo e($edu['institution']); ?></div>
            <p><?php echo e($edu['description']); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section><?php /**PATH C:\xampp\htdocs\cv_rifki\resources\views/cv/components/education.blade.php ENDPATH**/ ?>