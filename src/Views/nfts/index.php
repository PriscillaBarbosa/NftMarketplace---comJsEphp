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
            <div class="filters-wrapper">
                <!-- Categorias -->
                <div class="filter-group">
                    <label>Categorias:</label>
                    <div class="filter-buttons">
                        <?php foreach($categories as $category): ?>
                            <button class="filter-btn" data-category="<?= strtolower($category) ?>">
                                <?= $category ?>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Faixa de Preço -->
                <div class="filter-group">
                    <label>Preço:</label>
                    <select class="filter-select" id="price-filter">
                        <option value="">Todos os preços</option>
                        <?php foreach($filters['price_ranges'] as $range): ?>
                            <option value="<?= $range ?>"><?= $range ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Status -->
                <div class="filter-group">
                    <label>Status:</label>
                    <select class="filter-select" id="status-filter">
                        <option value="">Todos os status</option>
                        <?php foreach($filters['status'] as $status): ?>
                            <option value="<?= $status ?>"><?= ucfirst($status) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Grid de NFTs -->
    <section class="nft-grid-section">
        <div class="container">
            <div class="nft-grid">
                <?php foreach($nfts as $nft): ?>
                    <div class="nft-card" data-category="<?= strtolower($nft['category']) ?>" data-status="<?= $nft['status'] ?>">
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

<style>





.filters-section {
    padding: 20px 0;
    border-bottom: 1px solid #eee;
    margin-bottom: 30px;
}

.filters-wrapper {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    align-items: center;
}

.filter-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.filter-group label {
    font-weight: 600;
    color: #333;
}

.filter-buttons {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.filter-btn {
    padding: 8px 16px;
    border: 2px solid #ddd;
    background: white;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.filter-btn:hover,
.filter-btn.active {
    background: #667eea;
    color: white;
    border-color: #667eea;
}

.filter-select {
    padding: 8px 12px;
    border: 2px solid #ddd;
    border-radius: 8px;
    background: white;
    cursor: pointer;
}

.nft-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 30px;
    margin: 30px 0;
}

.nft-card {
    background: white;
    border-radius: 16px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid #f0f0f0;
}

.nft-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 48px rgba(0,0,0,0.15);
}

.nft-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.nft-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.nft-card:hover .nft-image img {
    transform: scale(1.05);
}

.nft-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.nft-card:hover .nft-overlay {
    opacity: 1;
}

.btn-view-details {
    padding: 12px 24px;
    background: #667eea;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: background 0.3s ease;
}

.btn-view-details:hover {
    background: #5a67d8;
}

.nft-info {
    padding: 20px;
}

.nft-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 12px;
}

.nft-title {
    font-size: 1.3rem;
    font-weight: 700;
    color: #2d3748;
    margin: 0;
}

.nft-code {
    font-size: 0.9rem;
    color: #666;
    background: #f7fafc;
    padding: 4px 8px;
    border-radius: 6px;
}

.nft-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
}

.nft-creator {
    color: #666;
}

.category-tag {
    background: #e2e8f0;
    color: #4a5568;
    padding: 4px 12px;
    border-radius: 12px;
    font-size: 0.85rem;
    font-weight: 500;
}

.nft-status {
    margin-bottom: 12px;
}

.status-badge {
    padding: 4px 12px;
    border-radius: 12px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
}

.status-original { background: #bee3f8; color: #2b6cb0; }
.status-cool { background: #c6f6d5; color: #276749; }
.status-gold { background: #faf089; color: #744210; }
.status-neon { background: #fed7e2; color: #97266d; }
.status-rare { background: #fbb6ce; color: #97266d; }
.status-legendary { background: #fbd38d; color: #7c2d12; }

.nft-price {
    margin-bottom: 16px;
}

.price {
    font-size: 1.4rem;
    font-weight: 700;
    color: #2d3748;
}

.nft-actions {
    display: flex;
    gap: 10px;
    align-items: center;
}

.btn-buy {
    flex: 1;
    padding: 12px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: transform 0.2s ease;
}

.btn-buy:hover {
    transform: scale(1.02);
}

.btn-favorite {
    width: 40px;
    height: 40px;
    border: 2px solid #e2e8f0;
    background: white;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1.2rem;
    transition: all 0.3s ease;
}

.btn-favorite:hover {
    border-color: #667eea;
    color: #667eea;
}

.pagination-section {
    padding: 40px 0;
    text-align: center;
}

.pagination {
    display: inline-flex;
    gap: 10px;
}

.page-btn {
    padding: 10px 16px;
    border: 1px solid #ddd;
    background: white;
    cursor: pointer;
    border-radius: 6px;
    transition: all 0.3s ease;
}

.page-btn:hover:not(:disabled) {
    background: #667eea;
    color: white;
    border-color: #667eea;
}

.page-btn.active {
    background: #667eea;
    color: white;
    border-color: #667eea;
}

.page-btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Responsivo */
@media (max-width: 768px) {
    .nft-grid {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    }
    
    .filters-wrapper {
        flex-direction: column;
        gap: 15px;
    }
    
    .gallery-title {
        font-size: 2rem;
    }
}
</style>

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