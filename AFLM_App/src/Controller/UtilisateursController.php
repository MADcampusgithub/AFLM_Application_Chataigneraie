<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateursController extends AbstractController
{
    /**
     * @Route("/utilisateurs", name="app_utilisateurs")
     */
    public function Utilisateurs(Request $request): Response
    {
        return $this->render('utilisateurs.html.twig', ['login' => $request->getSession()->get('login')]);
    }

    /**
     * @Route("/utilisateurspost", name="post_utilisateurs", methods={"POST"})
     */
    public function UtilisateursPost(Request $request): Response
    {
        return new Response("data send");
    }
}
