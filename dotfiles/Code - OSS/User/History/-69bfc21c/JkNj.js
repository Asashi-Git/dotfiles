document.addEventListener('DOMContentLoaded', function() {
    // Mobile Navigation Toggle
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');
    
    if (navToggle) {
        navToggle.addEventListener('click', () => {
            navToggle.classList.toggle('active');
            navLinks.classList.toggle('active');
        });
    }
    
    // Close mobile menu when clicking a link
    const navItems = document.querySelectorAll('.nav-links a');
    navItems.forEach(item => {
        item.addEventListener('click', () => {
            if (navToggle.classList.contains('active')) {
                navToggle.classList.remove('active');
                navLinks.classList.remove('active');
            }
        });
    });
    
    // Shrink navigation on scroll
    const nav = document.querySelector('nav');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            nav.classList.add('nav-scrolled');
        } else {
            nav.classList.remove('nav-scrolled');
        }
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    });
    
    // Animation for statistics
    function animateStats() {
        const statElements = document.querySelectorAll('.stat-number');
        const observerOptions = {
            threshold: 0.5,
            rootMargin: "0px 0px -100px 0px"
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = parseInt(entry.target.getAttribute('data-target'));
                    const duration = 2000; // 2 seconds
                    let startTime = null;
                    const startValue = 0;
                    
                    function animateValue(timestamp) {
                        if (!startTime) startTime = timestamp;
                        const progress = timestamp - startTime;
                        const percentage = Math.min(progress / duration, 1);
                        
                        const value = Math.floor(startValue + (target - startValue) * percentage);
                        entry.target.textContent = value;
                        
                        if (percentage < 1) {
                            window.requestAnimationFrame(animateValue);
                        }
                    }
                    
                    window.requestAnimationFrame(animateValue);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        statElements.forEach(stat => {
            observer.observe(stat);
        });
    }
    
    // Animation for bar charts
    function animateCharts() {
        const bars = document.querySelectorAll('.bar');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const percentage = entry.target.getAttribute('data-percentage');
                    entry.target.style.width = percentage;
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        bars.forEach(bar => {
            observer.observe(bar);
        });
    }
    
    // Run animations when content is loaded
    animateStats();
    animateCharts();
    
    // Add fade animations to elements when they scroll into view
    const fadeElements = document.querySelectorAll('.solution-card, .example-card, .resource-card');
    
    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fadeInUp');
                fadeObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    
    fadeElements.forEach(element => {
        element.style.opacity = "0";
        element.style.transform = "translateY(20px)";
        element.style.transition = "opacity 0.6s ease, transform 0.6s ease";
        fadeObserver.observe(element);
    });
    
    fadeObserver.callback = (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = "1";
                entry.target.style.transform = "translateY(0)";
                fadeObserver.unobserve(entry.target);
            }
        });
    };
});
