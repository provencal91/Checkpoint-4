<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CircuitController extends AbstractController
{
    /**
     * @Route("/circuit", name="app_circuit")
     */
    public function index()
    {
        return $this->render("circuits/index.html.twig");
    }

}