<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

class EntreprisesController extends AbstractController
{
    /**
     * @Route("/entreprises", name="app_entreprises", methods={"GET"})
     */
    public function Entreprises(Request $request) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');

        $client = HttpClient::create();
        $response = $client->request('GET', "http://10.3.249.223:8001/api/entreprises", ['headers' => 
            ['Accept' => 'application/json']]);
        $entreprises = $response->toArray();

        if ($login == "" && $mdp == "") {
            return new Response("vous devez vous enregister avant d'accéder au données");
        }

        return $this->render('entreprises.html.twig', ['login' => $login, 'entreprises' => $entreprises]);
    }

    /**
     * @Route("/entreprises{id}", requirements = {"parametre"="\d+"}, name="app_entreprises_modal", methods={"GET"})
     */
    public function EntreprisesModal(Request $request, $id) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');

        $client = HttpClient::create();
        $response = $client->request('GET', "http://10.3.249.223:8001/api/entreprises", ['headers' => ['Accept' => 'application/json']]);
        $entreprises = $response->toArray();

        $response = $client->request('GET', "http://10.3.249.223:8001/api/entreprises/".$id, ['headers' => ['Accept' => 'application/json']]);
        $entreprise = $response->toArray();

        

        $response = $client->request('GET', "http://10.3.249.223:8001".$entreprise['entPays'], ['headers' => 
            ['Accept' => 'application/json']]);
        $entreprise['entPays'] = $response->toArray();

        $response = $client->request('GET', "http://10.3.249.223:8001".$entreprise['entVille'], ['headers' => 
            ['Accept' => 'application/json']]);
        $entreprise['entVille'] = $response->toArray();

        if ($login == "" && $mdp == "") {
            return new Response("vous devez vous enregister avant d'accéder au données");
        }

        return $this->render('entreprises.html.twig', ['login' => $login, 'entreprises' => $entreprises, 'entreprise' => $entreprise]);
    } 
}
