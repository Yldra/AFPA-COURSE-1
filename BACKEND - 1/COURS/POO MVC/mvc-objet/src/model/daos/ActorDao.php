<?php

namespace mvcobjet\Model\Daos;

use mvcobjet\Model\Daos\BaseDao;
use mvcobjet\Model\Entities\Actor;

class ActorDao extends BaseDAo
{

    public function findAll()
    {
        $statement = $this->db->prepare("SELECT * FROM actor");
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
    public function findOne($id_actor)
    {
        $statement = $this->db->prepare("SELECT * FROM actor WHERE id_actor = ?");
        $res = $statement->execute([$id_actor]);
        if ($res) {
            $row = $statement->fetch();
            return $this->createObjectFromFields($row);
        }
    }

    public function createActor(Actor $actor)
    {

        $stmt = $this->db->prepare("INSERT INTO actor(first_name, last_name, photo, birth_date ) VALUES(:first_name,:last_name,:photo,:birth_date)");

        $res = $stmt->execute([
            ':first_name' => $actor->getFirstName(),
            ':last_name' => $actor->getLastName(),
            ':photo' => $actor->getPhoto(),
            ':birth_date' => $actor->getBirthDate(),
        ]);

        if (!$res) {
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function editActor(Actor $actor)
    {

        $stmt = $this->db->prepare("UPDATE actor SET first_name = :first_name, last_name = :last_name, photo = :photo, birth_date = :birth_date WHERE id_actor = :id_actor");

        $res = $stmt->execute([
            ':first_name' => $actor->getFirstName(),
            ':last_name' => $actor->getLastName(),
            ':photo' => $actor->getPhoto(),
            ':birth_date' => $actor->getBirthDate(),
            ':id_actor' => $actor->getId(),
        ]);

        if (!$res) {
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function deleteActor($id_actor)
    {
        // print_r($id_actor['id_actor']);die;
        $statement = $this->db->prepare("DELETE FROM actor WHERE id_actor = ?");
        $statement->execute([$id_actor['id_actor']]);
    }

    public function createObjectFromFields($row)
    {
        $actor = new Actor();

        if (isset($row['id_actor'])) {
            $actor->setId($row['id_actor']);
        } else {
            $actor->setId($row['id_actor'] || null);
        }
        $actor->setFirstName($row['first_name']);
        $actor->setLastName($row['last_name']);
        $actor->setPhoto($row['photo']);
        $actor->setBirthDate($row['birth_date']);

        return $actor;
    }

}
