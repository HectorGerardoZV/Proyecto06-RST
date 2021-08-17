<?php

class Saller{

    private $idSaller;
    private $name;
    private $lastName;
    private $email;
    private $phoneNumber;
    private $image;

    public function __construct($data=[])
    {
        $this->idSaller = $data["idSaller"]??-1;
        $this->name = $data["name"]??"";
        $this->lastName = $data["lastName"]??"";
        $this->email = $data["email"]??"";
        $this->phoneNumber = $data["phoneNumber"]??"";
        $this->image = $data["image"]??"";
    }
    public function setData($data=[]){
        
    }


}


?>