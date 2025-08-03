<!--
================================ 
ARQUIVO: src/Views/home/index.php
================================ 
-->
<!-- Hero Section -->
<section class="hero-section px-5">
    <div class="container-fluid">
        <div class="particle" style="top: 10%; left: 80%; animation-delay: 0s;"></div>
        <div class="particle" style="top: 20%; left: 85%; animation-delay: 1s;"></div>
        <div class="particle" style="top: 70%; left: 75%; animation-delay: 2s;"></div>
        <div class="particle" style="top: 80%; left: 90%; animation-delay: 3s;"></div>
        <div class="particle" style="top: 40%; left: 70%; animation-delay: 4s;"></div>
        <div class="row align-items-center">
        <div class="col-lg-6">
            <div class="hero-box">
                <div class="hero-box-info">
                    <div class="hero-boxmin d-flex justify-content-end align-items-center">
                        <div class="hero-box-title">
                            <img src="assets/img/mascote/mascote-versao1.svg" alt="Mascote" class="mascote1-hero">    
                        </div>
                        <div class="hero-mascote-nome">
                            <p class="mascote-texto d-flex justify-content-center">MEET SHIBU - NOSSO MASCOTE</p>
                        </div>
                    </div>
                    <div class="hero-boxmin-chamada d-flex flex-column justify-content-end align-items-end">
                        <p class="hero-chamada mb-0">A melhor</p>
                        <div class="hero-chamada-gradiente mb-0">
                            <p class="chamada-gradiente-texto mb-0">Coleção de NFT's</p>
                        </div>
                    </div>
                    <div class="hero-box-dados">
                        <div class="box-dados d-flex justify-content-end align-items-center">
                            <a href="#" class="dados-number1">1400</a>
                            <p class="dados-simbolo mb-0 mx-1"> | </p>
                            <a href="#" class="dados-number2">3000</a>
                            <p class="dados-texto mb-0"> MINTIED </p>
                        </div>
                    </div>
                </div>
                <div class="hero-box-valor">
                    <div class="box-buttons d-flex justify-content-end mt-4 mb-0">
                        <button class="btn btn-compre-agora me-3 px-4">COMPRE AGORA</button>
                        <button class="btn btn-lista-branca px-4">LISTA BRANCA</button>
                    </div>
                </div>
                <div class="hero-box-info-valor">
                    <div class="hero-box-infos d-flex justify-content-end mt-4 mb-0">
                        <div class="d-flex box-info-texto justify-content-end align-items-center me-3">
                            <span class="circulo circulo-verde me-2"></span>MAX 
                            <span class="texto-info texto-info-nft me-1 ms-1">2 NFT</span>
                        POR CARTEIRA
                        </div>
                        <div class="d-flex box-info-texto justify-content-end align-items-center mb-0">
                            <span class="circulo circulo-rosa me-2"></span>
                            <p class="mb-0">PRICE 
                                <span class="texto-info-eth me-1 ms-1">0.09 ETH</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            

            <!--<div class="d-flex gap-3">
                <a href="/nfts" class="btn btn-primary-custom btn-lg">
                    <i class="fas fa-rocket me-2"></i>
                    Explorar NFTs
                </a>
                <a href="/create" class="btn btn-outline-light btn-lg">
                    <i class="fas fa-paint-brush me-2"></i>
                    Criar NFT
                </a>
            </div>-->
        </div>
        <div class="col-lg-6">
            <div class="cube-container d-flex justify-content-center align-items-center">
                <div class="cube" id="hero-cube">
                    <div class="cube-face front">NFT #001</div>
                    <div class="cube-face back">NFT #002</div>
                    <div class="cube-face right">NFT #003</div>
                    <div class="cube-face left">NFT #004</div>
                    <div class="cube-face top">NFT #005</div>
                    <div class="cube-face bottom">NFT #006</div>
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