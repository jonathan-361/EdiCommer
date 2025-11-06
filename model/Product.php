<?php
require_once 'Database.php';

class Product {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $stmt = $this->conn->query("SELECT * FROM productos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nombre, $precio, $categoria, $stock) {
        $stmt = $this->conn->prepare("INSERT INTO productos (nombre, precio, categoria, stock) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$nombre, $precio, $categoria, $stock]);
    }

    public function update($id, $nombre, $precio, $categoria, $stock) {
        $stmt = $this->conn->prepare("UPDATE productos SET nombre=?, precio=?, categoria=?, stock=? WHERE id=?");
        return $stmt->execute([$nombre, $precio, $categoria, $stock, $id]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM productos WHERE id=?");
        return $stmt->execute([$id]);
    }
}
