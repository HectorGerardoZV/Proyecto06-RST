<?php

class User{

    private $idUser;
    private $userName;
    private $password;

    public function __construct($data  = [])
    {
        $this->idUser = $data["idUser"]??-1;
        $this->userName = $data["userName"]??"";
        $this->password = $data["password"]??"";
        
    }


    public function getIdUser(){
        return $this->idUser;
    }
    public function getUserName(){
        return $this->userName;
    }
    public function getPassword(){
        return $this->password;
    }



}


?>