<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\ActorRepository ;
use App\Entity\Actor ;
use App\Form\ActorType ;

use Symfony\Component\HttpFoundation\Request; 
use Doctrine\ORM\EntityManagerInterface;

class ActorController extends AbstractController
{
    /**
     * @Route("/actor", name="actor")
     */
    public function index(ActorRepository $ar): Response
    {
        $actors = $ar->findAll() ; 
        return $this->render('actor/index.html.twig', [
            'actors' => $actors
        ]);
    }

     /**
     * @Route("/afficheactor/{id}", name="afficheactor")
     */
   // public function afficherUnActeur(ActorRepository $ar,$id): Response
   public function afficherUnActeur(Actor $actor): Response
    {
        
      //  $actor = $ar->find($id); 
        return $this->render('actor/afficherUn.html.twig',["actor"=>$actor]);
    }

    /**
     * @Route("/modifactor/{id}", name="modifactor")
     * @Route("/creationactor", name="creationactor")
     */
    public function modifierActor(Actor $actor=null, Request $request, EntityManagerInterface $em ) {

        if (!$actor ) {
            $actor = new Actor();
        }
        
        $form = $this->createForm(ActorType::class,$actor);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ) {
            $em->persist($actor) ;
            $em->flush();
            return $this->redirectToRoute('actor') ;
        }
       
        return $this->render('actor/modifActor.html.twig',[
            "actor"=>$actor,
            "form"=>$form->createView()
        ]);
    }








}
