<?php
require_once 'config/database.php';

class ProdukModel {
    private $conn;
    private $table_name = "product";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function ProductBySlug($slug)
    {
        $query = "
            SELECT *
            FROM product
            WHERE product.slug = :slug
            AND product.product_status = 1
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':slug', $slug, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }

    public function product_catalog($id)
    {
        $query = "
            SELECT 
                product_catalog.*,
                catalog.name, 
                catalog.slug, 
                catalog.id
            FROM product
            JOIN product_catalog ON product_catalog.product_id = product.id
            JOIN catalog ON product_catalog.catalog_id = catalog.id
            WHERE product_catalog.product_id = :id
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }

    public function product_city($id)
    {
        $query = "
            SELECT 
                city.city_name, 
                city.city_slug, 
                city.id as city_id
            FROM product
            JOIN product_city ON product_city.product_id = product.id
            JOIN city ON product_city.city_id = city.id
            WHERE product_city.product_id = :id
            AND product.product_status = 1
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }

    public function product_area($id)
    {
        $query = "
            SELECT area_kirim.*
            FROM product
            JOIN product_area_kirim ON product_area_kirim.product_id = product.id
            JOIN area_kirim ON product_area_kirim.area_kirim_id = area_kirim.id
            WHERE product_area_kirim.product_id = :id
            AND product.product_status = 1
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }

    public function product_solution($id)
    {
        $query = "
            SELECT solution.id, solution.name, solution.slug
            FROM product
            JOIN product_solution ON product_solution.product_id = product.id
            JOIN solution ON product_solution.solution_id = solution.id
            WHERE product_solution.product_id = :id
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }


    public function ProductByCatalogID($id, $limit = 8, $sort = null) {
        $query = "
            SELECT
                product_catalog.id as pcid, 
                product_catalog.product_id, 
                product_catalog.catalog_id,
                product.id as pid,
                product.featured,
                product.price,
                product.name as pname,
                product.slug,
                product.saleprice,
                product.bestseller,
                product.stock,
                product.favorite,
                product.premium,
                product.product_status,
                product.product_created,
                product.startdate,
                product.expireddate
            FROM product
            JOIN product_catalog ON product_catalog.product_id = product.id
            WHERE product_catalog.catalog_id = :catalog_id
              AND product.product_status = 1
              AND product.addon = 0
            GROUP BY product.id
        ";

        $orderBys = [];
        if ($sort) {
            if ($sort == 1) {
                $orderBys[] = "product.product_created DESC";
                $orderBys[] = "product.bestseller DESC";
                $orderBys[] = "product.view DESC";
            } elseif ($sort == 2) {
                $orderBys[] = "product.product_created DESC";
            } elseif ($sort == 3) {
                $orderBys[] = "product.price ASC";
            } elseif ($sort == 4) {
                $orderBys[] = "product.price DESC";
            }
        }
        $orderBys[] = "product.position DESC";
        $orderBys[] = "product.favorite DESC";
        $orderBys[] = "product.favnumber DESC";

        if (!empty($orderBys)) $query .= " ORDER BY " . implode(", ", $orderBys);

        $query .= " LIMIT :limit";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':catalog_id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);
            
        } else {
            return false;
        }
    }

    public function product_rekomendasi_anda($id, $where, $limit = 15)
    {
        $query = "
            SELECT 
                product_catalog.id as pcid, 
                product_catalog.product_id, 
                product_catalog.catalog_id,
                product.id as pid,
                product.featured,
                product.price,
                product.name as pname,
                product.slug,
                product.saleprice,
                product.bestseller,
                product.stock,
                product.favorite,
                product.premium,
                product.product_status,
                product.product_created,
                product.startdate,
                product.expireddate
            FROM product
            JOIN product_catalog ON product_catalog.product_id = product.id
            WHERE product_catalog.catalog_id = :id
            AND product.product_status = 1
            AND product.addon = 0
        ";

        foreach ($where as $index => $val) {
            $query .= " AND product_catalog.catalog_id != :where$index";
        }

        $query .= "
            GROUP BY product.id
            ORDER BY product.position DESC, favorite DESC, favnumber DESC
            LIMIT :limit
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        foreach ($where as $index => $val) {
            $stmt->bindParam(":where$index", $val, PDO::PARAM_INT);
        }

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }

    public function product_unggulan($limit = 12)
    {
        $query = "
            SELECT *
            FROM product
            WHERE product.product_status = 1
            AND product.addon = 0
            GROUP BY product.id
            ORDER BY product.position DESC, favorite DESC, favnumber DESC, 
                    bestseller DESC, view DESC
            LIMIT :limit
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }

}