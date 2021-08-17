<?php


class SallerDao
{
    public $db;

    public function __construct()
    {
        $this->db = new mysqli("localhost", "root", "adminhector", "realestate");
    }


    public function create(Saller $saller)
    {
        $query = "INSERT INTO sallers (name, lastName, email,phoneNumber, image)
        VALUES (
            '{$saller->getName()}',
            '{$saller->getLastName()}',
            '{$saller->getEmail()}',
            '{$saller->getPhoneNumber()}',
            '{$saller->getImage()}'
        );";
        try {
            $result = $this->db->query($query);
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
        return false;
    }

    public function find($idSaller)
    {
        $query = "SELECT *FROM sallers WHERE idSaller = $idSaller;";
        try {
            $result = $this->db->query($query);
            $saller = new Saller($result->fetch_assoc());
            return $saller;
        } catch (\Throwable $th) {
            return null;
        }
        return null;
    }
    public function update(Saller $saller)
    {

        $query = "UPDATE sallers SET 
        name = '{$saller->getName()}', 
        lastName = '{$saller->getLastName()}',
        email = '{$saller->getEmail()}',
        phoneNumber = '{$saller->getPhoneNumber()}',
        image = '{$saller->getImage()}'
        WHERE idSaller = {$saller->getIdSaller()};";
        try {
            $result = $this->db->query($query);
            return $result;
        } catch (\Throwable $th) {
            return null;
        }
        return false;
    }
    public function delete($idSaller)
    {
        $query = "DELETE FROM sallers WHERE idSaller=$idSaller;";
        try {
            $result = $this->db->query($query);
            return $result;
        } catch (\Throwable $th) {
            return  false;
        }
        return false;
    }
    public function findAll(){
        $query = "SELECT * FROM sallers;";
        $sallers=[];
        try {
            $result = $this->db->query($query);
           while ($data = $result->fetch_assoc()) {
               $saller = new Saller($data);
               $sallers[] = $saller;
           }
        } catch (\Throwable $th) {
            return  null;
        }
        return $sallers;

    }
    public function findLike($pattern){
        $query = "SELECT * FROM sallers WHERE name LIKE '%$pattern%' OR lastName LIKE '%$pattern%';";
        $sallers=[];
        try {
            $result = $this->db->query($query);
           while ($data = $result->fetch_assoc()) {
               $saller = new Saller($data);
               $sallers[] = $saller;
           }
        } catch (\Throwable $th) {
            return  null;
        }
        return $sallers;

    }
    public function findMany($many){
        $query = "SELECT * FROM sallers LIMIT $many";
        $sallers=[];
        try {
            $result = $this->db->query($query);
           while ($data = $result->fetch_assoc()) {
               $saller = new Saller($data);
               $sallers[] = $saller;
           }
        } catch (\Throwable $th) {
            return  null;
        }
        return $sallers;

    }
}
