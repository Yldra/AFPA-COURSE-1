<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InscriptionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/inscription', name: 'app_inscription')]
    public function index(Request $request, UserPasswordHasherInterface $uphi, EntityManagerInterface $em): Response
    {
        $user = new User();
        $form = $this->createForm(InscriptionType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $pclair = $user->getPassword();
            $hp = $uphi->hashPassword($user, $pclair);
            $user->setPassword($hp);

            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute("app_login");
        }

        return $this->render('user/form-user.html.twig', [
            "uform" => $form->createView(),
        ]);
    }

    #[Route('/profil', name: 'profil')]
    public function accueil(): Response
    {
        return $this->render('user/profil.html.twig', [
            "route_name" => "profil",
        ]);
    }
}
