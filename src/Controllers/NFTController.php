<?php
class NFTController {
    public function index() {

        // Dados para a galeria de NFTs
        $data = [
            'title' => 'Galeria de NFTs - Marketplace',
            'nfts' => $this->getAllNFTs(),
            'categories' => $this->getCategories(),
            'filters' => $this->getFilters()
        ];
        
        // Renderizar a view da galeria
        $this->render('nfts/index', $data);
    }
    
    public function show($id) {
        // Dados para NFT específico
        $data = [
            'title' => 'Detalhes do NFT',
            'nft' => $this->getNFTById($id)
        ];
        
        $this->render('nfts/show', $data);
    }
    
    private function getAllNFTs() {
        // Dados mockados para a galeria
        return [
            [
                'id' => 1,
                'title' => 'Shibu Rainbow',
                'price' => '2.0 ETH',
                'code'  => '#SHIBU001',
                'perfil' => 'rainbow',
                'status' => 'original',
                'image' => '/../assets/img/mascote/mascote-rainbow.svg',
                'creator' => 'Shibu',
                'category' => 'Arte Digital'
            ],
            [
                'id' => 2,
                'title' => 'Shibu Cyber',
                'price' => '2.0 ETH',
                'code'  => '#SHIBU002',
                'perfil' => 'cyber',
                'status' => 'cool',
                'image' => '/../assets/img/mascote/mascote-cyber.svg',
                'creator' => 'Shibu',
                'category' => 'Futurista'
            ],
            [
                'id' => 3,
                'title' => 'Shibu Golden',
                'price' => '1.2 ETH',
                'code'  => '#SHIBU003',
                'perfil' => 'piscando',
                'status' => 'gold',
                'image' => '/../assets/img/mascote/mascote-golden.svg',
                'creator' => 'Shibu',
                'category' => 'Luxo'
            ],
            [
                'id' => 4,
                'title' => 'Shibu Neon',
                'price' => '1.2 ETH',
                'code'  => '#SHIBU004',
                'perfil' => 'surpreso',
                'status' => 'neon',
                'image' => '/../assets/img/mascote/mascote-neon.svg',
                'creator' => 'Shibu',
                'category' => 'Neon'
            ],
            [
                'id' => 5,
                'title' => 'Shibu Classic',
                'price' => '0.8 ETH',
                'code'  => '#SHIBU005',
                'perfil' => 'classic',
                'status' => 'rare',
                'image' => '/../assets/img/mascote/mascote-rainbow.svg',
                'creator' => 'Shibu',
                'category' => 'Clássico'
            ],
            [
                'id' => 6,
                'title' => 'Shibu Fire',
                'price' => '3.5 ETH',
                'code'  => '#SHIBU006',
                'perfil' => 'fire',
                'status' => 'legendary',
                'image' => '/../assets/img/mascote/mascote-cyber.svg',
                'creator' => 'Shibu',
                'category' => 'Lendário'
            ]
        ];
    }
    
    private function getCategories() {
        return [
            'Todos',
            'Arte Digital',
            'Futurista', 
            'Luxo',
            'Neon',
            'Clássico',
            'Lendário'
        ];
    }
    
    private function getFilters() {
        return [
            'price_ranges' => [
                '0-1 ETH',
                '1-2 ETH', 
                '2-5 ETH',
                '5+ ETH'
            ],
            'status' => [
                'original',
                'cool',
                'gold',
                'neon',
                'raro',
                'legendário'
            ]
        ];
    }
    
    private function getNFTById($id) {
        $nfts = $this->getAllNFTs();
        foreach($nfts as $nft) {
            if($nft['id'] == $id) {
                return $nft;
            }
        }
        return null;
    }
    
    private function render($view, $data = []) {
    extract($data);
    
    // CORRIGIDO: Manter a variável $view disponível para o layout
    // (antes estava sendo perdida)
    
    // Incluir o layout principal que contém o CSS  
    $layoutPath = "../src/Views/layouts/app.php";
    
        if (file_exists($layoutPath)) {
            include $layoutPath;
        } else {
            echo "Layout não encontrado: {$layoutPath}";
        }
    }
}