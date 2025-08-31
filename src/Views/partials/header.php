<!-- 
================================ 
ARQUIVO: src/Views/partials/header.php
================================ 
-->

<nav class="navbar navbar-expand-lg px-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="assets/img/mascote/mascote-happy.svg" alt="Mascote">
        </a>
        <div class="header-logo-titulo d-flex align-items-center justify-content-center">
            <img src="assets/img/Margin.svg" alt="Simbolo" class="simbolo mb-0 pt-1">
            <h1 class="header-titulo mb-0">Lobix</h1>
        </div>
        
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
                        <i class="fa-solid fa-gem me-1"></i>
                        NFTs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/create">
                        <i class="fas fa-plus me-1"></i>
                        Coleções
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">
                        <i class="fa-solid fa-route me-1"></i>
                        Roadmap
                    </a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="/profile">
                        <i class="fa fa-question-circle me-1"></i>
                        FAQ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">
                        <i class="fa fa-question-circle me-1"></i>
                        Novo
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
