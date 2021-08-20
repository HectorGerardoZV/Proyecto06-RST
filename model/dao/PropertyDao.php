<?php
class PropertyDao
{

    public $db;

    public function __construct()
    {
        $this->db = new mysqli("localhost", "root", "adminhector", "realestate");
    }
    public function create(Property $property)
    {

        $query = "INSERT INTO properties (title, price, description, image,stars,bethrooms,rooms,parking,idSaller)
        VALUES (
            '{$property->getTitle()}',
            {$property->getPrice()},
            '{$property->getDescription()}',
            '{$property->getImage()}',
            {$property->getStars()},
            '{$property->getBethRooms()}',
            '{$property->getRooms()}',
            '{$property->getParking()}',
            {$property->getIdSaller()}
        );";

        try {
            $result = $this->db->query($query);
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
        return false;
    }
    public function find($idProperty)
    {
        $query = "SELECT * FROM properties WHERE idProperty = $idProperty;";
        try {
            $result = $this->db->query($query);
            $property = new Property($result->fetch_assoc());
            return $property;
        } catch (\Throwable $th) {
            return null;
        }
        return null;
    }

    public function update(Property $property)
    {

        $query = "UPDATE properties SET
        title = '{$property->getTitle()}',
        price = {$property->getPrice()},
        description = '{$property->getDescription()}',
        image = '{$property->getImage()}',
        stars = {$property->getStars()},
        bethrooms = '{$property->getBethRooms()}',
        rooms = '{$property->getRooms()}',
        parking = '{$property->getParking()}',
        idSaller = {$property->getIdSaller()}
        WHERE idProperty = {$property->getIdProperty()};
        ";
        try {
            $result = $this->db->query($query);
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
        return false;
    }

    public function delete($idProperty)
    {
        $query = "DELETE FROM properties WHERE idProperty = $idProperty;";
        try {
            $result = $this->db->query($query);
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
        return false;
    }
    public function findAll()
    {
        $query = "SELECT * FROM properties;";
        $properties = [];
        try {
            $result = $this->db->query($query);
            while ($data = $result->fetch_assoc()) {
                $property = new Property($data);
                $properties[] = $property;
            }
        } catch (\Throwable $th) {
            return null;
        }
        return $properties;
    }
    public function findLike($pattern)
    {
        $properties=[];
        $query = "";
        if ($pattern == "") {
            $query = "SELECT * FROM properties;";
        } else {
            $query = "SELECT * FROM properties WHERE title LIKE '%$pattern%';";
        }
        try {
            $result = $this->db->query($query);
            while ($data = $result->fetch_assoc()) {
                $property = new Property($data);
                $properties[] = $property;
            }
        } catch (\Throwable $th) {
            return null;
        }
        return $properties;
    }
    public function findMany($many)
    {
        $query = "SELECT * FROM properties LIMIT $many;";
        try {
            $result = $this->db->query($query);
            while ($data = $result->fetch_assoc()) {
                $property = new Property($data);
                $properties[] = $property;
            }
        } catch (\Throwable $th) {
            return null;
        }
        return $properties;
    }
}
