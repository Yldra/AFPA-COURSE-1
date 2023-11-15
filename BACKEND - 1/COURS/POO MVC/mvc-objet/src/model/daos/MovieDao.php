<?php

namespace mvcobjet\Model\Daos;

use mvcobjet\Model\Daos\BaseDao;
use mvcobjet\Model\Entities\Movie;

class MovieDao extends BaseDAo
{

    public function findAll()
    {
        $statement = $this->db->prepare("SELECT * FROM movie");
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
    public function findOne($id_movie)
    {
        $statement = $this->db->prepare("SELECT * FROM movie WHERE id_movie = ?");
        $res = $statement->execute([$id_movie]);
        if ($res) {
            $row = $statement->fetch();
            return $this->createObjectFromFields($row);
        }
    }
    public function createObjectFromFields($fields): Movie
    {
        $movie = new Movie();
        $movie->setId($fields['id_movie'])
            ->setTitle($fields['title'])
            ->setDate(\DateTime::createFromFormat('Y-m-d', $fields['release_date']))
            ->setPoster($fields['poster']);

        return $movie;
    }

}
