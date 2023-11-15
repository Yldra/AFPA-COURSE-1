<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use App\Repository\MovieRepository ;
use App\Entity\Actor;
use App\Entity\Movie ;
use App\Form\MovieType ;

use Symfony\Component\HttpFoundation\Request; 
use Doctrine\ORM\EntityManagerInterface;


class MovieController extends AbstractController
{
   /**
     * @Route("/modifmovie/{id}", name="modifmovie")
     * @Route("/creationmovie", name="creationmovie")
     */
    public function modifierMovie(Movie $movie=null, Request $request, EntityManagerInterface $em ) {

        if (!$movie ) {
            $movie = new Movie();
        }
        
        $form = $this->createForm(MovieType::class,$movie);

        $form->handleRequest($request);
        if ($form->isSubmitted() ) {
            $em->persist($movie);
            $em->flush();
            return $this->redirectToRoute('/') ;
        }

        return $this->render('movie/modifMovie.html.twig',[
            "movie"=>$movie,
            "form"=>$form->createView()
        ]);
    }

}
