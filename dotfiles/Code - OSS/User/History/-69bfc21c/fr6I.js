// Mobile navigation toggle
const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click', () => {
        // Toggle Nav
        nav.classList.toggle('nav-active');

        // Animate Links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
            }
        });
        
        // Burger Animation
        burger.classList.toggle('toggle');
    });
};

navSlide();

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Animate statistics cards on scroll
const statCards = document.querySelectorAll('.stat-card');

const checkScroll = () => {
    statCards.forEach(card => {
        // Get the distance from the top of the card to the top of the viewport
        const cardTop = card.getBoundingClientRect().top;
        // Animate when the card is partially visible
        if (cardTop < window.innerHeight * 0.8) {
            card.classList.add('stat-card-visible');
        }
    });
};

// Check on load and scroll
checkScroll();
window.addEventListener('scroll', checkScroll);

// Animation for solutions cards
const solutionCards = document.querySelectorAll('.solution-card');

solutionCards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.classList.add('solution-card-hover');
    });
    
    card.addEventListener('mouseleave', () => {
        card.classList.remove('solution-card-hover');
    });
});

// Typing effect for the hero subtitle
const heroSubtitle = document.querySelector('.hero h2');
if (heroSubtitle) {
    const text = heroSubtitle.textContent;
    heroSubtitle.textContent = '';
    
    let i = 0;
    function typeWriter() {
        if (i < text.length) {
            heroSubtitle.textContent += text.charAt(i);
            i++;
            setTimeout(typeWriter, 50);
        }
    }
    
    // Start typing effect after a short delay
    setTimeout(typeWriter, 500);
}

// Add floating animation to issue cards on scroll
const issueCards = document.querySelectorAll('.issue-card');
let animationStarted = false;

function startFloatingAnimation() {
    if (animationStarted) return;
    
    issueCards.forEach((card, index) => {
        setTimeout(() => {
            card.classList.add('floating');
        }, index * 200);
    });
    
    animationStarted = true;
}

function checkIssueCardsVisibility() {
    if (issueCards.length > 0) {
        const cardTop = issueCards[0].getBoundingClientRect().top;
        if (cardTop < window.innerHeight * 0.8) {
            startFloatingAnimation();
        }
    }
}

window.addEventListener('scroll', checkIssueCardsVisibility);
checkIssueCardsVisibility(); // Check on load

// Add counter animation to percentage statistics
const counters = document.querySelectorAll('.counter');

function startCounters() {
    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        const duration = 2000; // 2 seconds
        const increment = target / (duration / 16); // Update every 16ms (60fps)
        
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            
            if (current < target) {
                counter.textContent = Math.round(current) + '%';
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target + '%';
            }
        };
        
        updateCounter();
    });
}

// Start counters when they come into view
function checkCounters() {
    if (counters.length > 0) {
        const counterTop = counters[0].getBoundingClientRect().top;
        if (counterTop < window.innerHeight * 0.8) {
            startCounters();
            window.removeEventListener('scroll', checkCounters);
        }
    }
}

window.addEventListener('scroll', checkCounters);
checkCounters(); // Check on load

// Fade-in animation for sections on scroll
const sections = document.querySelectorAll('section');

function checkSections() {
    sections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top;
        if (sectionTop < window.innerHeight * 0.75) {
            section.classList.add('section-visible');
        }
    });
}

window.addEventListener('scroll', checkSections);
checkSections(); // Check on load
