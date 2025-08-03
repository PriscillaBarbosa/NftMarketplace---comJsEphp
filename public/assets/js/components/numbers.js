document.addEventListener('DOMContentLoaded', () =>  {
    const cards = document.querySelectorAll('.anima-card');

    const animarContador = (el) => {
        const valorFinal = parseInt(el.getAttribute('data-numero'));
        let valorAtual = 0;
        const duracao = 4000;
        const intervalo = 20;
        const incremento = Math.ceil(valorFinal / (duracao / intervalo ));

        clearInterval(el._contadorTimes); //limpa animação
        el.textContent = '0'; // reinicia o número visível

        el._contadorTimer = setInterval(() => {
            valorAtual +=incremento;
            if (valorAtual >= valorFinal) {
                valorAtual = valorFinal;
                clearInterval(el._contadorTimer);
            }
            el.textContent = valorAtual.toLocaleString('pt-BR')
        }, intervalo);
    };

    const observer = new IntersectionObserver((entradas) => {
        entradas.forEach(entrada => {
            if (entrada.isIntersecting) {
                entrada.target.classList.add('show'); //anima visualmente
                const numero = entrada.target.querySelector('.numero-contador');
                animarContador(numero); //reinicia a contagem
            }
        });
    }, { threshold: 0.6 });

    cards.forEach(card => {
        observer.observe(card);
    });
});