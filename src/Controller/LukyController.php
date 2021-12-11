<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LukyController extends AbstractController
{
    #[Route('/luky', name: 'luky')]
    public function index(): Response
    {
        return $this->render('luky/index.html.twig', [
            'x' => 'LukyController',
        ]);
    }

    #[Route('/number/{max}', name:'number')]
    public function number(int $max): Response 
    {  
        $number = random_int(0,$max);

        //return new Response("<h1>Lucky number : {$number} </h1>");
        return $this->render('luky/number.html.twig', [
            'x' => $number,
        ]);

    }
}
