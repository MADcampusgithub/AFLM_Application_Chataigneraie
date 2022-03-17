<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

class ProfessionnelsController extends AbstractController
{
    /**
     * @Route("/professionnels", name="app_professionnels")
     */
    public function Professionnels(Request $request): Response
    {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $client = HttpClient::create();
        $response = $client->request('GET', "http://10.3.249.223:8001/api/personnes", ['headers' => 
        ['Accept' => 'application/json']]);

        $personnes = $response->toArray(); 
        
        if ($login == "" && $mdp == "") {
            return new Response("vous devez vous enregister avant d'accéder au données");
        }

        return $this->render('professionnels.html.twig', ['login' => $request->getSession()->get('login'), 'personnes' => $personnes]);
    }
}