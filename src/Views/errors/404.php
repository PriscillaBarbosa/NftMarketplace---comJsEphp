<div class="container text-center">
    <h1>Erro 404 - Página Não Encontrada</h1>
    <p>Desculpe, não encontramos a página que você procurava. Mas para compensar, aqui está uma foto de um cachorrinho!</p>

    <div class="error-container" style="max-width: 600px; margin: auto;">
        <img id="dogImage" src="" class="img-fluid rounded shadow" alt="Um cachorrinho fofo">
    </div>
</div>

<script>
    async function fetchDogImage() {
        try {
            const response = await fetch('https://dog.ceo/api/breeds/image/random');
            const data = await response.json();
            document.getElementById('dogImage').src = data.message;
        } catch (error) {
            console.error('Oops, não foi possível buscar um cachorrinho:', error);
        }
    }
    fetchDogImage();
</script>