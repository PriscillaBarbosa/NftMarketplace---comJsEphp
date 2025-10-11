<div class="container-fluid container-404 text-center h-100">
    <h1 class="error-titulo pt-5 pb-3">Erro 404 - Oops! Página não encontrada.</h1>
    <p class="error-text mb-0">Mas fique tranquilo pois já estamos trabalhando para resolver.</p>
    <div class="error-container" style="max-width: 400px; margin: auto;">
        <img id="imagemErroAleatoria" src="" alt="Um animal fofinho para alegrar seu dia" width="200">
    </div>
</div>

<script>
  
  document.addEventListener('DOMContentLoaded', function() {
    
    const pastaDasImagens = '/assets/img/erro/';
    const totalDeImagens = 16;
    const extensaoDoArquivo = 'png';

    // --- Lógica do Sorteio (igual a antes) ---
    const numeroSorteado = Math.floor(Math.random() * totalDeImagens) + 1;
    const nomeDaImagem = `Image_${numeroSorteado}.${extensaoDoArquivo}`;
    const caminhoCompleto = pastaDasImagens + nomeDaImagem;
    
    // Encontra o elemento de imagem real na página
    const elementoImagemReal = document.getElementById('imagemErroAleatoria');
       
    // 1. Cria uma imagem "fantasma" na memória do navegador
    const imgFantasma = new Image();
    
    // 2. Define uma função que será executada QUANDO a imagem fantasma terminar de carregar
    imgFantasma.onload = function() {
      // Agora que a imagem já está carregada, nós a colocamos na página...
      elementoImagemReal.src = this.src;
      // ...e SÓ ENTÃO a tornamos visível.
      elementoImagemReal.style.visibility = 'visible';
    };
    
    // 3. Manda o navegador começar a baixar a imagem. Quando terminar, a função acima será chamada.
    imgFantasma.src = caminhoCompleto;

  });
</script>

<style>

#imagemErroAleatoria {
  /* Começa invisível, mas ainda ocupa seu espaço no layout */
  visibility: hidden;
}

.container-404 {
    background: var(--fundo-bg-gradiente);
}
    
.error-titulo{
    font-size: 2rem;
    color: var(--texto-cor-principal);
}

.error-text {
    font-size: 1rem;
    color: var(--texto-cor-principal);
}

</style>