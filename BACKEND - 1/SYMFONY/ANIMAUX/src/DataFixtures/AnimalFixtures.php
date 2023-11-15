<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Continent;
use App\Entity\Espece;
use App\Entity\Personne;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        // User
        // $u1 = new User();
        // $u1->setNom('KERGUTUL')
        //     ->setPrenom('Brian')
        //     ->setAge(29)
        //     ->setCivilite('Monsieur')
        //     ->setEmail('bkergutul.contact@gmail.com')
        //     ->setPassword('test')
        //     ->setTelephone('06.66.98.70.96');
        // $manager->persist($u1);

        // Continent
        $c1 = new Continent();
        $c1->setNom('Europe')
            ->setImage('europe.jpg')
            ->setDescription("L'Europe est un continent situé principalement dans l'hémisphère nord.
        Il est le berceau de nombreuses cultures et comprend des pays comme la France, l'Allemagne et l'Espagne.");
        $manager->persist($c1);

        $c2 = new Continent();
        $c2->setNom('Afrique')
            ->setImage('afrique.jpg')
            ->setDescription("L'Afrique est située principalement dans l'hémisphère sud.
        C'est le deuxième plus grand continent du monde et abrite des pays comme le Nigeria, l'Égypte et l'Afrique du Sud.");
        $manager->persist($c2);

        $c3 = new Continent();
        $c3->setNom('Asie')
            ->setImage('asie.jpg')
            ->setDescription("L'Asie est le continent le plus vaste et se trouve principalement dans l'hémisphère est.
        Il abrite des nations telles que la Chine, l'Inde et le Japon.");
        $manager->persist($c3);

        $c4 = new Continent();
        $c4->setNom('Amérique du Nord')
            ->setImage('am-nord.jpg')
            ->setDescription("C'est le continent le plus au nord du monde.
        Il est principalement situé dans l'hémisphère occidental et est composé de pays comme les États-Unis, le Canada et le Mexique.");
        $manager->persist($c4);

        $c5 = new Continent();
        $c5->setNom('Amérique du Sud')
            ->setImage('am-sud.jpg')
            ->setDescription("Située principalement dans l'hémisphère occidental, c'est le continent au sud de l'Amérique du Nord.
        On y trouve des pays tels que le Brésil, l'Argentine et le Pérou.");
        $manager->persist($c5);

        $c6 = new Continent();
        $c6->setNom('Océanie')
            ->setImage('oceanie.jpg')
            ->setDescription("L'Océanie est principalement constituée d'îles dans l'océan Pacifique.
        L'Australie et la Nouvelle-Zélande en sont les plus grandes nations.");
        $manager->persist($c6);

        $c7 = new Continent();
        $c7->setNom('Antarctique')
            ->setImage('antarctique.jpg')
            ->setDescription("L'Antarctique est le continent le plus au sud et est principalement recouvert de glace.
        Il n'est pas habité de manière permanente, mais il est essentiel pour la recherche scientifique.");
        $manager->persist($c7);

        // Espece
        $e1 = new Espece();
        $e1->setNom('Mammifères')
            ->setDescription('');
        $manager->persist($e1);

        $e2 = new Espece();
        $e2->setNom('Poissons')
            ->setDescription('');
        $manager->persist($e2);

        $e3 = new Espece();
        $e3->setNom('Oiseaux')
            ->setDescription('');
        $manager->persist($e3);

        $e4 = new Espece();
        $e4->setNom('Reptiles')
            ->setDescription('');
        $manager->persist($e4);

        $e5 = new Espece();
        $e5->setNom('Insectes')
            ->setDescription('');
        $manager->persist($e5);

        $e6 = new Espece();
        $e6->setNom('Arachnides')
            ->setDescription('');
        $manager->persist($e6);

        // Personne
        $brian = new Personne();
        $brian->setNom('Kergutul')->setPrenom('Brian')->setPhoto('brian.jpg');
        $manager->persist($brian);

        $mariette = new Personne();
        $mariette->setNom('Hallosserie')->setPrenom('Mariette');
        $manager->persist($mariette);

        // Animaux
        $a1 = new Animal();
        $a1->setNom('Chat')
            ->setDescription('Le chat est un prédateur de petites proies comme les rongeurs ou les oiseaux.')
            ->setImage('floki.jpg')
            ->setNomLatin('Felis')
            ->setPoids(5)
            ->setEspece($e1);
        $a1->addContinent($c1)->addContinent($c3)->addContinent($c4)->addContinent($c5)->addContinent($c6);
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom('Chien')
            ->setDescription('Le Chien est la sous-espèce domestique du Loup Gris.')
            ->setImage('chien.jpg')
            ->setNomLatin('Canis Lupus')
            ->setPoids(15)
            ->setEspece($e1);
        $a2->addContinent($c1)->addContinent($c3)->addContinent($c4)->addContinent($c5)->addContinent($c6);
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom('Girafe')
            ->setDescription('La Girafe est une espèce du groupe des ruminants, vivant dans les savanes africaines.')
            ->setImage('girafe.jpg')
            ->setNomLatin('Giraffa camelopardalis')
            ->setEspece($e1);
        $a3->addContinent($c2);
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom('Requin')
            ->setDescription('Les requins possèdent cinq à sept fentes branchiales sur les côtés de la tête et les nageoires pectorales qui ne sont pas fusionnées à la tête.')
            ->setImage('requin.jpg')
            ->setNomLatin('Selachimorpha')
            ->setEspece($e2);
        $a4->addContinent($c1)->addContinent($c2)->addContinent($c3)
            ->addContinent($c4)->addContinent($c5)->addContinent($c6)->addContinent($c7);
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom('Pingouin')
            ->setDescription('Les pingouins sont un groupe d\'oiseaux aquatiques incapables de voler.')
            ->setImage('pingouin.jpg')
            ->setNomLatin('Spheniscidae')
            ->setEspece($e3);
        $a5->addContinent($c7);
        $manager->persist($a5);

        $a6 = new Animal();
        $a6->setNom('Serpent')
            ->setDescription('Les serpents forment un sous-ordre de squamates carnivores au corps très allongé et dépourvus de membres apparents.')
            ->setImage('serpent.jpg')
            ->setNomLatin('Serpentes')
            ->setEspece($e4);
        $a6->addContinent($c1)->addContinent($c2)->addContinent($c3)
            ->addContinent($c4)->addContinent($c5)->addContinent($c6);
        $manager->persist($a6);

        $a7 = new Animal();
        $a7->setNom('Mante Religieuse')
            ->setDescription('La Mante religieuse est une espèce d\'insectes.')
            ->setImage('mante.jpg')
            ->setNomLatin('Mantis religiosa')
            ->setEspece($e5);
        $a7->addContinent($c1)->addContinent($c3)->addContinent($c4);
        $manager->persist($a7);

        $a8 = new Animal();
        $a8->setNom('Araignée')
            ->setDescription('Les araignées sont des arthropodes prédateurs.')
            ->setImage('araignee.jpg')
            ->setNomLatin('Araneae')
            ->setEspece($e6);
        $a8->addContinent($c1)->addContinent($c2)->addContinent($c3)
            ->addContinent($c4)->addContinent($c5)->addContinent($c6);
        $manager->persist($a8);

        // Possède

        $manager->flush();
    }
}
