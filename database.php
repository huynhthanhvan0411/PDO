<?php 
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'mvc');

    class Database {
        public $conn = null;

        public function __construct() {
            $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
            try {
                $this->conn = new PDO($dsn, DB_USER, DB_PASSWORD);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
                die();
            }
        }

        public function getConnection() {
            return $this->conn;
        }
    }
?>