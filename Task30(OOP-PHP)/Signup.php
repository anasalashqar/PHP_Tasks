<?php

class Signup extends Dbh
{

    private $name;
    private $password;

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
    }


    // private function connect(){
    //     // Hi
    // }
    private function insertUser()
    {
        $query = "INSERT INTO user (name, password) VALUES (:name, :password)";
        $stmt = parent::connect()->prepare($query);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':password', $this->password);
        if ($stmt->execute()) {
            echo "User registered successfully!";
        } else {
            echo "Error: User registration failed!";
        }
    }


    private function isEmptySubmit()
    {
        if (empty($this->name) || empty($this->password)) {
            return false;
        } else {
            return true;
        }
    }


    public function signup()
    {
        if (!$this->isEmptySubmit()) {
            header("Location: " . $_SERVER["DOCUMENT_ROOT"] . "./OOP.php");
        } else {
            $this->insertUser();
        }
    }
}
