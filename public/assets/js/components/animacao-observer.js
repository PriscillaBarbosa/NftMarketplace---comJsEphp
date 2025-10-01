
export default function observarElementos(seletor, classeParaAdicionar, threshold = 0.3) {
    const elementos = document.querySelectorAll(seletor);

    if (elementos.length === 0) {
        console.warn(`Nenhum elemento encontrado com o seletor: "${seletor}"`);
        return;
    }

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add(classeParaAdicionar);
                
                // Isso evita que a animação se repita caso o usuário role a página para cima e para baixo.
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: threshold 
    });

    elementos.forEach(elemento => {
        observer.observe(elemento);
    });
}

