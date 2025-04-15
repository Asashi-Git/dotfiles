// DOM Elements
const navbar = document.getElementById('navbar');
const scrollDown = document.querySelector('.scroll-down');
const sections = document.querySelectorAll('.fade-in');
const navLinks = document.querySelectorAll('.nav-links a');
const burger = document.querySelector('.burger');
const nav = document.querySelector('.nav-links');
const lines = document.querySelectorAll('.burger div');

// Initial Setup
document.addEventListener('DOMContentLoaded', function() {
    // Check for scroll position on load
    checkScroll();
    checkSectionVisible();
    
    // Stats counter animation
    animateStatNumbers();
});

// Navbar scroll effect
window.addEventListener('scroll', function() {
    checkScroll();
    checkSectionVisible();
});

function checkScroll() {
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
}

// Scroll down button functionality
scrollDown.addEventListener('click', function() {
    window.scrollTo({
        top: document.getElementById('introduction').offsetTop - 100,
        behavior: 'smooth'
    });
});

// Fade-in sections animation
function checkSectionVisible() {
    sections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        if (sectionTop < windowHeight * 0.75) {
            section.classList.add('appear');
        }
    });
}

// Smooth scrolling for navigation links
navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetSection = document.querySelector(targetId);
        
        window.scrollTo({
            top: targetSection.offsetTop - 100,
            behavior: 'smooth'
        });
        
        // Close mobile menu if open
        if (nav.classList.contains('nav-active')) {
            toggleNav();
        }
    });
});

// Mobile navigation toggle
burger.addEventListener('click', toggleNav);

function toggleNav() {
    nav.classList.toggle('nav-active');
    
    // Burger animation
    burger.classList.toggle('toggle');
}

// Stats animation
function animateStatNumbers() {
    const statNumbers = document.querySelectorAll('.stat-number');
    
    statNumbers.forEach(statNumber => {
        const target = parseInt(statNumber.textContent);
        const duration = 2000; // 2 seconds
        const stepTime = 50; // update every 50ms
        const totalSteps = duration / stepTime;
        const stepValue = target / totalSteps;
        
        let current = 0;
        const timer = setInterval(() => {
            current += stepValue;
            
            if (current >= target) {
                statNumber.textContent = target + '%';
                clearInterval(timer);
            } else {
                statNumber.textContent = Math.round(current) + '%';
            }
        }, stepTime);
    });
}

// Highlight active section in navigation
window.addEventListener('scroll', function() {
    let current = '';
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        
        if (scrollY >= (sectionTop - 200)) {
            current = '#' + section.getAttribute('id');
        }
    });
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === current) {
            link.classList.add('active');
        }
    });
});

// Easter egg - click logo to change theme colors
document.querySelector('.logo').addEventListener('click', function() {
    // Random color themes
    const themes = [
        { primary: '#9c27b0', secondary: '#3f51b5', accent: '#ff4081' },
        { primary: '#2196f3', secondary: '#03a9f4', accent: '#ff5722' },
        { primary: '#4caf50', secondary: '#8bc34a', accent: '#ffc107' },
        { primary: '#e91e63', secondary: '#f44336', accent: '#9c27b0' },
        { primary: '#009688', secondary: '#4db6ac', accent: '#ff5722' }
    ];
    
    const randomTheme = themes[Math.floor(Math.random() * themes.length)];
    
    document.documentElement.style.setProperty('--primary-color', randomTheme.primary);
    document.documentElement.style.setProperty('--secondary-color', randomTheme.secondary);
    document.documentElement.style.setProperty('--accent-color', randomTheme.accent);
    
    // Animation effect
