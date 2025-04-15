document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80, // Account for fixed navbar
                    behavior: 'smooth'
                });
            }
        });
    });

    // Shrink navbar on scroll
    const navbar = document.querySelector('nav');
    const navContainer = document.querySelector('.nav-container');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.style.height = '60px';
            navContainer.style.height = '60px';
        } else {
            navbar.style.height = '80px';
            navContainer.style.height = '80px';
        }
    });

    // Animate elements when they come into view
    const animateOnScroll = function() {
        const elements = document.querySelectorAll('.stat-card, .platform-card, .example-card, .solutions-container, .section-title');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementPosition < windowHeight - 100) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    };

    // Set initial states for animation
    document.querySelectorAll('.stat-card, .platform-card, .example-card, .solutions-container').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });

    // Initial animation check
    animateOnScroll();
    
    // Check for animations on scroll
    window.addEventListener('scroll', animateOnScroll);

    // Animate statistic counters
    const statElements = document.querySelectorAll('.stat-number');
    
    const animateCounter = (element, target, duration) => {
        let start = 0;
        const step = timestamp => {
            if (!start) start = timestamp;
            const progress = Math.min((timestamp - start) / duration, 1);
            const value = Math.floor(progress * target);
            element.textContent = value + '%';
            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                element.textContent = target + '%';
            }
        };
        window.requestAnimationFrame(step);
    };

    const observerOptions = {
        threshold: 0.5
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const targetValue = parseInt(entry.target.getAttribute('data-target'));
                animateCounter(entry.target, targetValue, 1500);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    statElements.forEach(stat => {
        const target = parseInt(stat.textContent);
        stat.setAttribute('data-target', target);
        stat.textContent = '0%';
        observer.observe(stat);
    });

    // Animate the bars in charts
    const bars = document.querySelectorAll('.bar');
    
    bars.forEach(bar => {
        const percentage = bar.getAttribute('data-percentage');
        bar.style.width = percentage;
    });
});

// Show current year in footer
document.addEventListener('DOMContentLoaded', function() {
    const yearElements = document.querySelectorAll('.current-year');
    const currentYear = new Date().getFullYear();
    
    yearElements.forEach(element => {
        element.textContent = currentYear;
    });
});
