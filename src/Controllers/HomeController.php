<!-- 
================================
ARQUIVO: src/Controllers/HomeController.php
================================
-->

<?php
class HomeController {
    public function index() {
        // Dados para a view
        $data = [
            'title' => 'NFT Marketplace - Home',
            'featured_nfts' => $this->getFeaturedNFTs(),
            'stats' => $this->getMarketplaceStats()
        ];
        
        // Renderizar a view
        $this->render('home/index', $data);
    }
    
    private function getFeaturedNFTs() {
        // Dados mockados para demonstração
        return [

            [
                'id' => 1,
                'title' => 'Shibu Rainbow',
                'price' => '2.0 ETH',
                'code'  => '#SHIBU001',
                'perfil' => 'raimbow',
                'status' => 'original',
                'image' => '/../assets/img/mascote/mascote-rainbow.svg',
                'creator' => 'Lobix'
            ],
                        
            [
                'id' => 2,
                'title' => 'Shibu Cyber',
                'price' => '2.0 ETH',
                'code'  => '#SHIBU002',
                'perfil' => 'cyber',
                'status' => 'cool',
                'image' => '/../assets/img/mascote/mascote-cyber.svg',
                'creator' => 'Lobix'
            ],
            [
                'id' => 3,
                'title' => 'Shibu Golden',
                'price' => '1.2 ETH',
                'code'  => '#SHIBU003',
                'perfil' => 'piscando',
                'status' => 'gold',
                'image' => '/../assets/img/mascote/mascote-golden.svg',
                'creator' => 'Lobix'
            ],
             [
                'id' => 4,
                'title' => 'Shibu Neon',
                'price' => '1.2 ETH',
                'code'  => '#SHIBU004',
                'perfil' => 'surpreso',
                'status' => 'neon',
                'image' => '/../assets/img/mascote/mascote-neon.svg',
                'creator' => 'Lobix'
            ]
        ];
    }
    
    private function getMarketplaceStats() {
        return [
            'total_nfts' => 1234,
            'total_users' => 5678,
            'total_volume' => '15,890 ETH'
        ];
    }
    
    private function render($view, $data = []) {
    extract($data);
    
    // Definir qual view será incluída no layout
    $view = $view; // já está correto
    
    // Incluir o layout principal que contém o CSS
    $layoutPath = "../src/Views/layouts/app.php";
    
    if (file_exists($layoutPath)) {
        include $layoutPath;
    } else {
        echo "Layout não encontrado: {$layoutPath}";
    }
    }
}