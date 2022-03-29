<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

class EntreprisesController extends AbstractController
{
    public $villes;
    public $pays;
    public $specialites;

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
     * @Route("/entreprises", requirements = {"parametre"="\d+"}, name="app_entreprises", methods={"GET"})
     */
    public function Entreprises(Request $request) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $id = $request->query->get('id');
        $client = HttpClient::create();

        if ($login == "" && $mdp == "") {
            return new Response("vous devez vous enregister avant d'accéder au données");
        }

        $response = $client->request('GET', "http://10.3.249.223:8001/api/entreprises", ['headers' => ['Accept' => 'application/json']]);
        $entreprises = $response->toArray();

        $response = $client->request('GET', "http://10.3.249.223:8001/api/villes", ['headers' => 
            ['Accept' => 'application/json']]);
        $this->villes = $response->toArray();

        $response = $client->request('GET', "http://10.3.249.223:8001/api/pays", ['headers' => 
            ['Accept' => 'application/json']]);
        $this->pays = $response->toArray();

        $response = $client->request('GET', "http://10.3.249.223:8001/api/specialites", ['headers' => 
            ['Accept' => 'application/json']]);
        $this->specialites = $response->toArray();

        for ($i = 0; $i < count($entreprises); $i++) {
            $entreprises[$i]['entPays'] = $this->GetData($this->pays, "payLibelle", $entreprises[$i]['entPays']);
            $entreprises[$i]['entVille'] = $this->GetData($this->villes, "vilNom", $entreprises[$i]['entVille']);

            for($j = 0; $j < count($entreprises[$i]['entSpecialite']); $j++) {
                $entreprises[$i]['entSpecialite'][$j] = $this->GetData($this->specialites, "speLabel", $entreprises[$i]['entSpecialite'][$j]);
            }

        }

        if (isset($id)) {
            $response = $client->request('GET', "http://10.3.249.223:8001/api/entreprises/".$id, ['headers' => ['Accept' => 'application/json']]);
            $entreprise = $response->toArray();

            $entreprise['entPays'] = $this->GetData($this->pays, "payLibelle", $entreprise['entPays']);
            $entreprise['entVille'] = $this->GetData($this->villes, "vilNom", $entreprise['entVille']);
            for($j = 0; $j < count($entreprise['entSpecialite']); $j++) {
                $entreprise['entSpecialite'][$j] = $this->GetData($this->specialites, "speLabel", $entreprise['entSpecialite'][$j]);
            }
            return $this->render('entreprises.html.twig', ['login' => $login, 'entreprises' => $entreprises, 'entreprise' => $entreprise, 'specialites' => $this->specialites, 'pays' => $this->pays, 'villes' => $this->villes]);
        } else {
            return $this->render('entreprises.html.twig', ['login' => $login, 'entreprises' => $entreprises]);
        }
    }
    /**
     * @Route("/entreprisesdelete/{id}", requirements = {"parametre"="\d+"}, name="suppr_entreprises")
     */
    public function SupprEntreprises(Request $request, int $id) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $client = HttpClient::create();

        if ($login == "" && $mdp == "") {
            return new Response("vous devez vous enregister avant d'accéder au données");
        }

        $client->request(
            'DELETE', 
            "http://10.3.249.223:8001/api/entreprises/" . $id, [
                'headers' => ['Accept' => 'application/json']
            ]);

        return $this->redirect("/entreprises");
    }

    /**
     * @Route("/entreprisesupdate/{id}", requirements = {"parametre"="\d+"}, name="edit_entreprises")
     */
    public function EditEntreprises(Request $request, int $id) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $client = HttpClient::create();

        if ($login == "" && $mdp == "") {
            return $this->redirect("/connexion");
        }

        $spes = array();
        foreach($request->get("entSpes") as $spe) {
            $spes[] = ("/api/specialites/" . $spe);
        }

        $client->request(
            'PUT', 
            "http://10.3.249.223:8001/api/entreprises/" . $id, [
                'headers' => ['Accept' => 'application/json'],
                'json' => [
                    'entRS' => $request->get("entRS"),
                    'entAdresse1' => $request->get("entAdr1"),
                    'entAdresse2' => $request->get("entAdr2"),
                    'entAdresse3' => $request->get("entAdr3"),
                    'entCP' => $request->get("entCP"),
                    'entSpecialite' => $spes,
                    'entVille' => '/api/villes/' . $request->get("entVille"),
                    'entPays' => '/api/pays/' . $request->get("entPays")
                ]
            ]);

        return $this->redirect("/entreprises");
    }
}
