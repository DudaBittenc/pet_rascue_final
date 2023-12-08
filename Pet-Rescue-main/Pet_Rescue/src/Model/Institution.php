<?php

namespace QI\PetRescue\Model;

class Institution {
    private string $id;
    private string $institutename;
    private string $institutetype;
    private string $responsible;
    private string $contact;

    public function __get($attribute){
        return $this->$attribute;
    }
    public function __set($attribute, $value){
        $this->$attribute = $value;
    }
    public function __construct($institutename, $institutetype, $responsible, $contact) {
        $this->institutename = $institutename;
        $this->institutetype = $institutetype;
        $this->responsible = $responsible;
        $this->contact = $contact;
    }
}














?>