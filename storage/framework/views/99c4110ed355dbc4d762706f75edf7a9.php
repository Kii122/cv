

<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>
    <!-- COMPONENT: CV Header -->
    <?php echo $__env->make('cv.components.header', ['personalInfo' => $personalInfo], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="cv-grid">
        <!-- Left Column -->
        <div class="cv-left">
            <!-- COMPONENT: About Section -->
            <?php echo $__env->make('cv.components.about', ['about' => $about], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            
            <!-- COMPONENT: Education Section -->
            <?php echo $__env->make('cv.components.education', ['education' => $education], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            
            <!-- COMPONENT: Certifications Section -->
            <?php echo $__env->make('cv.components.certifications', ['certifications' => $certifications], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>

        <!-- Right Column -->
        <div class="cv-right">
            <!-- COMPONENT: Experience Section -->
            <?php echo $__env->make('cv.components.experience', ['experience' => $experience], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            
            <!-- COMPONENT: Skills Section -->
            <?php echo $__env->make('cv.components.skills', ['skills' => $skills], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            
            <!-- COMPONENT: Projects Section -->
            <?php echo $__env->make('cv.components.projects', ['projects' => $projects], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cv', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\cv_rifki\resources\views/cv/index.blade.php ENDPATH**/ ?>