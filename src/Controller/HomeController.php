<?php

namespace App\Controller;

use App\Repository\MaisonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(MaisonRepository $maisonRepository): Response
    {
        // $houses = $maisonRepository->findAll();
        $houses = $maisonRepository->findBy([], ['id' => 'DESC'], 6);
        // $houses = $maisonRepository->trouverSixDerniers(); // SQL
        // $houses = $maisonRepository->findLastSix(); // query builder
        return $this->render('home/index.html.twig', [  //la function render elle crée une vue
            'maisons' => $houses// tableau maisons avec valeur $houses
        ]);
    }
}
