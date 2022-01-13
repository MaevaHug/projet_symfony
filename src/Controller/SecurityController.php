<?php

namespace App\Controller;

use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $hashedPassword = $passwordHasher->hashPassword(
                $user,
                $user->getPassword()
            );
            $user->setPassword($hashedPassword);
            $manager->persist($user);
            $manager->flush();
            $this->addFlash('success', 'Vous êtes bien inscrit, veuillez vous connecter');

            return $this->redirectToRoute('security_login');
        }
        return $this->render('public/home.html.twig', [
            'displayRegistration' => true,
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/connexion", name="security_login")
     */
    public function login(AuthenticationUtils $util): Response
    {
        return $this->render('public/home.html.twig', [
            'displayLogin' => true,
            'last_username' => $util->getLastUsername(),
            'error' => $util->getLastAuthenticationError()
        ]);
    }

    /**
     * @Route("/mon-compte", name="security_login_valid")
     */
    public function validLogin()
    {
        $this->addFlash('success', 'Vous êtes bien connecté');
        return $this->render('public/home.html.twig');
    }

    /**
     * @Route("/déconnexion", name="security_logout")
     */
    public function logout()
    {
    }

}
