<?php
// AccueilController.php

namespace App\Controller;

use App\Repository\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(ClientRepository $clientRepository): Response
    {
        $clients = $clientRepository->findAll();

        return $this->render('accueil/index.html.twig', [
            'clients' => $clients,
        ]);
    }
}
