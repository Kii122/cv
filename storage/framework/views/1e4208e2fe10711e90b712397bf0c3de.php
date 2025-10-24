<section class="cv-section">
    <h3 class="section-title">Keterampilan</h3>
    
    <h4 style="color: var(--primary); margin-bottom: 1rem;">Teknis</h4>
    <?php $__currentLoopData = $skills['technical']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="skill-item">
        <div class="skill-name">
            <span><?php echo e($skill['name']); ?></span>
            <span><?php echo e($skill['level']); ?>%</span>
        </div>
        <div class="skill-bar">
            <div class="skill-level" style="width: <?php echo e($skill['level']); ?>%"></div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <h4 style="color: var(--primary); margin: 2rem 0 1rem 0;">Profesional</h4>
    <?php $__currentLoopData = $skills['professional']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="skill-item">
        <div class="skill-name">
            <span><?php echo e($skill['name']); ?></span>
            <span><?php echo e($skill['level']); ?>%</span>
        </div>
        <div class="skill-bar">
            <div class="skill-level" style="width: <?php echo e($skill['level']); ?>%"></div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section><?php /**PATH C:\xampp\htdocs\cv_rifki\resources\views/cv/components/skills.blade.php ENDPATH**/ ?>