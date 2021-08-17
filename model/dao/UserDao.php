<?php
class UserDao{

    public $db;
    public function __construct()
    {
        $this->db = new mysqli("localhost", "root", "adminhector", "realestate");
    }

    public function find(User $user){
        $query = "SELECT * FROM users WHERE userName= '{$user->getUserName()}' AND password = '{$user->getPassword()}'";

        try {
            $result = $this->db->query($query)->fetch_assoc();
            $this->db->close();
            return $result;
        } catch (\Throwable $th) {
            return null;
        }
        return null;

    }


}
