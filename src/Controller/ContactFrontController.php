<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactFrontController extends AbstractController
{
    /**
     * @Route("admin/contact", name="pagecontact")
     */
    public function index(): Response
    {
        return $this->render('contactfront/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}
