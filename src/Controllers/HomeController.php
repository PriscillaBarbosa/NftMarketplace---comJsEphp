<?php
namespace App\Controllers;
use App\Models\NFT;

class HomeController {
    public function index() {
        $nftModel = new NFT();
        $featuredNFTs = $nftModel->getFeatured(6);
        
        include 'src/Views/home/index.php';
    }
}