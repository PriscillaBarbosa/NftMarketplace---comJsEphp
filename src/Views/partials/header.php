<!-- 
================================ 
ARQUIVO: src/Views/partials/header.php
================================ 
-->

<nav class="navbar navbar-expand-lg navbar-dark gradient-bg">
    <div class="container">
        <a class="navbar-brand" href="/">
            <i class="fas fa-cube me-2"></i>
            NFT Marketplace
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="fas fa-home me-1"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/nfts">
                        <i class="fas fa-images me-1"></i>
                        Explorar NFTs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/create">
                        <i class="fas fa-plus me-1"></i>
                        Criar NFT
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">
                        <i class="fas fa-user me-1"></i>
                        Perfil
                    </a>
                </li>
                <li class="nav-item ms-2">
                    <a class="btn btn-outline-light btn-sm" href="/login">
                        <i class="fas fa-sign-in-alt me-1"></i>
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
