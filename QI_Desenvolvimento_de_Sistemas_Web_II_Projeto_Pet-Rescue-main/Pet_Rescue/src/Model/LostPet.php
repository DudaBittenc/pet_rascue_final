<?php

namespace QI\PetRescue\Model;


class LostPet {

    private string $id;
    private string $petname;
    private string $pet_owner;
    private string $specie;
    private int $age;
    private string $description;
    private string $additionalinfo;

    /**
     * @param User $user
     */

    public function __get($attribute){
        return $this->$attribute;
    }
    public function __set($attribute, $value){
        $this->$attribute = $value;
    }
    public function __construct($petname, $user, $specie, $age, $description, $additionalinfo) {
        $this->petname = $petname;
        $this->user = $user;
        $this->specie = $specie;
        $this->age = $age;
        $this->description = $description;
        $this->additionalinfo = $additionalinfo;
    }

}












?>