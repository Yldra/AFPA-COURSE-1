<?php

namespace App\Controller;

use App\Entity\Espece;
use App\Form\EspeceType;
use App\Repository\AnimalRepository;
use App\Repository\EspeceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EspeceController extends AbstractController
{
    #[Route('/especes', name: 'app_especes')]
    public function index(EspeceRepository $er): Response
    {
        return $this->render('espece/liste-especes.html.twig', [
            'route_name' => 'especes',
            'especes' => $er->findAll(),
        ]);
    }

    #[Route('/espece/{id}', name: 'app_espece')]
    public function espece(EspeceRepository $er, $id): Response
    {
        $espece = $er->find($id);
        return $this->render('espece/detail-espece.html.twig', [
            "espece" => $espece,
        ]);
    }

    #[Route('/creaespece', name: 'crea_espece')] //
    #[Route('/modifespece/{id}', name: 'modif_espece')]
    public function modifEspece(Espece $espece = null, Request $req, EntityManagerInterface $em, $id = null): Response
    {
        if (!$espece) {
            $espece = new Espece();
        } // S'il n'y a pas d'espece (donc null) alors on créer un nouvel espece
        $form = $this->createForm(EspeceType::class, $espece); // création du formulaire
        $form->handleRequest($req); // Récupère les données
        if ($form->isSubmitted()) {
            $em->persist($espece);
            $em->flush();
            return $this->redirectToRoute('app_especes'); // permet de revenir sur la liste espece
        }
        return $this->render('espece/form-espece.html.twig', [
            'espece' => $espece,
            'eform' => $form->createView(),
        ]);
    }

    #[Route('/supprespece/{id}', name: 'suppr_espece')]
    public function supprEspece(Espece $espece, Request $req, EntityManagerInterface $em, $id): Response
    {
        $em->remove($espece);
        $em->flush();
        return $this->redirectToRoute('app_especes');
    }

    #[Route('/espece/{id}', name: 'app_espece_animaux')]
    public function animauxespece(EspeceRepository $er, AnimalRepository $ar, $id): Response
    {
        // Récupérez le espece par son ID depuis la base de données
        $espece = $er->find($id);
        $animaux = $ar->findBy(['espece' => $espece]);
        // Récupérez l'ID du Espece précédent
        $previousId = $id - 1;
        $previousEspece = $er->find($previousId);

        // Récupérez l'ID du Espece suivant
        $nextId = $id + 1;
        $nextEspece = $er->find($nextId);

        return $this->render('espece/detail-espece.html.twig', [
            'animaux' => $animaux,
            'espece' => $espece,
            'previousEspece' => $previousEspece,
            'nextEspece' => $nextEspece,
        ]);
    }
}
