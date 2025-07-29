/ ================================
// ARQUIVO: src/Core/Database.php
// ================================
<?php
class Database {
    private static $instance = null;
    private $connection;
    
    private function __construct() {
        // Configuração básica para SQLite (para desenvolvimento)
        try {
            $this->connection = new PDO('sqlite:../database/nft_marketplace.db');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }
    
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function getConnection() {
        return $this->connection;
    }
}
