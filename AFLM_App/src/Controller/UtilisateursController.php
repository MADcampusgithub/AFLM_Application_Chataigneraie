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
        $droit = $request->getSession()->get('admin');
        $client = HttpClient::create();
        
        if ($login == "" || $mdp == "" || $request->getSession()->get('api') == "") {
            return $this->redirect("/connexion");
        }

        $response = $client->request(
            'GET', 
            $request->getSession()->get('api') . "/api/utilisateurs", 
            ['headers' => ['Accept' => 'application/json']]
        );
        $utilisateurs = $response->toArray(); 
        return $this->render('utilisateurs.html.twig', [
            'login' => $request->getSession()->get('login'), 
            'droit' => $request->getSession()->get('droit'),
            'utilisateurs' => $utilisateurs
        ]);
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

        if ($login == "" || $mdp == "" || $request->getSession()->get('api') == "") {
            return $this->redirect("/connexion");
        }

        // Création et envoie de la requete de suppression d'une entreprise
        $client->request(
            'DELETE', 
            $request->getSession()->get('api') . "/api/utilisateurs/" . $id, [
                'headers' => ['Accept' => 'application/json'],
            ]);

        return $this->redirect("/utilisateurs");
    }
}
