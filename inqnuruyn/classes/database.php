<?php
class Database {
    private $host = "localhost";
    private $db_name = "catalog_db";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = new mysqli($this->host, $this->username, $this->password);
        if ($this->conn->connect_error) { die("Միացման սխալ: " . $this->conn->connect_error); }

        $this->conn->query("CREATE DATABASE IF NOT EXISTS $this->db_name");
        $this->conn->select_db($this->db_name);

        $this->conn->query("CREATE TABLE IF NOT EXISTS users(
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL UNIQUE,
            email VARCHAR(100) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL
        )");

        $this->conn->query("CREATE TABLE IF NOT EXISTS products(
            id INT AUTO_INCREMENT PRIMARY KEY,
            user_id INT NOT NULL,
            title VARCHAR(100) NOT NULL,
            description TEXT,
            price DECIMAL(10,2) NOT NULL,
            image VARCHAR(255), 
            FOREIGN KEY(user_id) REFERENCES users(id)
        )");
        return $this->conn;
    }
}
?>