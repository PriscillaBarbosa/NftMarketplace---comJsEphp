<?

namespace APP\Core;

class Database {
    private static $instance = null;
    private $connection;

    private function __construct() {
        $host = $_ENV['D_HOST'];
        $dbname = $_ENV['D_NAME'];
        $username = $_ENV['D_USER']; 
        $password = $_ENV['D_PASSWORD']; 
        
       try {
            $this->connection = new \PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8",
                $username,
                $password,
                [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]
            );
        } catch (\PDOException $e) {
            die("Erro de conexão: " . $e->getMessage());
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
