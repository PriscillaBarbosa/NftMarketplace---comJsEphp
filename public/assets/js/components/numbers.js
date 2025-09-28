
export default function initContadorAnimado() { 
    const cards = document.querySelectorAll('.anima-card');

    if (cards.length === 0) {
        return;
    }

    const animarContador = (el) => {
        const valorFinal = parseInt(el.getAttribute('data-numero'), 10);
        let valorAtual = 0;
        const duracao = 2000;
        const intervalo = 20;
        const incremento = Math.ceil(valorFinal / (duracao / intervalo));

        clearInterval(el._contadorTimer);
        el.textContent = '0';

        el._contadorTimer = setInterval(() => {
            valorAtual += incremento;
            if (valorAtual >= valorFinal) {
                valorAtual = valorFinal;
                clearInterval(el._contadorTimer);
            }
            el.textContent = valorAtual.toLocaleString('pt-BR');
        }, intervalo);
    };

    const observer = new IntersectionObserver((entradas, obs) => {
        entradas.forEach(entrada => {
            if (entrada.isIntersecting) {
                const cardElement = entrada.target;
                cardElement.classList.add('show');

                const numeroEl = cardElement.querySelector('.numero-contador');
                if (numeroEl) {
                    animarContador(numeroEl);
                }
                
                obs.unobserve(cardElement);
            }
        });
    }, { threshold: 0.6 });

    cards.forEach(card => {
        observer.observe(card);
    });
}

