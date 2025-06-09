<?php
class Database {
    private $host = '127.0.0.1';
    private $db_name = 'salgados_da_sara';
    private $username = 'postgres';
    private $password = 'postgres';
    private $port = '5432';
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $dsn = "pgsql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name;
            $this->conn = new PDO($dsn, $this->username, $this->password);
            
            // Para PostgreSQL, usamos SET client_encoding ao invés de set names utf8
            $this->conn->exec("SET client_encoding TO 'UTF8'");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>