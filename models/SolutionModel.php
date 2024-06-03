<?php
require_once 'config/database.php';

class SolutionModel {
    private $conn;
    private $table_name = "solution";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function allSolution() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE status = 1";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);
            
        } else {
            return false;
        }
    }

    public function SolutionBySlug($slug) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE slug = :slug AND status = 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':slug', $slug, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }

    public function catalog_solution($idcat = null, $idsolution = null) {
        $query = "
            SELECT
                catalog.id as catalog_id,
                catalog.name as catalog_name,
                catalog.slug as catalog_slug,
                solution.id as solution_id,
                solution.name as solution_name,
                solution.slug as solution_slug
            FROM catalog_solution
            JOIN catalog ON catalog_solution.catalog_id = catalog.id
            JOIN solution ON catalog_solution.solution_id = solution.id
            WHERE catalog.status = 1 AND solution.status = 1
        ";

        $conditions = [];
        if ($idcat != null) $conditions[] = 'catalog_solution.catalog_id = :idcat';
        if ($idsolution != null) $conditions[] = 'catalog_solution.solution_id = :idsolution';

        if (!empty($conditions)) $query .= ' AND ' . implode(' AND ', $conditions);

        $query .= ' ORDER BY catalog.position ASC';

        $stmt = $this->conn->prepare($query);

        if ($idcat != null) $stmt->bindParam(':idcat', $idcat, PDO::PARAM_INT);
        if ($idsolution != null) $stmt->bindParam(':idsolution', $idsolution, PDO::PARAM_INT);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }
}