<?php

namespace QI\PetRescue\Model\Repository;

use PDO;


class UsersRepository{
    private $connection;
    public function __construct(){
        $this->connection = Connection::getConnection();
    }
    public function insert($user){
        var_dump($user);
        exit;
        $stmt = $this->connection->prepare("insert into users values(NULL,?,?,?,?,?,?)");
        $stmt->bindParam(1, $user->firstname);
        $stmt->bindParam(2, $user->lastname);
        $stmt->bindParam(3, $user->email);
        $stmt->bindParam(4, $user->number);
        $stmt->bindParam(5, $user->genero);
        $stmt->bindParam(6, $user->password);
        return $stmt->execute();
        //DROP TABLE users;

    }


    //public function findAll() {
    //    $smtm = $this->connection->query("select c.*,u.name from users c inner join users u on c.users_id = u.id;
    //    ");
    //    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    //}

}




?>