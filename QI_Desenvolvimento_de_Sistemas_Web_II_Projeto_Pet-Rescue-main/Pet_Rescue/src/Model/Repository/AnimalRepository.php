<?php

namespace QI\PetRescue\Model\Repository;
use PDO;


class AnimalRepository{
    
    private $connection;
    public function __construct(){
        $this->connection = Connection::getConnection();
    }
    
    public function insert($animal){
        $stmt=$this->connection->prepare("insert into OwnerlessAnimal values (null,?,?,?,?,?)");
        $stmt->bindParam(1, $animal->specie);
        $stmt->bindParam(2, $animal->age);
        $stmt->bindParam(3, $animal->description);
        $stmt->bindParam(4, $animal->additionalinfo);
        $stmt->bindParam(5, $animal->user_number);
        return $stmt->execute();
    }

    public function findAll(){
        
    }
}










?>