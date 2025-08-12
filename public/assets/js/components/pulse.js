// Intersection Observer para iniciar pulse quando aparecer na tela
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('pulse-effect');
        }
    });
}, { 
    threshold: 0.3 // Inicia quando 30% do elemento estiver visível
});

// Observa todos os cards
document.querySelectorAll('.card-beneficios, .card-beneficios2, .card-beneficios3').forEach(card => {
    observer.observe(card);
});