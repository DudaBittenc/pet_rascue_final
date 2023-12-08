<?php

namespace QI\PetRescue\Model\Repository;

use \PDO;

class Connection{
    private static $connection;
    private function __construct(){}
    public static function getConnection(){
        if(self::$connection == null){
            self::$connection = new PDO(DSN, USER, PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }
        return self::$connection;
    } //esse método serve pra evitar de ter mais de uma conexão do BD. Quero apenas uma conexão. Então, ele funciona assim: "se já existe essa coneção, GET the conexão"
}

?>