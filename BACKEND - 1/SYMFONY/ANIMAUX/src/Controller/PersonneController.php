<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Form\PersonneType;
use App\Repository\PersonneRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonneController extends AbstractController
{
    #[Route('/personnes', name: 'personnes')]
    public function personnes(PersonneRepository $pr): Response
    {
        return $this->render('personne/liste-personnes.html.twig', [
            'personnes' => $pr->findAll(),
            "controller_name" => "PersonneController",
            "route_name" => "personnes",
        ]);
    }

    #[Route('/personne/{id}', name: 'personne')]
    public function personne(PersonneRepository $pr, $id): Response
    {
        // Récupérez l'ID du personne précédent
        $previousId = $id - 1;
        $previousPersonne = $pr->find($previousId);

        // Récupérez l'ID du personne suivant
        $nextId = $id + 1;
        $nextPersonne = $pr->find($nextId);
        $personne = $pr->find($id);
        return $this->render('personne/detail-personne.html.twig', [
            "controller_name" => "personneController",
            "personne" => $personne,
            'previousPersonne' => $previousPersonne,
            'nextPersonne' => $nextPersonne,
        ]);
    }

    #[Route('/creapersonne', name: 'crea_personne')] //
    #[Route('/modifpersonne/{id}', name: 'modif_personne')]
    public function modifpersonne(personne $personne = null, Request $req, EntityManagerInterface $em, $id = null): Response
    {
        if (!$personne) {
            $personne = new Personne();
        } // S'il n'y a pas d'personne (donc null) alors on créer un nouvel personne

        $form = $this->createForm(PersonneType::class, $personne);
        $form->handleRequest($req); // Récupère les données
        if ($form->isSubmitted()) {
            $em->persist($personne);
            $em->flush();
            $this->addFlash("success", "La Modification est une Réussite !");
            return $this->redirectToRoute('personnes'); // permet de revenir sur la liste animaux
        }
        return $this->render('personne/form-personne.html.twig', [
            'personne' => $personne,
            'pform' => $form->createView(),
        ]);
    }

    #[Route('/supprpersonne/{id}', name: 'suppr_personne')]
    public function supprpersonne(Personne $personne, Request $req, EntityManagerInterface $em, $id): Response
    {
        $em->remove($personne);
        $em->flush();
        return $this->redirectToRoute('personnes');
    }
}
