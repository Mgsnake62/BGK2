<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookingFrontController extends AbstractController
{
    /**
     * @Route("admin/booking", name="pagebooking")
     */
    public function index(): Response
    {
        return $this->render('bookingfront/index.html.twig', [
            'controller_name' => 'BookingController',
        ]);
    }
}
