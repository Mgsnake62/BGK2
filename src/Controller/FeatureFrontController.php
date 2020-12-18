<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FeatureFrontController extends AbstractController
{
    /**
     * @Route("/feature", name="pagefeature")
     */
    public function index(): Response
    {
        return $this->render('featurefront/index.html.twig', [
            'controller_name' => 'FeatureController',
        ]);
    }
}
