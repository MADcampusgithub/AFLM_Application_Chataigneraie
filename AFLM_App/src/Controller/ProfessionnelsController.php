<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

class ProfessionnelsController extends AbstractController
{
    private function GetData($array, string $arrayName, $data) : string {
        $id = 0;
        if (isset($data)) {
            $test = explode("/", $data);
            $id = intval($test[3]);
        }
        else {
            return "";
        }
        foreach ($array as $val) {
            if ($val['id'] == $id) {
                return $val[$arrayName];
            }
        }
        return "";
    }

    /**
     * @Route("/professionnels", name="app_professionnels")
     */
    public function Professionnels(Request $request): Response
    {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $client = HttpClient::create();
        
        if ($login == "" && $mdp == "") {
            return new Response("vous devez vous enregister avant d'accéder au données");
        }

        $response = $client->request('GET', "http://10.3.249.223:8001/api/personnes", ['headers' => 
        ['Accept' => 'application/json']]);
        $personnes = $response->toArray(); 

        $response = $client->request('GET', "http://10.3.249.223:8001/api/fonctions", ['headers' => 
        ['Accept' => 'application/json']]);
        $this->fonctions = $response->toArray();

        for ($i = 0; $i < count($personnes); $i++) {
        $personnes[$i]["perFonction"] = $this->GetData($this -> fonctions, "fonLabel",  $personnes[$i]["perFonction"]);
        }


        $response = $client->request('GET', "http://10.3.249.223:8001/api/entreprises", ['headers' => 
            ['Accept' => 'application/json']]);
        $this->entreprises = $response->toArray();

        return $this->render('professionnels.html.twig', ['login' => $request->getSession()->get('login'), 'personnes' => $personnes, 'fonctions' => $this->fonctions, 'entreprises' => $this-> entreprises]);
    }

    /**
     * @Route("/personnesdelete/{id}", requirements = {"parametre"="\d+"}, name="suppr_personnes")
     */
    public function SupprPersonnes(Request $request, int $id) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $client = HttpClient::create();

        if ($login == "" && $mdp == "") {
            return new Response("vous devez vous enregister avant d'accéder au données");
        }

        $client->request(
            'DELETE', 
            "http://10.3.249.223:8001/api/personnes/" . $id, [
                'headers' => ['Accept' => 'application/json']
            ]);

        return $this->redirect("/professionnels");
    }


    /**
     * @Route("/personnesupdate/{id}", requirements = {"parametre"="\d+"}, name="edit_personnes")
     */
    public function EditPersonnes(Request $request, int $id) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $client = HttpClient::create();

        if ($login == "" && $mdp == "") {
            return $this->redirect("/connexion");
        }

        $client->request(
            'PUT', 
            "http://10.3.249.223:8001/api/personnes/" . $id, [
                'headers' => ['Accept' => 'application/json'],
                'json' => [
                    'perNom' => $request->get("perNom"),
                    'perPrenom' => $request->get("perPrenom"),
                    'perMail' => $request->get("perMail"),
                    'perNum' => $request->get("perNum"),
                    'perAnnee' => $request->get("perAnnee"),
                    'perFonction' => '/api/fonctions/' . $request->get("perFonction"),
                    'perEntreprise' => '/api/entreprises/' . $request->get("perEntreprise")
                ]
            ]);

        return $this->redirect("/professionnels");
    }
}