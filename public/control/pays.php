<?php

require_once(__DIR__ . '/../../Config/db.php');

class Pays {

    private $connect;

    // public function __construct() {
    //     $pdo = new Database();
    //     $this->connect = $pdo->getDatabase();
    // }

    public function __construct() {
        try {
            $db = new Database();
            $this->connect =  $db->getdatabase();
        //    var_dump($connect);
        echo "1";
        } catch (PDOException $error) {
            // echo "Erreur de connexion";
            echo "3" . $error->getMessage();
        }
    }

    public function readPays() {
        try {
            $sql = "SELECT * FROM pays";
            $stmt = $this->connect->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {

            return "Erreur : " . $e->getMessage();
        }
    }

    public function addPays($nom_pays, $population, $language, $id_continent) {
        try {
            $insert_sql = "INSERT INTO pays (nom_pays, POPULATION, LANGUAGE_PAYS, ID_CONTINENT) 
                           VALUES (:nom_pays, :population, :language, :continent)";
            $stmt = $this->connect->prepare($insert_sql);

            $stmt->bindValue(':nom_pays', $nom_pays);
            $stmt->bindValue(':population', $population);
            $stmt->bindValue(':language', $language);
            $stmt->bindValue(':continent', $id_continent);

            return $stmt->execute();
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function updatePays($id_pays, $nom_pays, $population, $language, $id_continent) {
        try {
            $update_sql = "UPDATE pays 
                           SET nom_pays = :nom_pays, POPULATION = :population, 
                               LANGUAGE_PAYS = :language, ID_CONTINENT = :continent 
                           WHERE id_pays = :id";
            $stmt = $this->connect->prepare($update_sql);

            $stmt->bindValue(':id', $id_pays, PDO::PARAM_INT);
            $stmt->bindValue(':nom_pays', $nom_pays);
            $stmt->bindValue(':population', $population);
            $stmt->bindValue(':language', $language);
            $stmt->bindValue(':continent', $id_continent);

            return $stmt->execute();
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function deletePays($id_pays) {
        try {
            $delete_sql = "DELETE FROM pays WHERE id_pays = :id";
            $stmt = $this->connect->prepare($delete_sql);

            $stmt->bindValue(":id", $id_pays, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }
}

$data = new Pays();
$result = $data->readPays();

var_dump($result);
