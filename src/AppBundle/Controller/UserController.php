<?php


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class UserController
{

    /**
     * @Route("/users/")
     * @Route("/users/{userName}")
     */
    public function showUsers($userName = false)
    {
        if(empty($userName)) {
            return new Response("Hi guys! It's a main user page!");
        } else {
            return new Response("Hi guys! I'm ".$userName." !");
        }
    }
}