<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Actor;
use App\Entity\Movie;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        // ici créer les films puis ajouter les films dans lesquels les acteurs ont joué
        // on peut faire dans les 2 sens.
        
        $a1 = new Actor();
        $a1->setNom("jo")->setPrenom('lafrite')->setImage('lafrite.jpg');
        $manager->persist($a1);

        $a2 = new Actor();
        $a2->setNom("jack")->setPrenom('léventre')->setImage('levenrte.jpg');
        $manager->persist($a2);

        $a3 = new Actor();
        $a3->setNom("pierre")->setPrenom('kiroule')->setImage('pierre.jpg');
        $manager->persist($a3);

        $movie = new Movie();
        $movie->setTitre("tttt")
                ->setDescription("ddd")
                ->setAffiche("afff")
                ->addActeur($a1)
                ->addActeur($a2);

        $manager->persist($movie);

        
        
        $manager->flush();
    }
}
