<?php

class DB
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

    public function listActor()
    {
        $sql = $this->pdo->prepare("SELECT * FROM acteur");
        $sql->execute();
        $actors = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $actors;
    }
}

echo "<pre>";
// Create an instance of the DB class and establish the database connection
$test = new DB("cinema", "root", "");

// Call the listActor method to retrieve actors
$actors = $test->listActor();

// Print the list of actors
print_r($actors);
