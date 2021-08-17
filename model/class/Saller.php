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
        $this->name = $data["name"]??"";
        $this->lastName = $data["lastName"]??"";
        $this->email = $data["email"]??"";
        $this->phoneNumber = $data["phoneNumber"]??"";
        $this->image = $data["image"]??"";
    }

    /**
     * Set IdSaller
     */
    public function setIdSaller($idSaller){
        $this->idSaller = $idSaller;
    }
    /**
     * Get IdSaller
     */
    public function getIdSaller(){
        return $this->idSaller;
    }
    /**
     * Set Name
     */
    public function setName($name){
        $this->name = $name;
    }
    /**
     * Get Name
     */
    public function getName(){
        return $this->name;
    }
    /**
     * Set LastName
     */
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    /**
     * Get LastName
     */
    public function getLastName(){
        return $this->lastName;
    }
    /**
     * Set E-Mail
     */
    public function setEmail($email){
        $this->email = $email;
    }
    /**
     * Get E-Mail
     */
    public function getEmail(){
        return $this->email;
    }
    /**
     * Set PhoneNumber
     */
    public function setPhoneNumber($phoneNumber){
        $this->phoneNumber = $phoneNumber;
    }
    /**
     * Get PhoneNumber
     */
    public function getPhoneNumber(){
        return $this->phoneNumber;
    }
    /**
     * Set Image
     */
    public function setImage($image){
        $this->image = $image;
    }
    /**
     * Get Image
     */
    public function getImage(){
        return $this->image;
    }


}


?>