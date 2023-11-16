<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ConnexionType;
use App\Form\InscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    // #[Route('/inscription', name: 'app_inscription')]
    // public function signup(): Response
    // {

    //     $User = new User();
    //     $form = $this->createForm(InscriptionType::class, $User);
    //     return $this->render('home/inscription.html.twig', [
    //         'controller_name' => 'HomeController',
    //         'form' => $form,
    //     ]);
    // }

    // #[Route('/Connexion', name: 'app_connexion')]
    // public function login(): Response
    // {
    //     $User =  new User();
    //     $form = $this->createForm(ConnexionType::class, $User);
    //     return $this->render('home/connexion.html.twig', [
    //         'controller_name' => 'HomeController',
    //         'form' => $form
    //     ]);
    // }
}
