<?php
require_once 'config/database.php';

class UserModel {
    private $conn;
    private $table_name = "user";

    public $id;
    public $name;
    public $email;
    public $password;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAllUsers() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        } else {
            return false;
        }
    }

    public function getUser($id, $name, $email, $password) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE 1=1";
        
        if ($id !== null) $query .= " AND user.id = :id";
        if ($name !== null) $query .= " AND user.nama = :nama";
        if ($email !== null) $query .= " AND user.email = :email";
        if ($password !== null) $query .= " AND user.password = :password";
        
        $stmt = $this->conn->prepare($query);
        
        if ($id !== null) $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        if ($name !== null) $stmt->bindParam(':nama', $name, PDO::PARAM_STR);
        if ($email !== null) $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        if ($password !== null) $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_OBJ);

        } else {
            return false;
        }
    }
    
    public function addUser($data) {
        $query = "INSERT INTO " . $this->table_name . " (nama, whatsapp, email, status, password) VALUES (:nama, :whatsapp, :email, :status, :password)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nama', $data['nama'], PDO::PARAM_STR);
        $stmt->bindParam(':whatsapp', $data['whatsapp'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(':status', $data['status'], PDO::PARAM_INT);
        $stmt->bindParam(':password', $data['password'], PDO::PARAM_STR);

        if ($stmt->execute()) return true;
        return false;
    }

    public function updateUser($id, $data) {
        $query = "UPDATE " . $this->table_name . " SET nama = :nama, whatsapp = :whatsapp, email = :email, status = :status, password = :password WHERE id = :id";
        $stmt = $this->conn->prepare($query);
    
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nama', $data['nama'], PDO::PARAM_STR);
        $stmt->bindParam(':whatsapp', $data['whatsapp'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(':status', $data['status'], PDO::PARAM_INT);
        $stmt->bindParam(':password', $data['password'], PDO::PARAM_STR);
    
        if ($stmt->execute()) return true;
        return false;
    }

    public function deleteUser($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}