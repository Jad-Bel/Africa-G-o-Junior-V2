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
}

$data = new pays();
$data = $data->readPays();

var_dump($data);