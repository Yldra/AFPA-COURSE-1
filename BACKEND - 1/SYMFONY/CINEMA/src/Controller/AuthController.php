<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\InscriptionType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AuthController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function index(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $encoder)
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(InscriptionType::class,$utilisateur);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $passwordCrypte = $encoder->hashPassword($utilisateur,$utilisateur->getPassword());
            $utilisateur->setPassword($passwordCrypte);
            $utilisateur->setRoles("ROLE_USER");
            $em->persist($utilisateur);
            $em->flush();
            return $this->redirectToRoute("actor");
        }

        return $this->render('auth/index.html.twig',[
            "form" => $form->createView()
        ]);
    }

    /**
     * @Route("/login", name="connexion")
     */
    public function login(AuthenticationUtils $util) {
        return $this->render("auth/login.html.twig",[
            "lastUserName" => $util->getLastUsername(),
            "error" => $util->getLastAuthenticationError()
        ]);

        //----
        // l'action du form rappelle la route /connexion et grâce au 
        // composant securité la verif est automatique
        // attention !!! dans le formulaire twig bien déclarer les name ainsi -> _username _password.
        // et dans security.yaml
        // in_database
        // ...etc...
        // property: champ unique sur lequel on va faire le lien. 
        // login path et check path. (nom de la route)
        //----

    }

    /**
     * @Route("/deconnexion", name="deconnexion")
     */
    public function deconnexion(){

    }
}
