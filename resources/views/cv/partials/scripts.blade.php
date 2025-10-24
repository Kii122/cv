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