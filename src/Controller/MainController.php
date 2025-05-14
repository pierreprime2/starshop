<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Repository\StarshipRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Starship;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage(StarshipRepository $repository, Request $request): Response
    {
        $ships = $repository->findIncomplete();
        $ships->setMaxPerPage(5);
        $ships->setCurrentPage($request->query->get('page', 1));
        $myShip = $repository->findMyShip();

        return $this->render('main/homepage.html.twig', [
            'ships' => $ships,
            'myShip' => $myShip
        ]);
    }
}
