<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TicketingController extends AbstractController
{
    /**
     * @Route("/schedule"), name="see_reservation")
     */
    public function index()
    {
        return $this->render("ticketing/index.html.twig");
    }
}