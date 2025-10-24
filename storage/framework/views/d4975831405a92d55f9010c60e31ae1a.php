<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'CV - Rifki Alfaris'); ?></title>
    
    <style>
        /* Variabel dan Reset */
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #e74c3c;
            --light: #f8f9fa;
            --dark: #2c3e50;
            --text: #333;
            --text-light: #6c757d;
            --border: #dee2e6;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body.cv-body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text);
            background-color: var(--light);
        }

        .cv-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        /* Header Navigation */
        .cv-nav {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            padding: 1rem 0;
            box-shadow: var(--shadow);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-brand {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-actions {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            cursor: pointer;
        }

        .btn-primary {
            background-color: white;
            color: var(--primary);
        }

        .btn-primary:hover {
            background-color: var(--light);
            transform: translateY(-2px);
        }

        /* CV Header dengan Foto */
        .cv-header {
            background: white;
            border-radius: 15px;
            padding: 3rem;
            margin-bottom: 2rem;
            box-shadow: var(--shadow);
            text-align: center;
        }

        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
        }

        .profile-photo {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid var(--secondary);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .profile-photo:hover {
            transform: scale(1.05);
            border-color: var(--primary);
        }

        .profile-info {
            text-align: center;
        }

        .cv-name {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .contact-info {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
            margin-top: 1.5rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-light);
        }

        /* Section Styling */
        .cv-section {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: var(--shadow);
        }

        .section-title {
            color: var(--primary);
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 3px solid var(--secondary);
            display: inline-block;
        }

        /* Grid Layout */
        .cv-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        @media (max-width: 768px) {
            .cv-grid {
                grid-template-columns: 1fr;
            }
            
            .profile-photo {
                width: 150px;
                height: 150px;
            }
            
            .cv-name {
                font-size: 2.5rem;
            }
        }

        /* Skill Bars */
        .skill-item {
            margin-bottom: 1rem;
        }

        .skill-name {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .skill-bar {
            height: 8px;
            background-color: var(--border);
            border-radius: 4px;
            overflow: hidden;
        }

        .skill-level {
            height: 100%;
            background: linear-gradient(90deg, var(--secondary), var(--primary));
            border-radius: 4px;
            transition: var(--transition);
        }

        /* Timeline */
        .timeline {
            position: relative;
            padding-left: 2rem;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: var(--secondary);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
            padding-left: 2rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -1rem;
            top: 0.5rem;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--secondary);
            border: 3px solid white;
            box-shadow: 0 0 0 2px var(--secondary);
        }

        .timeline-period {
            color: var(--secondary);
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .timeline-title {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .timeline-subtitle {
            color: var(--text-light);
            margin-bottom: 0.5rem;
        }

        /* Project Cards */
        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .project-card {
            background: var(--light);
            border-radius: 10px;
            padding: 1.5rem;
            border-left: 4px solid var(--secondary);
            transition: var(--transition);
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }

        .project-name {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--primary);
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .tech-tag {
            background: var(--secondary);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Footer */
        .cv-footer {
            background: var(--primary);
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            text-align: center;
        }

        /* Print Styles */
        @media print {
            .cv-nav,
            .cv-footer {
                display: none !important;
            }
            
            .cv-container {
                padding: 0;
                margin: 0;
            }
            
            .cv-section {
                box-shadow: none;
                border: 1px solid var(--border);
                margin-bottom: 1rem;
            }
            
            .cv-grid {
                display: block;
            }
            
            .profile-photo {
                border: 3px solid #000;
            }
        }
    </style>
    
    <!-- Additional Styles -->
    <?php if (! empty(trim($__env->yieldContent('additional-styles')))): ?>
        <?php echo $__env->yieldContent('additional-styles'); ?>
    <?php endif; ?>
</head>
<body class="cv-body">
    <!-- Navigation -->
    <?php if (! (isset($excludeNavigation) && $excludeNavigation)): ?>
    <nav class="cv-nav">
        <div class="nav-container">
            <a href="<?php echo e(route('cv.home')); ?>" class="nav-brand">CV Portfolio</a>
            <div class="nav-actions">
                <a href="<?php echo e(route('cv.download')); ?>" class="btn btn-primary">Download PDF</a>
                <a href="<?php echo e(route('cv.print')); ?>" class="btn btn-primary">Print</a>
            </div>
        </div>
    </nav>
    <?php endif; ?>

    <!-- Main Content -->
    <main class="cv-container">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <?php if (! (isset($excludeFooter) && $excludeFooter)): ?>
    <footer class="cv-footer">
        <div class="footer-content">
            <p>&copy; 2024 Rifki Alfaris - Mahasiswa Sistem Informasi UTY. Semua Hak Dilindungi.</p>
            <p>Terakhir diperbarui: <?php echo e(date('d F Y')); ?></p>
        </div>
    </footer>
    <?php endif; ?>

    <script>
        // Animasi skill bars ketika masuk viewport
        function animateSkillBars() {
            const skillBars = document.querySelectorAll('.skill-level');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const skillLevel = entry.target;
                        const level = skillLevel.style.width;
                        skillLevel.style.width = '0%';
                        setTimeout(() => {
                            skillLevel.style.width = level;
                        }, 100);
                    }
                });
            });

            skillBars.forEach(bar => observer.observe(bar));
        }

        // Smooth scrolling untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Initialize animations ketika DOM siap
        document.addEventListener('DOMContentLoaded', function() {
            animateSkillBars();
        });
    </script>
    
    <!-- Additional Scripts -->
    <?php if (! empty(trim($__env->yieldContent('additional-scripts')))): ?>
        <?php echo $__env->yieldContent('additional-scripts'); ?>
    <?php endif; ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\cv_rifki\resources\views/layouts/cv.blade.php ENDPATH**/ ?>