<?php 

require_once(__DIR__ . '/../../Config/db.php');

class continent {
    private $connect;

    public function __construct() {
        
        try {
            $db = new Database();
           $this->connect =  $db->getdatabase();
        } catch (PDOException $error) {
            die("Database connection failed. Please try again later.");
        }
    }

    public function readAll() {
        try {
            $select_sql = "SELECT * FROM continent";
            $stmt = $this->connect->query($select_sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            return "An error occurred while fetching the continents: " . $error->getMessage();
        }
    }

    public function createContinent($name, $num_countries) {
        try {
            $insert_sql = "INSERT INTO continent (`nom_continent`, `nombre_de_pays`) VALUES (:nom, :nombre)";
            $stmt = $this->connect->prepare($insert_sql);
            $stmt->bindParam(':nom', $name);
            $stmt->bindParam(':nombre', $num_countries);
            return $stmt->execute();
        } catch (PDOException $error) {
            return "An error occurred while creating the continent: " . $error->getMessage();
        }
    }

    public function update($id_continent, $name, $num_continent) {
        try {
            $update_sql = "UPDATE continent SET `nom_continent` = :name, `nombre_du_pays` = :nombre WHERE id = :id";
            $stmt = $this->connect->prepare($update_sql);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":nombre", $num_continent, PDO::PARAM_INT);
            $stmt->bindParam(":id", $id_continent, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $error) {
            return "An error occurred while updating the continent: " . $error->getMessage();
        }
    }

    public function delete($id_continent) {
        try {
            $delete_sql = "DELETE FROM continent WHERE id = :id";
            $stmt = $this->connect->prepare($delete_sql);
            $stmt->bindParam(":id", $id_continent, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $error) {
            return "An error occurred while deleting the continent: " . $error->getMessage();
        }
    }
}

// $data = new continent();
// $result = $data->readAll();

// var_dump($result);
