<?php

namespace App\Controller;

use App\Entity\Continent;
use App\Form\ContinentType;
use App\Repository\ContinentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContinentController extends AbstractController
{
    #[Route('/continents', name: 'app_continents')]
    public function index(ContinentRepository $cr): Response
    {
        return $this->render('continent/liste-continents.html.twig', [
            'continents' => $cr->findAll(),
            'route_name' => 'continents',
        ]);
    }

    #[Route('/continent/{id}', name: 'app_continent')]
    public function continent(ContinentRepository $cr, $id): Response
    {
        $continent = $cr->find($id);
        return $this->render('continent/detail-continent.html.twig', [
            "controller_name" => "ContinentController",
            "continent" => $continent,
        ]);
    }

    #[Route('/creacontinent', name: 'crea_continent')] //
    #[Route('/modifcontinent/{id}', name: 'modif_continent')]
    public function modifcontinent(Continent $continent = null, Request $req, EntityManagerInterface $em, $id = null): Response
    {
        if (!$continent) {
            $continent = new continent();
        } // S'il n'y a pas d'continent (donc null) alors on créer un nouvel continent
        $form = $this->createForm(ContinentType::class, $continent); // création du formulaire
        $form->handleRequest($req); // Récupère les données
        if ($form->isSubmitted()) {
            $em->persist($continent);
            $em->flush();
            return $this->redirectToRoute('app_continent'); // permet de revenir sur la liste continent
        }
        return $this->render('continent/form-continent.html.twig', [
            'continent' => $continent,
            'cform' => $form->createView(),
        ]);
    }

    #[Route('/supprcontinent/{id}', name: 'suppr_continent')]
    public function supprcontinent(continent $continent, Request $req, EntityManagerInterface $em, $id): Response
    {
        $em->remove($continent);
        $em->flush();
        return $this->redirectToRoute('app_continent');
    }

    #[Route('/continent/{id}', name: 'app_continent')]
    public function animauxContinent(ContinentRepository $cr, $id): Response
    {
        // Récupérez le continent par son ID depuis la base de données
        $continent = $cr->find($id);

        // Récupérez l'ID du continent précédent
        $previousId = $id - 1;
        $previousContinent = $cr->find($previousId);

        // Récupérez l'ID du continent suivant
        $nextId = $id + 1;
        $nextContinent = $cr->find($nextId);
        // Récupérez la liste des animaux associés à ce continent
        $animaux = $continent->getAnimaux();

        return $this->render('continent/detail-continent.html.twig', [
            'animaux' => $animaux,
            'continent' => $continent,
            'previousContinent' => $previousContinent,
            'nextContinent' => $nextContinent,
        ]);
    }
}
