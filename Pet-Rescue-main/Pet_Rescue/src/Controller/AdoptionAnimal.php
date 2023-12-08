<?php

namespace QI\PetRescue\Controller;
use Exception;
use QI\PetRescue\Model\OwnerlessAnimal;
use QI\PetRescue\Model\Repository\AnimalRepository;
require_once dirname(__DIR__) . "/../vendor/autoload.php";

session_start();

switch ($_GET["operation"]) {
    case "insert":
        insertAnimal();
        break;
    deafult:
        $_SESSION["msg_warning"] = "Operação inválida!";
        header("location:../View/message.php");
        exit;
}

function insertAnimal(){

    if(empty($_POST)){
        $_SESSION["msg_error"] = "Ops, houve um erro inesperado!";
        header("../View/message.php");
        exit;
    }
    
    $animal = new OwnerlessAnimal($_POST["specie"],$_POST["age"],$_POST["description"],$_POST["additionalinfo"],$_POST["user_number"]);
    $errors = array();
    if(!empty($errors)){}
    try{
        $animal_repository = new AnimalRepository();
        $result = $animal_repository->insert($animal);
        if($result){
            $_SESSION["msg_success"] = "Animal cadastrado com sucesso!";
        }else{
            $_SESSION["msg_warning"] = "Lamento, não foi possível cadastrar o animal;";
        }
    }catch(Exception $e){
        $_SESSION["msg_error"] = "Ops, houve um erro inseperado em nossa base de dados.";
        $log = $e->getFile() . " - " . $e->getLine() . " - " . $e->getMessage();
        Logger::writeLog($log);
    }finally{
        header("location:../View/message.php");
        exit;
    }
}





















?>