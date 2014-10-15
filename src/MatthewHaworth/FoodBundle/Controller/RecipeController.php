<?php
namespace MatthewHaworth\FoodBundle\Controller;
use FOS\RestBundle\Controller\FOSRestController;


class RecipeController
    extends FOSRestController
{
    public function getRecipeAction($id)
    {
        return array(1, 2 ,3);
    }
}