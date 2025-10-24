<header class="cv-header">
    <div class="profile-container">
        <!-- Foto Profil Lingkaran -->
        <img 
            src="/images/Foto.jpg" 
            alt="Foto Rifki Alfaris" 
            class="profile-photo"
        >
        
        <div class="profile-info">
            <!-- Nama saja, tanpa title -->
            <h1 class="cv-name"><?php echo e($personalInfo['name']); ?></h1>
            
            <!-- Informasi Kontak -->
            <div class="contact-info">
                <div class="contact-item">
                    <span>📧</span>
                    <span><?php echo e($personalInfo['email']); ?></span>
                </div>
                <div class="contact-item">
                    <span>📱</span>
                    <span><?php echo e($personalInfo['phone']); ?></span>
                </div>
                <div class="contact-item">
                    <span>📍</span>
                    <span><?php echo e($personalInfo['location']); ?></span>
                </div>
                <div class="contact-item">
                    <span>💼</span>
                    <span><?php echo e($personalInfo['linkedin']); ?></span>
                </div>
                <div class="contact-item">
                    <span>🔗</span>
                    <span><?php echo e($personalInfo['github']); ?></span>
                </div>
            </div>
        </div>
    </div>
</header><?php /**PATH C:\xampp\htdocs\cv_rifki\resources\views/cv/components/header.blade.php ENDPATH**/ ?>