<section class="cv-section">
    <h3 class="section-title">Sertifikasi</h3>
    <div class="timeline">
        <?php $__currentLoopData = $certifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="timeline-item">
            <div class="timeline-period"><?php echo e($cert['year']); ?></div>
            <h4 class="timeline-title"><?php echo e($cert['name']); ?></h4>
            <div class="timeline-subtitle"><?php echo e($cert['issuer']); ?></div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section><?php /**PATH C:\xampp\htdocs\cv_rifki\resources\views/cv/components/certifications.blade.php ENDPATH**/ ?>