<?php

namespace ruslanchyk\CatBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CatController extends AbstractController
{
    #[Route('/mayu', name: 'myau')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('@Cat/number.html.twig', [
            'number' => $number,
        ]);
    }
}