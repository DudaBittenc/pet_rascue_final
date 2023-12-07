<?php

namespace QI\PetRescue\Model;


class OwnerlessAnimal {

    private string $id;
    private string $specie;
    private int $age;
    private string $description;
    private string $additionalinfo;
    private $user_number;


    public function __get($attribute){
        return $this->$attribute;
    }
    public function __set($attribute, $value){
        $this->$attribute = $value;
    }
    public function __construct($specie, $age, $description, $additionalinfo, $user_number) {
        $this->specie = $specie;
        $this->age = $age;
        $this->description = $description;
        $this->additionalinfo = $additionalinfo;
        $this->user_number = $user_number;
    }

}






?>