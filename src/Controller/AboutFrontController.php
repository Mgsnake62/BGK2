<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutFrontController extends AbstractController
{
    /**
     * @Route("about", name="pageabout")
     */
    public function index(): Response
    {
        return $this->render('aboutfront/index.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }
}
