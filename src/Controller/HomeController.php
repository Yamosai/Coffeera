<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class HomeController extends AbstractController 
{
    #[Route('/accueil', name:'accueil')]
    public function accueil(): Response
    {
        return $this->render('base.html.twig');
    }

    #[Route('/name', name:'home', methods: ['GET'])]
    public function home(): Response
    {
        return $this->render('index.html.twig', [
        'name' => 'Yannis'
        ]);
    }
}



?>