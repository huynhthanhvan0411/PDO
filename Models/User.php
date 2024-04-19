<?php
require_once 'database.php';

class User {
    public $db;
    
    public function __construct() {
        $this->db = new Database();
    }

    public function getAllUsers() {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>