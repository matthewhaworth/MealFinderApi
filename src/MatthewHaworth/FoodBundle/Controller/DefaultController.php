<?php

namespace MatthewHaworth\FoodBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MatthewHaworthFoodBundle:Default:index.html.twig', array('name' => $name));
    }
}
