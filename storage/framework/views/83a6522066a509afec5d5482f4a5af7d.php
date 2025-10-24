<section class="cv-section">
    <h3 class="section-title">Proyek</h3>
    <div class="project-grid">
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="project-card">
            <h4 class="project-name"><?php echo e($project['name']); ?></h4>
            <p><?php echo e($project['description']); ?></p>
            <div class="project-tech">
                <?php $__currentLoopData = $project['technologies']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span class="tech-tag"><?php echo e($tech); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section><?php /**PATH C:\xampp\htdocs\cv_rifki\resources\views/cv/components/projects.blade.php ENDPATH**/ ?>