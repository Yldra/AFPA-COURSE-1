<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Form\AnimalType;
use App\Repository\AnimalRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    #[Route('/animaux', name: 'app_animaux')]
    public function animaux(AnimalRepository $ar): Response
    {
        return $this->render('animal/liste-animaux.html.twig', [
            'animaux' => $ar->findAll(),
            "controller_name" => "AnimalController",
            "route_name" => "animaux",
        ]);
    }

    #[Route('/animal/{id}', name: 'app_animal')]
    public function animal(AnimalRepository $ar, $id): Response
    {
        $animal = $ar->find($id);

        // Find the nearest previous animal with an ID less than the current ID
        $previousAnimal = $ar->createQueryBuilder('a')
            ->where('a.id < :currentId')
            ->setParameter('currentId', $id)
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        // Find the nearest next animal with an ID greater than the current ID
        $nextAnimal = $ar->createQueryBuilder('a')
            ->where('a.id > :currentId')
            ->setParameter('currentId', $id)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        return $this->render('animal/detail-animal.html.twig', [
            "controller_name" => "AnimalController",
            "animal" => $animal,
            'previousAnimal' => $previousAnimal,
            'nextAnimal' => $nextAnimal,
        ]);
    }

    #[Route('/creaanimal', name: 'crea_animal')] //
    #[Route('/modifanimal/{id}', name: 'modif_animal')]
    public function modifAnimal(Animal $animal = null, Request $req, EntityManagerInterface $em, $id = null): Response
    {
        if (!$animal) {
            $animal = new Animal();
        } // S'il n'y a pas d'animal (donc null) alors on créer un nouvel animal

        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($req); // Récupère les données
        if ($form->isSubmitted()) {
            $em->persist($animal);
            $em->flush();
            $this->addFlash("success", "La Modification est une Réussite !");
            return $this->redirectToRoute('app_animaux'); // permet de revenir sur la liste animaux
        }
        return $this->render('animal/form-animal.html.twig', [
            'animal' => $animal,
            'aform' => $form->createView(),
        ]);
    }

    #[Route('/suppranimal/{id}', name: 'suppr_animal')]
    public function supprAnimal(Animal $animal, Request $req, EntityManagerInterface $em, $id): Response
    {
        $em->remove($animal);
        $em->flush();
        return $this->redirectToRoute('app_animaux');
    }

    #[Route('/home', name: 'home')]
    public function accueil(): Response
    {
        return $this->render('home.html.twig', [
            "controller_name" => "AnimalController",
            "route_name" => "home",
        ]);
    }

    #[Route('/animal_poids/{poids}', name: 'animal_poids')]
    public function animalPoids(AnimalRepository $ar, $poids): Response
    {
        $val = $ar->findByPoidsField($poids);
        // dd($val);
        return $this->render('animal/poidsanimal.html.twig', ['animaux' => $val]);
    }
}
