export default function fade() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.3 });

    // Observar apenas elementos da feature-section
    document.querySelectorAll('.feature-section .fade-up').forEach(el => {
        observer.observe(el);
    });
}
