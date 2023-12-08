<?php

namespace QI\PetRescue\Controller;

use Exception;
use QI\PetRescue\Model\Repository\UsersRepository;
use \PDO;
use QI\PetRescue\Model\User;

require_once dirname(dirname(__DIR__)) . "/vendor/autoload.php";

session_start();

switch($_GET["operation"]) {
    case "insert" :
        insert();
        break;
    //case "findAll";
    //    findAll();
    //    break;
    //default;
    $_SESSION["msg_error"] = "Operação inválida!";
    header("location:../View/message.php");
        exit;
}

function insert() {
    if(empty($_POST)){
        $_SESSION["msg_error"] = "Ops! Houve um erro inesperado.";
        header("location:../View/message.php");
        exit;
    }
    $errors = array();
    if(!empty($errors)){
    }
    
    try{
        $user = new User(null,$_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["number"],$_POST["genero"],$_POST["password"]);
        $user_repository = new UsersRepository();
        $result = $user_repository->insert($user);
        if($result){
            $_SESSION["msg_success"] = "Usuário registrado com sucesso!";
        }else{
            $_SESSION["msg_warning"] = "Lamento, não foi possível registrar o usuário.";
        }
    }catch(Exception $e){
        $_SESSION["msg_error"] = "Ops, houve um erro inesperado em nossa base de dados!";
        $log = $e->getFile()." - ".$e->getLine()." - ".$e->getMessage(); //$e é a nossa variável exception
        Logger::writeLog($log);
        echo $log;
    }finally{
        //header("location:../View/message.php");
        //exit;
    }
}

//function findAll() {
//    $call_repository = new CallRepository();
//    $_SESSION["list-of-calls"] = $call_repository->findAll();
//    header("location:../View/list-f-calls.php")
//}

?>