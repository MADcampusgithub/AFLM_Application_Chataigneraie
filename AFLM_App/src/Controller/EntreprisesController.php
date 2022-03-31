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
        $villes = $response->toArray();

        $response = $client->request('GET', "http://10.3.249.223:8001/api/pays", ['headers' => 
            ['Accept' => 'application/json']]);
        $pays = $response->toArray();

        $response = $client->request('GET', "http://10.3.249.223:8001/api/specialites", ['headers' => 
            ['Accept' => 'application/json']]);
        $specialites = $response->toArray();

        for ($i = 0; $i < count($entreprises); $i++) {
            $entreprises[$i]['entPays'] = $this->GetData($pays, "payLibelle", $entreprises[$i]['entPays']);
            $entreprises[$i]['entVille'] = $this->GetData($villes, "vilNom", $entreprises[$i]['entVille']);

            for($j = 0; $j < count($entreprises[$i]['entSpecialite']); $j++) {
                $entreprises[$i]['entSpecialite'][$j] = $this->GetData($specialites, "speLabel", $entreprises[$i]['entSpecialite'][$j]);
            }

        }

        if (isset($id)) {
            $response = $client->request('GET', "http://10.3.249.223:8001/api/entreprises/".$id, ['headers' => ['Accept' => 'application/json']]);
            $entreprise = $response->toArray();

            $entreprise['entPays'] = $this->GetData($pays, "payLibelle", $entreprise['entPays']);
            $entreprise['entVille'] = $this->GetData($villes, "vilNom", $entreprise['entVille']);

            for($j = 0; $j < count($entreprise['entSpecialite']); $j++) {
                $entreprise['entSpecialite'][$j] = $this->GetData($specialites, "speLabel", $entreprise['entSpecialite'][$j]);
            }

            return $this->render('entreprises.html.twig', ['login' => $login, 'entreprises' => $entreprises, 'entreprise' => $entreprise, 'specialites' => $specialites, 'pays' => $pays, 'villes' => $villes]);
        } 
        else {
            return $this->render('entreprises.html.twig', ['login' => $login, 'entreprises' => $entreprises, 'specialites' => $specialites, 'pays' => $pays, 'villes' => $villes, 'entreprise' => [
                'id' => 0,
                'entRs' => '',
                'entAdresse1' => '',
                'entAdresse2' => '',
                'entAdresse3' => '',
                'entCP' => '',
                'entSpecialite' => [0,],
                'entVille' => 0,
                'entPays' => 0,
            ]]);
        }
    }

    /**
     * @Route("/entreprisesappend", name="add_entreprises")
     */
    public function AddEntreprises(Request $request) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $client = HttpClient::create();

        if ($login == "" && $mdp == "") {
            return new Response("vous devez vous enregister avant d'accéder au données");
        }

        $client->request(
            'POST', 
            "http://10.3.249.223:8001/api/entreprises", [
                'headers' => ['Accept' => 'application/json'],
                'json' => $this->CreateEntreprise(
                    $request->get("entRS"), 
                    $request->get("entAdr1"),
                    $request->get("entAdr2"),
                    $request->get("entAdr3"),
                    $request->get("entCP"),
                    $request->get("entSpes"),
                    $request->get("entVille"),
                    $request->get("entPays")
                )
            ]
        );
        return $this->redirect("/entreprises");
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

        // Création et envoie de la requete de suppression d'une entreprise
        $client->request(
            'DELETE', 
            "http://10.3.249.223:8001/api/entreprises/" . $id, [
                'headers' => ['Accept' => 'application/json'],
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

        // Création et envoie de la requete http de modification à l'API
        $client->request(
            'PUT', 
            "http://10.3.249.223:8001/api/entreprises/" . $id, [
                'headers' => ['Accept' => 'application/json'],
                'json' => $this->CreateEntreprise(
                    $request->get("entRS"), 
                    $request->get("entAdr1"),
                    $request->get("entAdr2"),
                    $request->get("entAdr3"),
                    $request->get("entCP"),
                    $request->get("entSpes"),
                    $request->get("entVille"),
                    $request->get("entPays")
                )
            ]
        );
        
        return $this->redirect("/entreprises");
    }

    // Conversion des données de l'api en un entier (ex : '/api/villes/3' => 3)
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

    private function CreateEntreprise($rs, $adr1, $adr2, $adr3, $cp, $specialites, $ville, $pays) {
        $spes = array();
        if ($specialites !== null and $specialites[0] !== "0") {   
            foreach($specialites as $spe) {
                $spes[] = ("/api/specialites/" . $spe);
            }
        }
        
        return array(
            'entRs' => $rs,
            'entAdresse1' => $adr1,
            'entAdresse2' => $adr2,
            'entAdresse3' => $adr3,
            'entCP' => $cp,
            'entSpecialite' => $spes,
            'entVille' => $ville !== "0" ? '/api/villes/' . $ville : null,
            'entPays' => $pays !== "0" ? '/api/pays/' . $pays : null,
        );
    }
}
