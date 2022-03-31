<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

class UtilisateursController extends AbstractController
{
    /**
     * @Route("/utilisateurs", name="app_utilisateurs")
     */
    public function Utilisateurs(Request $request): Response
    {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $client = HttpClient::create();
        
        if ($login == "" && $mdp == "") {
            return new Response("vous devez vous enregister avant d'accéder au données");
        }

        $response = $client->request('GET', "http://10.3.249.223:8001/api/utilisateurs", ['headers' => 
        ['Accept' => 'application/json']]);
        $utilisateurs = $response->toArray(); 
        return $this->render('utilisateurs.html.twig', ['login' => $request->getSession()->get('login'), 'utilisateurs' => $utilisateurs]);
    }

    /**
     * @Route("/utilisateurspost", name="post_utilisateurs", methods={"POST"})
     */
    public function UtilisateursPost(Request $request): Response
    {
        return new Response("data send");
    }

    /**
     * @Route("/utilisateursdelete/{id}", requirements = {"parametre"="\d+"}, name="suppr_utilisateurs")
     */
    public function SupprUtilisateurs(Request $request, int $id) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $client = HttpClient::create();

        if ($login == "" && $mdp == "") {
            return new Response("vous devez vous enregister avant d'accéder au données");
        }

        // Création et envoie de la requete de suppression d'une entreprise
        $client->request(
            'DELETE', 
            "http://10.3.249.223:8001/api/utilisateurs/" . $id, [
                'headers' => ['Accept' => 'application/json'],
            ]);

        return $this->redirect("/utilisateurs");
    }
}
