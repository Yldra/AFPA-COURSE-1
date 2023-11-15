<?php

namespace mvcobjet\Model\Daos;

use mvcobjet\Model\Daos\BaseDao;
use mvcobjet\Model\Entities\Director;

class DirectorDao extends BaseDAo
{

    public function findAll()
    {
        $statement = $this->db->prepare("SELECT * FROM director");
        $res = $statement->execute();
        if ($res) {
            // parcours des éléments et création d'objets à partir des tuples (rangées)
            while ($row = $statement->fetch()) {
                $objs[] = $this->createObjectFromFields($row);
            }
            // renvoi d'un tableau d'objets.
            return $objs;
        }
    }
    public function findOne($id_director)
    {
        $statement = $this->db->prepare("SELECT * FROM director WHERE id_director = ?");
        $res = $statement->execute([$id_director]);
        if ($res) {
            $row = $statement->fetch();
            return $this->createObjectFromFields($row);
        }
    }

    public function createDirector(Director $director)
    {

        $stmt = $this->db->prepare("INSERT INTO director(first_name, last_name, birth_date, photo ) VALUES(:first_name,:last_name,:birth_date,:photo)");

        $res = $stmt->execute([
            ':first_name' => $director->getFirstName(),
            ':last_name' => $director->getLastName(),
            ':birth_date' => $director->getBirthDate(),
            ':photo' => $director->getPhoto(),
        ]);

        if (!$res) {
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function editDirector(Director $director)
    {

        $stmt = $this->db->prepare("UPDATE director SET first_name = :first_name, last_name = :last_name, birth_date = :birth_date, photo = :photo WHERE id_director = :id_director");

        $res = $stmt->execute([
            ':first_name' => $director->getFirstName(),
            ':last_name' => $director->getLastName(),
            ':birth_date' => $director->getBirthDate(),
            ':photo' => $director->getPhoto(),
            ':id_director' => $director->getId(),
        ]);

        if (!$res) {
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function deleteDirector($id_director)
    {
        // print_r($id_director['id_director']);die;
        $statement = $this->db->prepare("DELETE FROM director WHERE id_director = ?");
        $statement->execute([$id_director['id_director']]);
    }

    public function createObjectFromFields($row)
    {
        $director = new Director();

        if (isset($row['id_director'])) {
            $director->setId($row['id_director']);
        } else {
            $director->setId($row['id_director'] || null);
        }
        $director->setFirstName($row['first_name']);
        $director->setLastName($row['last_name']);
        $director->setBirthDate($row['birth_date']);
        $director->setPhoto($row['photo']);

        return $director;
    }
}
