<!--
================================ 
ARQUIVO: src/Views/home/index.php
================================ 
-->
<!-- Hero Section -->
<section class="hero-section gradient-bg text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">
                    Descubra, Colecione e Venda
                    <span class="text-warning">NFTs Extraordinários</span>
                </h1>
                <p class="lead mb-4">
                    O maior marketplace de NFTs do Brasil. Compre, venda e descubra arte digital única.
                </p>
                <div class="d-flex gap-3">
                    <a href="/nfts" class="btn btn-primary-custom btn-lg">
                        <i class="fas fa-rocket me-2"></i>
                        Explorar NFTs
                    </a>
                    <a href="/create" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-paint-brush me-2"></i>
                        Criar NFT
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <img src="https://via.placeholder.com/500x400?text=NFT+Hero+Image" 
                         alt="NFT Hero" 
                         class="img-fluid rounded-4 shadow-lg">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                        <div class="bg-dark bg-opacity-75 text-white p-3 rounded">
                            <i class="fas fa-play fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5 gradient-bg">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="stats-card text-white text-center p-4 h-100">
                    <i class="fas fa-images fa-3x mb-3 text-warning"></i>
                    <h3 class="fw-bold"><?= number_format($stats['total_nfts']) ?></h3>
                    <p class="mb-0">NFTs Disponíveis</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card text-white text-center p-4 h-100">
                    <i class="fas fa-users fa-3x mb-3 text-warning"></i>
                    <h3 class="fw-bold"><?= number_format($stats['total_users']) ?></h3>
                    <p class="mb-0">Usuários Ativos</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card text-white text-center p-4 h-100">
                    <i class="fas fa-ethereum fa-3x mb-3 text-warning"></i>
                    <h3 class="fw-bold"><?= $stats['total_volume'] ?></h3>
                    <p class="mb-0">Volume Total</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured NFTs Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-dark">NFTs em Destaque</h2>
            <p class="lead text-muted">Descubra as coleções mais populares do momento</p>
        </div>
        
        <div class="row g-4">
            <?php foreach ($featured_nfts as $nft): ?>
            <div class="col-lg-4 col-md-6">
                <div class="card nft-card h-100">
                    <div class="position-relative">
                        <img src="<?= $nft['image'] ?>" 
                             class="card-img-top" 
                             alt="<?= $nft['title'] ?>"
                             style="height: 300px; object-fit: cover;">
                        <div class="creator-badge">
                            <i class="fas fa-user me-1"></i>
                            <?= $nft['creator'] ?>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-3"><?= $nft['title'] ?></h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price-tag">
                                <i class="fab fa-ethereum me-1"></i>
                                <?= $nft['price'] ?>
                            </span>
                            <div class="btn-group">
                                <button class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-shopping-cart me-1"></i>
                                    Comprar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-5">
            <a href="/nfts" class="btn btn-primary-custom btn-lg">
                <i class="fas fa-eye me-2"></i>
                Ver Todos os NFTs
            </a>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-5 gradient-bg text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h3 class="fw-bold mb-3">Fique por Dentro das Novidades</h3>
                <p class="mb-4">Receba as últimas atualizações sobre NFTs, lançamentos e oportunidades exclusivas.</p>
                <form class="d-flex gap-2">
                    <input type="email" 
                           class="form-control form-control-lg" 
                           placeholder="Seu melhor e-mail">
                    <button type="submit" class="btn btn-warning btn-lg px-4">
                        <i class="fas fa-paper-plane me-1"></i>
                        Assinar
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>