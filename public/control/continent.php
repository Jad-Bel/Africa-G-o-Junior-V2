<?php 

class continent {
    private $connect;

    public function __construct($localHost, $name, $password, $dbname) {
        
        try {
            $dns = "mysql:host={$this->localhost};dbname={$this->dbname}";
            $this->connect = new pdo($dns, $this->name, $this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        } catch (PDOException) {
            echo "Erreur de connexion";
        }
    }

    public function readAll() {
        $select_sql = "SELECT * FROM continent";
        $stmt = $this->connect->query($select_sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createContinent($name, $num_countries) {
        $insert_sql = "INSERT INTO continent (nom, nombre, continent) VALUES (:nom, :nombre, :continent)";
        $stmt = $this->connect->prepare($continent_sql);
        $stmt->bindParam(":nom", $nom; ":conitnent", $continent_id);
        $stmt->bindParam('');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update() {
        $update_sql = "UPDATE continent SET";
        $stmt = $this->connect->prepare($update_sql);
        $stmt->bindParam();
        return $stmt->execute();
    }

    public function delete() {
        $delete_sql = "DELELTE FROM continent WHERE";
        $stmt = $this->connect->prepare($delete_sql);
        $stmt->bindParam();
        return $stmt->execute();
    }
}

$afriqua = new continent();
$afriqua