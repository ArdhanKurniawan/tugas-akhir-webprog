<?php
require_once 'config/database.php';

class KatalogModel {
    private $conn;
    private $table_name = "catalog";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function SemuaKatalogAktif() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE status = 1";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);
            
        } else {
            return false;
        }
    }
}