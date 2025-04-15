// script.js
document.addEventListener('DOMContentLoaded', function() {
    initNavScroll();
    animateStats();
    setupContentReveal();
    setupModal();
});

// Smooth scroll navigation
function initNavScroll() {
    document.querySelectorAll('.sticky-nav a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            window.scrollTo({
                top: target.offsetTop - 80,
                behavior: 'smooth'
            });
        });
    });
}

// Animate statistic counters
function animateStats() {
    const statElements = document.querySelectorAll('[data-target]');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = +entry.target.getAttribute('data-target');
                animateValue(entry.target, 0, target, 1500);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    statElements.forEach(el => observer.observe(el));
}

function animateValue(element, start, end, duration) {
    let startTime = null;
    
    function animation(currentTime) {
        if (!startTime) startTime = currentTime;
        const progress = Math.min((currentTime - startTime) / duration, 1);
        const value = Math.floor(progress * (end - start) + start);
        element.textContent = value;
        if (progress < 1) requestAnimationFrame(animation);
    }
    
    requestAnimationFrame(animation);
}

// Content reveal animation
function setupContentReveal() {
    const sections = document.querySelectorAll('section');
    
    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
            }
        });
    }, { threshold: 0.1 });

    sections.forEach(section => sectionObserver.observe(section));
}

// Pledge modal functionality
function setupModal() {
    const modal = document.getElementById('pledge-modal');
    if (!modal) return;

    const openBtn = document.getElementById('pledge-button');
    const closeBtn = document.querySelector('.close-modal');

    if (openBtn) openBtn.addEventListener('click', () => toggleModal(true));
    if (closeBtn) closeBtn.addEventListener('click', () => toggleModal(false));

    function toggleModal(show) {
        modal.style.display = show ? 'block' : 'none';
        document.body.style.overflow = show ? 'hidden' : '';
    }
}
