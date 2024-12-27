<?php

require_once __DIR__ . '/../Config/db.php';

class Pays {

    private $connect;

    public function __construct() {
        try {
            $db = new Database();
            $this->connect =  $db->getdatabase();
        //    var_dump($connect);
        } catch (PDOException $error) {
            // echo "Erreur de connexion";
            echo "Connection failed: " . $error->getMessage();
        }
    }

    public function readPays() {
        try {
            $sql = "SELECT * FROM pays";
            $stmt = $this->connect->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return "Erreur Connection: " . $e->getMessage();
        }
    }

    public function addPays($nom_pays, $population, $language, $id_continent) {
        try {
            $insert_sql = "INSERT INTO pays (nom_pays, POPULATION, LANGAUGE_PAYS, ID_CONTINENT) 
                           VALUES (:nom_pays, :population, :language, :continent)";
            $stmt = $this->connect->prepare($insert_sql);

            
            $stmt->bindParam(':nom_pays', $nom_pays);
            $stmt->bindParam(':population', $population);
            $stmt->bindParam(':language', $language);
            $stmt->bindParam(':continent', $id_continent);

            return $stmt->execute();
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function updatePays($id_pays, $nom_pays, $population, $language, $id_continent) {
        try {
            $update_sql = "UPDATE pays 
                        SET nom_pays = :nom_pays, POPULATION = :population, 
                        LANGAUGE_PAYS = :language, ID_CONTINENT = :continent 
                        WHERE id_pays = :id";
            $stmt = $this->connect->prepare($update_sql);

            $stmt->bindParam(':id', $id_pays, PDO::PARAM_INT);
            $stmt->bindParam(':nom_pays', $nom_pays);
            $stmt->bindParam(':population', $population);
            $stmt->bindParam(':language', $language);
            $stmt->bindParam(':continent', $id_continent);

            return $stmt->execute();
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function deletePays($id_pays) {
        try {
            $delete_sql = "DELETE FROM pays WHERE id_pays = :id";
            $stmt = $this->connect->prepare($delete_sql);

            $stmt->bindParam(":id", $id_pays, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }
}

// $id = 41;
// $nom = 'france';
//             $population = 11380000;
//             $language = 'frnacais';
//             $conitnent = 1;

// $data = new Pays();
// $result = $data->deletePays(41);

// // var_dump($result);
// echo $result;