<?php
class Product {
    private $conn;
    public function __construct($db) { $this->conn = $db; }

    public function add($user_id, $title, $description, $price, $image) {
        $stmt = $this->conn->prepare("INSERT INTO products (user_id, title, description, price, image) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issds", $user_id, $title, $description, $price, $image);
        return $stmt->execute();
    }

    public function getAll() {
        return $this->conn->query("SELECT p.*, u.username FROM products p JOIN users u ON p.user_id = u.id ORDER BY p.id DESC");
    }
}
?>