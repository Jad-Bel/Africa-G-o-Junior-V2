<?php 

class continent {
    private $connect;

    public function __construct($localHost, $name, $password, $dbname) {
        
        try {
            $db = new Database();
           $connect =  $db->getdatabase();
           var_dump($connect);
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
        $insert_sql = "INSERT INTO continent (`nom_continent`, `nombre_de_pays`) VALUES (:nom, :nombre)";
        $stmt = $this->connect->prepare($insert_sql);
        $stmt->bindParam(':nom', $name);
        $stmt->bindParam(':nombre', $num_countries);
        return $stmt->execute();
    }

    public function update($id_continent, $name, $num_continent) {
        $update_sql = "UPDATE continent SET `nom_continent` = :name, `nombre_du_pays` = :nombre WHERE id = :id";
        $stmt = $this->connect->prepare($update_sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":nombre", $num_continent, PDO::PARAM_INT);
        $stmt->bindParam(":id", $id_continent, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function delete($id_continent) {
        $delete_sql = "DELELTE FROM continent WHERE id = :id";
        $stmt = $this->connect->prepare($delete_sql);
        $stmt->bindParam(":id", $id_continent, PDO::PARAM_INT);
        return $stmt->execute();
    }
}

