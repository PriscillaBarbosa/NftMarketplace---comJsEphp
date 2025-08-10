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
                            <img src="assets/img/mascote/mascote-happy.svg" alt="Mascote" class="mascote1-hero">    
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
        </div>
        <div class="col-lg-6">
            <div class="cube-container d-flex justify-content-center align-items-center">
                <div class="cube" id="hero-cube">
                    <div class="cube-face front">
                        <p class="mascote-nome mascote-happy">Shibu Happy</p>
                        <img src="assets/img/mascote/mascote-happy.svg" alt="" class="cube-mascote-happy">
                    </div>
                    <div class="cube-face back">
                        <p class="mascote-nome mascote-golden">Shibu Golden</p>
                        <img src="assets/img/mascote/mascote-golden.svg" alt="" class="cube-mascote-golden">
                    </div>
                    <div class="cube-face right">
                        <p class="mascote-nome mascote-cyber">Shibu Cyber</p>
                        <img src="assets/img/mascote/mascote-cyber.svg" alt="" class="cube-mascote-cyber">
                    </div>
                    <div class="cube-face left">
                        <p class="mascote-nome mascote-rainbow">Shibu Rainbow</p>
                        <img src="assets/img/mascote/mascote-rainbow.svg" alt="" class="cube-mascote-rainbow">
                    </div>
                    <div class="cube-face top">
                        <p class="mascote-nome mascote-green">Shibu Green</p>
                         <img src="assets/img/mascote/mascote-caolho.svg" alt="" class="cube-mascote-caolho">
                    </div>
                    <div class="cube-face bottom">
                        <p class="mascote-nome mascote-party">Shibu Party</p>
                        <img src="assets/img/mascote/mascote-party.svg" alt="" class="cube-mascote-party">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="numbers-section py-5">
    <div class="container">
        <div class="row g-4 my-4">
            <div class="col-md-4">
                <div class="stats-card anima-card d-flex flex-column text-white text-center p-4 h-100">
                    <i class="fa-solid fa-gem mb-4 mt-2"></i>
                    <h3 class="fw-bold numero-contador" data-numero="<?= $stats['total_nfts'] ?>">0</h3>
                    <p class="mb-0 texto-anima-card">NFTs Disponíveis</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card anima-card d-flex flex-column text-white text-center p-4 h-100">
                    <i class="fa-solid fa-people-group mb-4 mt-2"></i>
                    <h3 class="fw-bold numero-contador" data-numero="<?= $stats['total_users'] ?>">0</h3>
                    <p class="mb-0 texto-anima-card">Usuários Ativos</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card anima-card d-flex flex-column text-white text-center p-4 h-100">
                    <i class="fas fa-boxes mb-4 mt-2"></i>
                    <h3 class="fw-bold numero-contador" data-numero="<?= preg_replace('/[^0-9]/', '', $stats['total_volume']) ?>">0</h3>
                    <p class="mb-0 texto-anima-card">Volume Total</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured NFTs Section -->
<section class="feature-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold title-section mt-5 mb-5">NFTs em Destaque</h2>
            <p class="lead">Descubra nossa coleção exclusiva de NFTs com arte digital exclusiva e nosso adorado mascote Shibu do universo Lobix.</p>
        </div>
        <div class="d-flex justify-content-center align-items-center my-5 py-3">
            <div class="d-flex">
                <p class="titulo-simbolo mb-0 mx-1"></p>
                <p class="titulo-simbolo mb-0 mx-1"></p>
                <p class="titulo-simbolo mb-0 mx-1"></p>
                <p class="titulo-simbolo mb-0 mx-1 me-4"></p>
            </div>
            <h3 class="subtitle-feature">SHIBU COLEÇÃO PREVIEW</h3>
            <div class="d-flex">
                <p class="titulo-simbolo mb-0 mx-1 ms-4"></p>
                <p class="titulo-simbolo mb-0 mx-1"></p>
                <p class="titulo-simbolo mb-0 mx-1"></p>
                <p class="titulo-simbolo mb-0 mx-1"></p>
            </div>
        </div>
        <div class="row g-2">
            <?php foreach ($featured_nfts as $nft): ?>
            <div class="col-lg-3 col-md-4">

                <div class="card nft-card h-100">
                            
                        <div class="position-relative">
                            
                            <div class="nft-image-container d-flex justify-content-center align-items-center m-4">
                                <img src="<?= $nft['image'] ?>" class="rounded nft-image" alt="<?= $nft['title'] ?>">
                            </div>
                            
                            <div class="creator-badge">
                                <i class="fas fa-user me-1"></i>
                                <?= $nft['creator'] ?>
                            </div>
                           
                        </div>
                    <div class="card-body p-2">
                        <div class="d-flex justify-content-between align-items-center mx-3">
                            <p class="card-title mb-0 pe-2"><?= $nft['title'] ?></p>
                            <p class="preco mb-0"><?= $nft['price'] ?></p>
                        </div>
                        <div class="d-flex align-items-center my-1">
                            <p class="codigo mb-0 me-2"><?= $nft['code'] ?></p>
                            <span class="curtir">
                                <i class="fas fa-heart"></i>
                            </span>
                        </div>
                        <div class="d-flex mb-4 align-items-center justify-content-between mx-3">
                            <span class="perfil d-flex justify-content-center align-items-center me-2"><?= $nft['perfil'] ?></span>
                            <span class="status d-flex justify-content-center align-items-center"><?= $nft['status'] ?></span>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <button class="btn btn-comprar">
                                <i class="fas fa-shopping-cart me-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="">
            <div class="d-flex justify-content-center align-text-center mt-5 pt-5">
                <p class="titulo-simbolo mb-0 mx-1"></p>
                <p class="titulo-simbolo mb-0 mx-1"></p>
                <p class="titulo-simbolo mb-0 mx-1"></p>
                <p class="titulo-simbolo mb-0 mx-1 me-4"></p>
                <h3 class="subtitle-feature">SHIBU COLEÇÃO PREVIEW</h3>
                <p class="titulo-simbolo mb-0 mx-1 ms-4"></p>
                <p class="titulo-simbolo mb-0 mx-1"></p>
                <p class="titulo-simbolo mb-0 mx-1"></p>
                <p class="titulo-simbolo mb-0 mx-1"></p>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-5">
                <div class="card ms-5">
                    <div class="card-capa">
                        <div class="capa-imgs d-flex justify-content-center align-items-center m-4">
                            <img src="<?= $nft['image'] ?>" class="rounded img1" alt="<?= $nft['title'] ?>">
                            <img src="<?= $nft['image'] ?>" class="rounded img2" alt="<?= $nft['title'] ?>">
                            <img src="<?= $nft['image'] ?>" class="rounded img3" alt="<?= $nft['title'] ?>">
                            <img src="<?= $nft['image'] ?>" class="rounded img4" alt="<?= $nft['title'] ?>">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">CIBOX #001</h5>
                        <div class="">
                            <p class="card-text my-3">#001 Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-start align-items-center">
                                <a href="#" class="preco mb-0 me-1">0.09</a>
                                <p class="text-moeda mb-0">ETH</p>
                            </div>
                            <a href="#" class="btn ver-mais">Ver Mais</a>
                        </div>
                    </div>
                </div>
                <div class="card ms-5">
                    <div class="card-capa">
                        <div class="capa-imgs d-flex justify-content-center align-items-center m-4">
                            <img src="<?= $nft['image'] ?>" class="rounded img1" alt="<?= $nft['title'] ?>">
                            <img src="<?= $nft['image'] ?>" class="rounded img2" alt="<?= $nft['title'] ?>">
                            <img src="<?= $nft['image'] ?>" class="rounded img3" alt="<?= $nft['title'] ?>">
                            <img src="<?= $nft['image'] ?>" class="rounded img4" alt="<?= $nft['title'] ?>">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">CIBOX #001</h5>
                        <div class="">
                            <p class="card-text my-3">#001 Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-start align-items-center">
                                <a href="#" class="preco mb-0 me-1">0.09</a>
                                <p class="text-moeda mb-0">ETH</p>
                            </div>
                            <a href="#" class="btn ver-mais">Ver Mais</a>
                        </div>
                    </div>
                </div>
                <div class="card ms-5">
                    <div class="card-capa">
                        <div class="capa-imgs d-flex justify-content-center align-items-center m-4">
                            <img src="<?= $nft['image'] ?>" class="rounded img1" alt="<?= $nft['title'] ?>">
                            <img src="<?= $nft['image'] ?>" class="rounded img2" alt="<?= $nft['title'] ?>">
                            <img src="<?= $nft['image'] ?>" class="rounded img3" alt="<?= $nft['title'] ?>">
                            <img src="<?= $nft['image'] ?>" class="rounded img4" alt="<?= $nft['title'] ?>">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">CIBOX #001</h5>
                        <div class="">
                            <p class="card-text my-3">#001 Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-start align-items-center">
                                <a href="#" class="preco mb-0 me-1">0.09</a>
                                <p class="text-moeda mb-0">ETH</p>
                            </div>
                            <a href="#" class="btn ver-mais">Ver Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="text-center mt-5">
            <a href="/nfts" class="btn btn-lg ver-todos">
                <i class="fas fa-eye me-2"></i>
                Ver Todos os NFTs
            </a>
        </div>
    </div>
</section>
<section class="section-beneficios d-flex justify-content-center">
    <div class="conteudo-beneficios my-5">
        <div class="d-flex justify-content-start">
            <p class="caracteristicas">CARACTERISTICAS</p>
            <div class="icone-detalhe mx-1 mt-2"></div>
            <div class="icone-detalhe mx-1 mt-2"></div>
            <div class="icone-detalhe mx-1 mt-2"></div>
            <div class="icone-detalhe mx-1 mt-2"></div>
            <div class="icone-detalhe mx-1 mt-2"></div>
        </div>
        <h5 class="beneficios">QUAIS SEUS BENEFÍCIOS?</h5>
        <div class="cards-beneficios d-flex justify-content-center align-items-center py-5">
            <div class="card card-beneficios">
                <div class="card-body">
                    <div class="d-flex align-items-top">
                        <div class="background-componente d-flex align-items-center justify-content-center">
                            <img src="assets/img/Componente1.svg" alt="" class="componente">
                        </div>
                        <p class="ms-3 card-title">Mais recentes</p>
                    </div>
                    <div class="mt-2">
                        <p class="texto-componente">
                            Globally impact clicks-and-mortar intrinsically plagiarize web-
                            enabledopportunities nft.
                        </p>  
                    </div>
                </div>
            </div>
            <div class="card card-beneficios2 mx-5">
                <div class="card-body">
                    <div class="d-flex align-items-top">
                        <div class="background-componente2 d-flex align-items-center justify-content-center">
                            <img src="assets/img/Componente2.svg" alt="" class="componente">
                        </div>
                        <p class=" mr-1 card-title">Metaverso Pronto</p>
                    </div>
                    <div class="mt-2">
                        <p class="texto-componente">
                            Globally impact clicks-and-mortar intrinsically plagiarize web-
                            enabledopportunities nft.
                        </p>  
                    </div>
                </div>
            </div>
            <div class="card card-beneficios3">
                <div class="card-body">
                    <div class="d-flex align-items-top">
                        <div class="background-componente3 d-flex align-items-center justify-content-center">
                            <img src="assets/img/Componente3.svg" alt="" class="componente">
                        </div>
                        <p class="mr-1 card-title">Proteção do Usuário</p>
                    </div>
                    <div class="mt-2">
                        <p class="texto-componente">
                            Globally impact clicks-and-mortar intrinsically plagiarize web-
                            enabledopportunities nft.
                        </p>  
                    </div>
                </div>
            </div>
        </div>
    </div>            
</section>
<section class="comoComprar-section d-flex justify-content-center">
    <div class="comoComprar-conteudo d-flex justify-content-center">
        <div class="comoComprar-textos">
            <div class="processo d-flex flex-column justify-content-center">
                <p class="processo-texto">PROCESSO -----------</p>
                <h5 class="card-title">HOW TO MINT?</h5>

            </div>
        </div>
        <div class="comoComprar-etapas">

        </div>
    </div>
</section>

<!-- Newsletter Section 
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
</section>-->