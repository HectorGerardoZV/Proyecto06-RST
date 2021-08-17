<?php


class Property
{

    private $idProperty;
    private $title;
    private $price;
    private $description;
    private $image;
    private $stars;
    private $bethRooms;
    private $rooms;
    private $parking;
    private $idSaller;

    public function __construct($data = [])
    {
        $this->idProperty = $data["idProperty"] ?? -1;
        $this->title = $data["title"] ?? "";
        $this->price = $data["price"] ?? -1;
        $this->description = $data["description"] ?? "";
        $this->image = $data["image"] ?? "";
        $this->stars = $data["stars"] ?? -1;
        $this->bethRooms = $data["bethrooms"] ?? "";
        $this->rooms = $data["rooms"] ?? "";
        $this->parking = $data["parking"] ?? "";
        $this->idSaller = $data["idSaller"] ?? -1;
    }



    public function setData($data = [])
    {
        $this->title = $data["title"] ?? "";
        $this->price = $data["price"] ?? -1;
        $this->description = $data["description"] ?? "";
        $this->image = $data["image"] ?? "";
        $this->stars = $data["stars"] ?? -1;
        $this->bethRooms = $data["bethrooms"] ?? "";
        $this->rooms = $data["rooms"] ?? "";
        $this->parking = $data["parking"] ?? "";
        $this->idSaller = $data["idSaller"] ?? -1;
    }

    //Set IdProperty
    public function setIdProperty($idProperty)
    {
        $this->idProperty = $idProperty;
    }
    //Get IdProperty
    public function getIdProperty()
    {
        return $this->idProperty;
    }
    //Set Title
    public function setTitle($title)
    {
        $this->title = $title;
    }
    //Get Title
    public function getTitle()
    {
        return $this->title;
    }
    //Set Price
    public function setPrice($price)
    {
        $this->price = $price;
    }
    //Get Price
    public function getPrice()
    {
        return $this->price;
    }
    //Set Description
    public function setDescription($description)
    {
        $this->description = $description;
    }
    //Get Description
    public function getDescription()
    {
        return $this->description;
    }
    //Set Image
    public function setImage($image)
    {
        $this->image = $image;
    }
    //Get Image
    public function getImage()
    {
        return $this->image;
    }
    //Set Stars
    public function setStars($stars)
    {
        $this->stars = $stars;
    }
    //Get Stars
    public function getStars()
    {
        return $this->stars;
    }
    //Set BethRooms
    public function setBethRooms($bethRooms)
    {
        $this->bethRooms = $bethRooms;
    }
    //Get BethRooms
    public function getBethRooms()
    {
        return $this->bethRooms;
    }
    //Set Rooms
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
    }
    //Get Rooms
    public function getRooms()
    {
        return $this->rooms;
    }
    //Set Parking
    public function setParking($parking)
    {
        $this->parking = $parking;
    }
    //Get Parking
    public function getParking()
    {
        return $this->parking;
    }
    //Set idSaller
    public function setIdSaller($idSaller)
    {
        $this->idSaller = $idSaller;
    }
    //Get idSaller
    public function getIdSaller()
    {
        return $this->idSaller;
    }
}
