<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    #[Route('/')]
    public function homepage() : Response
    {
        return new Response('This is a HomePage');
    }

    #[Route('/profile/{username}')]
    public function profile($username) : Response
    {
        return new Response('This is a ' . $username);
    }

}