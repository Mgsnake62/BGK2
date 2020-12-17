<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogFrontController extends AbstractController
{
    /**
     * @Route("admin/blog", name="pageblog")
     */
    public function index(): Response
    {
        return $this->render('blogfront/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
