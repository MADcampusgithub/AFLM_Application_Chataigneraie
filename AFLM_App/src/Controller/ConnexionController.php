<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//$this->getParameter('app.urlAPI');

class ConnexionController extends AbstractController
{
    /**
     * @Route("/connexion", name="app_connexion", methods={"GET"})
     */
    public function Connexion(Request $request) : Response
    {
        $request->getSession()->set('login', "");
        $request->getSession()->set('mdp', "");
        $request->getSession()->set('admin', false);
        $request->getSession()->set('api', "http://localhost:8001");
        //$request->getSession()->set('api', "http://10.3.249.223:8001");
        return $this->render('connexion.html.twig');
    }

    /**
     * @Route("/connexion", name="post_connexion", methods={"POST"})
     */
    public function PostConnexion(Request $request) : Response {
        $client = HttpClient::create();

        $data = $request->request->all();
        $response = $client->request('GET', $request->getSession()->get('api') . "/api/utilisateurs", [
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);

        $utilisateurs = $response->toArray();
        $login = $data['conn_login'];
        $mdp = hash('sha256', $data['conn_mdp']);

        for($i = 0; $i < count($utilisateurs); $i++) {
            if ($utilisateurs[$i]['utiLogin'] == $login && $utilisateurs[$i]['utiMdp'] == $mdp) {
                $request->getSession()->set('login', $login);
                $request->getSession()->set('mdp', $mdp);
                $request->getSession()->set('admin', $utilisateurs[$i]['utiDroit'] == 0 ? false : true);

                return $this->redirect("/entreprises");
            }
        }
   
        return $this->render('connexion.html.twig', ['errormsg' => "Le nom ou le mot de passe est invalide"]);
    }
}
