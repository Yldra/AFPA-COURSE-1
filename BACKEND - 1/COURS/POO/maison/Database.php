<?php

class Database
{
    private $pdo;

    public function __construct($dbname, $dbuser, $password)
    {
        try {
            $this->pdo = new PDO(
                "mysql:host=localhost;dbname=" . $dbname . ";charset=UTF8",
                $dbuser,
                $password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]
            );
        } catch (PDOException $ex) {exit($ex->getMessage());}
    }

    public function houseList($room)
    {
        $sql = $this->pdo->prepare("SELECT * FROM .$room");
        $sql->execute();
        $rooms = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $rooms;
    }
}

echo "<pre>";
$test = new Database("cinema", "root", "");
$rooms = $test->listActor();
print_r($rooms);
