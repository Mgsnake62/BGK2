<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SingleFrontController extends AbstractController
{
    /**
     * @Route("admin/single", name="pagesingle")
     */
    public function index(): Response
    {
        return $this->render('singlefront/index.html.twig', [
            'controller_name' => 'SingleController',
        ]);
    }
}
