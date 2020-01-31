<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CarController extends AbstractController
{
    /**
    * @Route("/car", name="app_car")
    */
    public function index()
    {
        return $this->render("cars/index.html.twig");
    }
}
