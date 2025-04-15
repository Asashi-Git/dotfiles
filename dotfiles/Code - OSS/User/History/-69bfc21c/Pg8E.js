document.addEventListener('DOMContentLoaded', function() {
    // Animation pour les statistiques
    animateStatistics();
    
    // Animation pour les éléments au scroll
    initScrollAnimation();
    
    // Initialiser les graphiques
    initCharts();
    
    // Initialiser les tabs
    initTabs();
    
    // Animation des barres de progression
    animateProgressBars();
});

// Animation des statistiques avec compteur
function animateStatistics() {
    const stats = document.querySelectorAll('.stat-number');
    
    stats.forEach(stat => {
        const targetValue = parseFloat(stat.textContent);
        const duration = 2000; // 2 secondes
        const startTime = Date.now();
        const startValue = 0;
        
        function updateStat() {
            const currentTime = Date.now();
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            
            const currentValue = startValue + (targetValue - startValue) * progress;
            stat.textContent = currentValue.toFixed(1) + '%';
            
            if (progress < 1) {
                requestAnimationFrame(updateStat);
            }
        }
        
        stat.textContent = '0%';
        updateStat();
    });
}

// Détection du scroll pour animer les éléments
function initScrollAnimation() {
    const elements = document.querySelectorAll('.fade-in');
    
    function checkScroll() {
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementTop < windowHeight * 0.9) {
                element.classList.add('visible');
            }
        });
    }
    
    // Vérifier au chargement et au scroll
    checkScroll();
    window.addEventListener('scroll', checkScroll);
}

// Initialiser les graphiques avec Chart.js
function initCharts() {
    // S'assurer que Chart.js est chargé
    if (typeof Chart === 'undefined') {
        console.warn('Chart.js n\'est pas chargé');
        return;
    }
    
    // Graphique 1: Représentation par genre dans les métiers tech
    const techJobsCtx = document.getElementById('techJobsChart');
    if (techJobsCtx) {
        new Chart(techJobsCtx, {
            type: 'bar',
            data: {
                labels: ['Développement', 'Data Science', 'UX/UI', 'Gestion de projet', 'Cybersécurité'],
                datasets: [{
                    label: 'Hommes (%)',
                    data: [73, 70, 55, 60, 78],
                    backgroundColor: 'rgba(54, 162, 235, 0.7)'
                }, {
                    label: 'Femmes (%)',
                    data: [27, 30, 45, 40, 22],
                    backgroundColor: 'rgba(255, 99, 132, 0.7)'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100,
                        ticks: {
                            callback: function(value) {
                                return value + '%';
                            }
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Répartition par genre dans les métiers tech (2023)'
                    }
                }
            }
        });
    }
    
    // Graphique 2: Évolution du pourcentage de femmes dans la tech
    const evolutionCtx = document.getElementById('evolutionChart');
    if (evolutionCtx) {
        new Chart(evolutionCtx, {
            type: 'line',
            data: {
                labels: ['2000', '2005', '2010', '2015', '2020', '2023'],
                datasets: [{
                    label: 'Pourcentage de femmes dans la tech',
                    data: [20, 22, 23, 25, 26, 27],
                    borderColor: 'rgba(255, 99, 132, 1)',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    fill: true
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 50,
                        ticks: {
                            callback: function(value) {
                                return value + '%';
                            }
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Évolution de la représentation des femmes dans le secteur tech'
                    }
                }
            }
        });
    }
    
    // Graphique 3: Écart salarial
    const salaryGapCtx = document.getElementById('salaryGapChart');
    if (salaryGapCtx) {
        new Chart(salaryGapCtx, {
            type: 'radar',
            data: {
                labels: ['Tech', 'Médias', 'Finance', 'Santé', 'Éducation', 'Marketing'],
                datasets: [{
                    label: 'Écart salarial H/F (%)',
                    data: [22, 20, 28, 15, 8, 18],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    pointBackgroundColor: 'rgba(255, 99, 132, 1)'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    r: {
                        angleLines: {
                            display: true
                        },
                        ticks: {
                            callback: function(value) {
                                return value + '%';
                            }
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Écart salarial homme-femme par secteur (2023)'
                    }
                }
            }
        });
    }
}

// Initialiser les onglets
function initTabs() {
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Désactiver tous les onglets
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Activer l'onglet cliqué
            button.classList.add('active');
            const tabId = button.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });
    
    // Activer le premier onglet par défaut
    if (tabButtons.length > 0 && tabContents.length > 0) {
        tabButtons[0].classList.add('active');
        tabContents[0].classList.add('active');
    }
}

// Animer les barres de progression
function animateProgressBars() {
    const progressBars = document.querySelectorAll('.progress-bar');
    
    progressBars.forEach(bar => {
        const targetWidth = bar.getAttribute('data-width');
        
        // Animation au scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        bar.style.width = targetWidth + '%';
                    }, 200);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(bar);
    });
}

// Afficher une section avec une animation
function showSection(sectionId) {
    const section = document.getElementById(sectionId);
    section.scrollIntoView({ behavior: 'smooth' });
}

// Simuler le chargement des données
function simulateDataLoading() {
    const loadingIndicator = document.getElementById('loading-indicator');
    if (!loadingIndicator) return;
    
    loadingIndicator.style.display = 'block';
    
    setTimeout(() => {
        loadingIndicator.style.display = 'none';
        document.getElementById('data-container').style.display = 'block';
    }, 1500);
}

// Créer des tooltips pour les éléments avec data-tooltip
function initTooltips() {
    const tooltipElements = document.querySelectorAll('[data-tooltip]');
    
    tooltipElements.forEach(element => {
        element.addEventListener('mouseenter', (e) => {
            const tooltip = document.createElement('div');
            tooltip.className = 'tooltip';
            tooltip.textContent = element.getAttribute('data-tooltip');
            
            document.body.appendChild(tooltip);
            
            const rect = element.getBoundingClientRect();
            tooltip.style.left = rect.left + rect.width/2 - tooltip.offsetWidth/2 + 'px';
            tooltip.style.top = rect.top - tooltip.offsetHeight - 10 + 'px';
            
            setTimeout(() => {
                tooltip.classList.add('visible');
            }, 10);
        });
        
        element.addEventListener('mouseleave', () => {
            const tooltips = document.querySelectorAll('.tooltip.visible');
            tooltips.forEach(t => {
                t.classList.remove('visible');
                setTimeout(() => {
                    t.remove();
                }, 300);
            });
        });
    });
}
