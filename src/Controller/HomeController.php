<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home/{nom}/{age}', name: 'home')]
    public function index( string $nom ,int $age  ): Response

    {
        return $this->render('home/index.html.twig', [
            'nom' => $nom,
            'age' => $age,

        ]);
    }
}
