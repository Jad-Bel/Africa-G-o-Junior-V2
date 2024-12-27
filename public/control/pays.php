<?php

require_once __DIR__ .'/../Config/db.php';

class pays{

 private $nom_pays;
    private $POPULATION;
    private $LANGAUGE_PAYS;
    private $ID_CONTINENT ;
    private $connect;

    public function __construct(){
        $pdo = new Database();
        $this->connect = $pdo->getdatabase();
    }
    public function readPays() {
        try {
            $sql = "SELECT * FROM pays";
            $stmt = $this->connect->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException) {
            return "Erreur : ";
        }
    }

    public function addPays($nom_pays, $population, $language, $id_continent) {
        try {
            $insert_sql = "INSERT INTO pays (`nom_pays`, `POPULATION`, `LANGUAGE_PAYS`, `ID_CONTINENT`) VALUES (':nom', ':population', ':language', ':continent')";
            $stmt = $this->connect->prepare($insert_sql);
            $stmt->bindParam(':nom_pays', $nom_pays);
            $stmt->bindParam(':population', $population);
            $stmt->bindParam(':language', $language);
            $stmt->bindParam(':continent', $id_continent);
            return $stmt->execute();
        }
    }

    public function updatePays ($id_pays, $nom_pays, $population, $language, $id_continent) {
        try {
            $insert_sql = "UPDATE pays SET `nom_pays` = ':nom', `POPULATION` = ':population', `LANGUAGE_PAYS` = ':language', `ID_CONTINENT` = ':continent' WHERE id_pays = :id";
            $stmt = $this->connect->prepare($insert_sql);
            $stmt->bindParam(':id', $id_pays);
            $stmt->bindParam(':nom_pays', $nom_pays);
            $stmt->bindParam(':population', $population);
            $stmt->bindParam(':language', $language);
            $stmt->bindParam(':continent', $id_continent);
            return $stmt->execute();
        } 
    }

    public function deletePays ($id_pays) {
        $delete_sql = "DELETE FROM pays WHERE id_pays = :id";
        $stmt = $this->connect->prepare($delete_sql);
        $stmt->bindParam(":id", $id_pays, PDO::PARAM_INT);
        return $stmt->execute();
    }
}

$data = new pays();
$data = $data->readPays();

var_dump($data);