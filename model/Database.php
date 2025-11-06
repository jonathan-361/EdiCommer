<?php
class Database {
    private static $instance = null;
    private $connection;

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "edicommer";

    private function __construct() {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", 
                                        $this->user, $this->pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}
