<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyauController extends AbstractController
{
    #[Route('/myau', name: 'app_myau')]
    public function index(): Response
    {
        return $this->render('myau/index.html.twig', [
            'controller_name' => 'MyauController',
        ]);
    }
}
