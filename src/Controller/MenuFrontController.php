<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuFrontController extends AbstractController
{
    /**
     * @Route("admin/menu", name="pagemenu")
     */
    public function index(): Response
    {
        return $this->render('menufront/index.html.twig', [
            'controller_name' => 'MenuController',
        ]);
    }
}
