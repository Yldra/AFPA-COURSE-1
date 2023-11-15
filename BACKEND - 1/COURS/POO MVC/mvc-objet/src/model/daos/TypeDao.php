<?php

namespace mvcobjet\Model\Daos;

use mvcobjet\Model\Entities\Type;

class TypeDao extends BaseDao
{
    public function findAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM type ");
        $res = $stmt->execute();

        if ($res) {
            $types = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $types[] = $this->createObjectFromFields($row);
            }
            return $types;
        } else {
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function findById($id): type
    {
        $stmt = $this->db->prepare("SELECT * FROM type WHERE id_type = :id");
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $res = $stmt->execute();

        if ($res) {
            return $stmt->fetchObject(type::class);
        } else {
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function findByMovie($movieId)
    {
        $stmt = $this->db->prepare("
            SELECT type.id_type, type.name
            FROM type
            INNER JOIN movie ON movie.type = type.id_type
            WHERE movie.id_movie = :movieId
        ");

        $stmt->bindParam(':movieId', $movieId, \PDO::PARAM_INT);
        $res = $stmt->execute();

        if ($res) {
            return $stmt->fetchObject(type::class);
        } else {
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function createObjectFromFields($fields): type
    {
        $type = new type();
        $type->setId($fields['id_type'])->setName($fields['name']);
        return $type;
    }
    
    

    public function create(type $type)
    {
        $stmt = $this->db->prepare("
          INSERT INTO type(name) 
          VALUES(:name)
        ");

        $name = $type->getName(); // Get the name from the type object

        $stmt->bindParam(':name', $name, \PDO::PARAM_STR);
        $res = $stmt->execute();

        if (!$res) {
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }
}
