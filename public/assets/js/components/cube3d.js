class Cube3D {
    constructor(selector) {
        // 1. Encontra o cubo usando o seletor passado pelo main.js
        this.cube = document.querySelector(selector);
        this.isPaused = false;

        // 2. VERIFICAÇÃO DE SEGURANÇA:
        //    Só continua se o cubo realmente existir na página.
        if (!this.cube) {
            console.warn(`Elemento do Cubo com seletor "${selector}" não foi encontrado.`);
            return; // Para a execução se não encontrar
        }

        // 3. Chamei os métodos para inicializar tudo
        this.setupEventListeners();
        this.createParticles();
    }

    // Método para criar as partículas
    createParticles() {
        const particleCount = 20;
        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.top = Math.random() * 100 + '%';
            particle.style.left = (60 + Math.random() * 40) + '%';
            particle.style.animationDelay = Math.random() * 6 + 's';
            particle.style.animationDuration = (4 + Math.random() * 4) + 's';
            document.body.appendChild(particle);
        }
    }

    // Método para configurar o clique de pausa/play
    setupEventListeners() {
        // Usei uma "arrow function" () => {} para que o "this" continue se referindo à classe
        this.cube.addEventListener('click', () => {
            if (this.isPaused) {
                this.cube.style.animationPlayState = 'running';
                this.isPaused = false;
            } else {
                this.cube.style.animationPlayState = 'paused';
                this.isPaused = true;
            }
        });
    }
}