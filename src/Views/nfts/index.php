<!-- 
================================
ARQUIVO: src/Views/nft/index.php
================================
-->

<?php 
$heroNft1 = $nfts[array_rand($nfts)]; 
$heroNft2 = $nfts[array_rand($nfts)]; 
?>

<div class="nft-gallery-container my-0 py-0">
    <!-- Hero Section -->
    <section class="hero-gallery">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center">
                <img src="<?= $heroNft1['image'] ?>" alt="<?= $heroNft1['title'] ?>" loading="lazy">
                <h1 class="gallery-title">Galeria de NFTs</h1>
                <img src="<?= $heroNft2['image'] ?>" alt="<?= $heroNft2['title'] ?>" loading="lazy">
            </div>
            
            <p class="gallery-subtitle">Explore the complete collection of Lobix NFTs, featuring our adorable mascot Shibu in
various expressions and unique digital art pieces.</p>
        </div>
    </section>

    <!-- Filtros -->
    <section class="filters-section">
        <div class="container">
            <div class="filters-wrapper d-flex justify-content-between align-items-center">
                <div class="pesquisar">
                    <i class="fas fa-search"></i>   
                    <input type="text" 
                    class="search-input form-control" 
                    id="searchInput"
                    placeholder="Pesquisar NFTs... "
                    autocomplete="off">
                </div>
                <!-- Categorias 
                <div class="filter-group">
                    <label>Categorias:</label>
                    <div class="filter-buttons">
                        <?php foreach($categories as $category): ?>
                            <button class="filter-btn" data-category="<?= strtolower($category) ?>">
                                <?= $category ?>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div> -->
                <div class="grupos-filtros d-flex justify-content-center align-items-center">
                    <!-- Faixa de Preço -->
                    <div class="filter-group me-4">
                        <select class="filter-select" id="price-filter">
                            <option value="">Todos os preços</option>
                            <?php foreach($filters['price_ranges'] as $range): ?>
                                <option value="<?= $range ?>"><?= $range ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Status -->
                    <div class="filter-group">
                        <select class="filter-select" id="status-filter">
                            <option value="">Todos os status</option>
                            <?php foreach($filters['status'] as $status): ?>
                                <option value="<?= $status ?>"><?= ucfirst($status) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
    <!-- Grid de NFTs -->
    <section class="nft-grid-section">
        <div class="container-fluid">
            <div class="nft-grid">
                <?php foreach($nfts as $nft): ?>
                    <div class="card nft-card fade-up h-100 d-flex justify-content-center align-items-center mx-3" data-category="<?= strtolower($nft['category']) ?>" data-status="<?= $nft['status'] ?>">
                        <!-- Imagem do NFT -->
                        <div class="nft-image">
                            <img src="<?= $nft['image'] ?>" alt="<?= $nft['title'] ?>" loading="lazy">
                            <div class="nft-overlay">
                                <button class="btn-view-details" onclick="viewNFT(<?= $nft['id'] ?>)">
                                    Ver Detalhes
                                </button>
                            </div>
                        </div>

                        <!-- Informações do NFT -->
                        <div class="nft-info">
                            <div class="nft-header">
                                <h3 class="nft-title"><?= $nft['title'] ?></h3>
                                <span class="nft-code"><?= $nft['code'] ?></span>
                            </div>
                            
                            <div class="nft-meta">
                                <div class="nft-creator">
                                    <small>Por: <strong><?= $nft['creator'] ?></strong></small>
                                </div>
                                <div class="nft-category">
                                    <span class="category-tag"><?= $nft['category'] ?></span>
                                </div>
                            </div>

                            <div class="nft-status">
                                <span class="status-badge status-<?= $nft['status'] ?>"><?= ucfirst($nft['status']) ?></span>
                            </div>

                            <div class="nft-price">
                                <span class="price"><?= $nft['price'] ?></span>
                            </div>

                            <div class="nft-actions">
                                <button class="btn-buy" onclick="buyNFT(<?= $nft['id'] ?>)">
                                    Comprar Agora
                                </button>
                                <button class="btn-favorite" onclick="toggleFavorite(<?= $nft['id'] ?>)">
                                    ♡
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="no-results text-center" id="noResults" style="display: none;">
            <i class="fas fa-search mb-4" style="font-size: 4rem; color: rgba(0, 255, 135, 0.5);"></i>
            <h3 style="color: rgba(255, 255, 255, 0.8); margin-bottom: 1rem;">Nenhum NFT encontrado</h3>
            <p style="color: rgba(255, 255, 255, 0.6); margin-bottom: 2rem;">Tente usar outros termos de busca</p>
            <button class="btn btn-primary" onclick="App.components.nftSearch.clear()">
                <i class="fas fa-redo me-2"></i>Ver Todos os NFTs
            </button>
        </div>
    </section>

    <!-- Paginação (mockado) -->
    <section class="pagination-section">
        <div class="container">
            <div class="pagination">
                <button class="page-btn" disabled>« Anterior</button>
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn">Próximo »</button>
            </div>
        </div>
    </section>
</div>






<script>
// Função para visualizar NFT
function viewNFT(id) {
    window.location.href = '/nft/' + id;
}

// Função para comprar NFT
function buyNFT(id) {
    alert('Comprando NFT #' + id + '!\n(Implementar integração com blockchain)');
}

// Função para favoritar
function toggleFavorite(id) {
    const btn = event.target;
    if (btn.innerHTML === '♡') {
        btn.innerHTML = '❤️';
        btn.style.color = '#e53e3e';
    } else {
        btn.innerHTML = '♡';
        btn.style.color = '#666';
    }
}

// Filtros
document.addEventListener('DOMContentLoaded', function() {
    // Filtro por categoria
    const filterBtns = document.querySelectorAll('.filter-btn');
    const nftCards = document.querySelectorAll('.nft-card');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const category = this.dataset.category;
            
            // Remover active de todos os botões
            filterBtns.forEach(b => b.classList.remove('active'));
            // Adicionar active no clicado
            this.classList.add('active');
            
            // Filtrar cards
            nftCards.forEach(card => {
                if (category === 'todos' || card.dataset.category.includes(category)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
    
    // Filtro por preço e status
    const priceFilter = document.getElementById('price-filter');
    const statusFilter = document.getElementById('status-filter');
    
    function applyFilters() {
        const selectedPrice = priceFilter.value;
        const selectedStatus = statusFilter.value;
        
        nftCards.forEach(card => {
            let showCard = true;
            
            // Filtro de status
            if (selectedStatus && card.dataset.status !== selectedStatus) {
                showCard = false;
            }
            
            card.style.display = showCard ? 'block' : 'none';
        });
    }
    
    priceFilter?.addEventListener('change', applyFilters);
    statusFilter?.addEventListener('change', applyFilters);
});
</script>