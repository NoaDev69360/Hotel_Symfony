<?php
// AccueilController.php

namespace App\Controller;

use App\Repository\ClientRepository;
use App\Repository\HotelRepository;
use App\Repository\ChambreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(ClientRepository $clientRepository, HotelRepository $hp, ChambreRepository $chambres): Response
    {
        $clients = $clientRepository->findAll();

        return $this->render('accueil/index.html.twig', [
            'clients' => $clients,
            'hotels' => $hp->findAll(),
            'chambres' => $chambres->findAll()
        ]);
    }
}
