
export default function createParticles(container, count = 20) {
    if (!container) {
        console.error('O container para as partículas não foi encontrado.');
        return;
    }

    for (let i = 0; i < count; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';

        particle.style.top = `${Math.random() * 100}%`;
        particle.style.left = `${60 + Math.random() * 40}%`;
        particle.style.animationDelay = `${Math.random() * 6}s`;
        particle.style.animationDuration = `${4 + Math.random() * 4}s`;

        container.appendChild(particle);
    }
}
