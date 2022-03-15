<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EntreprisesController extends AbstractController
{
    /**
     * @Route("/entreprises", name="app_entreprises")
     */
    public function Entreprises(Request $request) : Response {
        return $this->render('entreprises.html.twig', ['login' => $request->getSession()->get('login')]);
    }
}
