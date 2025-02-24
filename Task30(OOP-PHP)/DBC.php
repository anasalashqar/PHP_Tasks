<?php

class Dbh
{
    private $host = 'localhost';
    private $dbname = 'anas_test';
    private $user = 'root';
    private $pass = '';

    protected function connect()
    {
        try {
            $pdo = new PDO("mysql:host" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die("Connection failed: " . $e->getMessage());
        }
    }
}
