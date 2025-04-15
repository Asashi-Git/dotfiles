document.addEventListener('DOMContentLoaded', function() {
    // --- Navigation mobile ---
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.main-nav');
    
    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            menuToggle.classList.toggle('menu-active');
            nav.classList.toggle('nav-active');
            document.body.classList.toggle('no-scroll');
        });
    }
    
    // --- Animation au défilement ---
    const animatedElements = document.querySelectorAll('.animate-in');
    
    function checkIfInView() {
        const windowHeight = window.innerHeight;
        const windowTopPosition = window.scrollY;
        const windowBottomPosition = windowTopPosition + windowHeight;
        
        animatedElements.forEach(function(element) {
            const elementHeight = element.offsetHeight;
            const elementTopPosition = element.offsetTop;
            const elementBottomPosition = elementTopPosition + elementHeight;
            
            // Vérifier si l'élément est visible
            if (
                (elementBottomPosition >= windowTopPosition) && 
                (elementTopPosition <= windowBottomPosition - elementHeight / 3)
            ) {
                element.classList.add('visible');
            }
        });
    }
    
    // Vérifier initialement et au défilement
    window.addEventListener('scroll', checkIfInView);
    window.addEventListener('resize', checkIfInView);
    checkIfInView();
    
    // --- Données dynamiques pour les graphiques ---
    if (typeof Chart !== 'undefined') {
        // Graphique de comparaison
        const ctxComparison = document.getElementById('comparison-chart');
        if (ctxComparison) {
            new Chart(ctxComparison, {
                type: 'bar',
                data: {
                    labels: ['Représentation dans la tech', 'Postes de direction', 'Écart salarial', 'Financement startups'],
                    datasets: [
                        {
                            label: 'Hommes',
                            data: [72, 83, 100, 97],
                            backgroundColor: 'rgba(54, 162, 235, 0.7)'
                        },
                        {
                            label: 'Femmes',
                            data: [28, 17, 86, 3],
                            backgroundColor: 'rgba(255, 99, 132, 0.7)'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Disparités hommes-femmes dans le numérique (%)'
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.dataset.label + ': ' + context.raw + '%';
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100
                        }
                    }
                }
            });
        }
    }
    
    // --- Gestion des témoignages ---
    const testimonials = document.querySelector('.testimonial-slider');
    let currentSlide = 0;
    
    if (testimonials) {
        const slides = testimonials.querySelectorAll('.testimonial-card');
        const totalSlides = slides.length;
        const dotContainer = document.querySelector('.slider-dots');
        const prevButton = document.querySelector('.slider-prev');
        const nextButton = document.querySelector('.slider-next');
        
        // Créer les dots
        for (let i = 0; i < totalSlides; i++) {
            const dot = document.createElement('button');
            dot.classList.add('slider-dot');
            if (i === 0) dot.classList.add('active');
            dot.setAttribute('aria-label', `Témoignage ${i+1}`);
            dot.dataset.slide = i;
            dotContainer.appendChild(dot);
            
            dot.addEventListener('click', function() {
                goToSlide(parseInt(this.dataset.slide));
            });
        }
        
        function goToSlide(slideIndex) {
            slides.forEach((slide, index) => {
                slide.style.transform = `translateX(${100 * (index - slideIndex)}%)`;
            });
            
            // Mettre à jour les dots
            document.querySelectorAll('.slider-dot').forEach((dot, index) => {
                dot.classList.toggle('active', index === slideIndex);
            });
            
            currentSlide = slideIndex;
        }
        
        // Initialiser les positions
        slides.forEach((slide, index) => {
            slide.style.transform = `translateX(${100 * index}%)`;
        });
        
        // Événements des boutons
        if (prevButton) {
            prevButton.addEventListener('click', function() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                goToSlide(currentSlide);
            });
        }
        
        if (nextButton) {
            nextButton.addEventListener('click', function() {
                currentSlide = (currentSlide + 1) % totalSlides;
                goToSlide(currentSlide);
            });
        }
        
        // Auto-rotation
        let slideInterval = setInterval(function() {
            currentSlide = (currentSlide + 1) % totalSlides;
            goToSlide(currentSlide);
        }, 5000);
        
        // Arrêter la rotation au survol
        testimonials.addEventListener('mouseenter', function() {
            clearInterval(slideInterval);
        });
        
        testimonials.addEventListener('mouseleave', function() {
            slideInterval = setInterval(function() {
                currentSlide = (currentSlide + 1) % totalSlides;
                goToSlide(currentSlide);
            }, 5000);
        });
    }
    
    // --- Formulaire de contact ---
    const contactForm = document.getElementById('contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Animation de chargement
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            submitBtn.innerHTML = '<span class="loading-spinner"></span> Envoi en cours...';
            submitBtn.disabled = true;
            
            // Simuler l'envoi (remplacer par une vraie requête AJAX)
            setTimeout(function() {
                // Réinitialiser le formulaire
                contactForm.reset();
                
                // Message de succès
                const successMessage = document.createElement('div');
                successMessage.classList.add('form-success');
                successMessage.innerHTML = '<i class="fas fa-check-circle"></i> Votre message a été envoyé avec succès!';
                contactForm.appendChild(successMessage);
                
                submitBtn.innerHTML = 'Envoyer';
                submitBtn.disabled = false;
                
                // Faire disparaître le message après 5 secondes
                setTimeout(function() {
                    successMessage.style.opacity = '0';
                    setTimeout(function() {
                        successMessage.remove();
                    }, 300);
                }, 5000);
            }, 1500);
        });
    }
    
    // --- Filtrage des ressources ---
    const resourceFilters = document.querySelectorAll('.resource-filter button');
    const resourceItems = document.querySelectorAll('.resource-item');
    
    if (resourceFilters.length && resourceItems.length) {
        resourceFilters.forEach(filter => {
            filter.addEventListener('click', function() {
                // Activer le filtre cliqué
                resourceFilters.forEach(f => f.classList.remove('active'));
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                
                // Filtrer les ressources
                resourceItems.forEach(item => {
                    if (filterValue === 'all') {
                        item.style.display = 'block';
                    } else {
                        item.style.display = item.classList.contains(filterValue) ? 'block' : 'none';
                    }
                });
                
                // Animation
                resourceItems.forEach(item => {
                    item.classList.remove('fade-in');
                    void item.offsetWidth; // Force reflow
                    item.classList.add('fade-in');
                });
            });
        });
    }
    
    // --- Lazy loading des images ---
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });
        
        lazyImages.forEach(img => {
            imageObserver.observe(img);
        });
    } else {
        // Fallback pour les navigateurs ne supportant pas Intersection Observer
        lazyImages.forEach(img => {
            img.src = img.dataset.src;
        });
    }
});
