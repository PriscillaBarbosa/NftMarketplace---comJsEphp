/ ================================
// ARQUIVO: src/Controllers/HomeController.php
// ================================
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
                'title' => 'Digital Art #001',
                'price' => '0.5 ETH',
                'image' => 'https://via.placeholder.com/300x300?text=NFT+1',
                'creator' => 'Artist1'
            ],
            [
                'id' => 2,
                'title' => 'Crypto Punk #123',
                'price' => '2.0 ETH',
                'image' => 'https://via.placeholder.com/300x300?text=NFT+2',
                'creator' => 'Artist2'
            ],
            [
                'id' => 3,
                'title' => 'Abstract Collection',
                'price' => '1.2 ETH',
                'image' => 'https://via.placeholder.com/300x300?text=NFT+3',
                'creator' => 'Artist3'
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
        $viewPath = "../src/Views/{$view}.php";
        
        if (file_exists($viewPath)) {
            include $viewPath;
        } else {
            echo "View não encontrada: {$view}";
        }
    }
}