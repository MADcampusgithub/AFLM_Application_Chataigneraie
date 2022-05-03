<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;
use App\Services\Linq;

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
        
        if ($login == "" || $mdp == "" || $request->getSession()->get('api') == "") {
            return $this->redirect("/connexion");
        }

        $response = $client->request('GET', $request->getSession()->get('api') . "/api/personnes", ['headers' => 
        ['Accept' => 'application/json']]);
        $personnes = $response->toArray();
        array_multisort(array_column($personnes, 'perPrenom'), SORT_ASC, $personnes);


        $response = $client->request('GET', $request->getSession()->get('api') . "/api/fonctions", ['headers' => 
        ['Accept' => 'application/json']]);
        $fonctions = $response->toArray();
        array_multisort(array_column($fonctions, 'fonLabel'), SORT_ASC, $fonctions);


        $response = $client->request('GET', $request->getSession()->get('api') . "/api/entreprises", ['headers' => 
        ['Accept' => 'application/json']]);
        $entreprises = $response->toArray();

        for ($i = 0; $i < count($personnes); $i++) {
            $personnes[$i]["perFonction"] = $this->GetData($fonctions, "fonLabel", $personnes[$i]["perFonction"]);
        }

        for ($j = 0; $j < count($personnes); $j++) {
            $personnes[$j]["perEntreprise"] = $this->GetData($entreprises, "entRs", $personnes[$j]["perEntreprise"]);
        }

        $allPersonnes = $personnes;
        $personnes = $this->FiltrePersonnes(
            $personnes,
            $request->get("filtreNom") !== null ? $request->get("filtreNom") : "",
            $request->get("filtrePrenom") !== null ? $request->get("filtrePrenom") : "",    
            $request->get("filtreEnt") !== null ? $request->get("filtreEnt") : "",
        );

        return $this->render('professionnels.html.twig', ['login' => $request->getSession()->get('login'), 'personnes' => $personnes, 'allPersonnes' => $allPersonnes , 'fonctions' => $fonctions, 'entreprises' => $entreprises]);
    }

    /**
     * @Route("/personnesappend", name="add_personnes")
     */
    public function AddPersonnes(Request $request) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $client = HttpClient::create();

        if ($login == "" || $mdp == "" || $request->getSession()->get('api') == "") {
            return $this->redirect("/connexion");
        }

        $response = $client->request('GET', $request->getSession()->get('api') . "/api/entreprises", ['headers' => 
        ['Accept' => 'application/json']]);
        $entreprises = $response->toArray();

        $client->request(
            'POST', 
            $request->getSession()->get('api') . "/api/personnes", [
                'headers' => ['Accept' => 'application/json'],
                'json' => $this->CreatePersonne(
                    $request->get("perNom"), 
                    $request->get("perPrenom"),
                    $request->get("perMail"),
                    $request->get("perNum"),
                    $request->get("perFonction"),
                    Linq::First($entreprises, function($x) use (&$request) { return $request->get("perEntreprise") == $x["entRs"]; }),
                )
            ]
        );
        return $this->redirect("/professionnels");
    }

    /**
     * @Route("/personnesupdate/{id}", requirements = {"parametre"="\d+"}, name="edit_personnes")
     */
    public function EditPersonnes(Request $request, int $id) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $client = HttpClient::create();

        if ($login == "" || $mdp == "" || $request->getSession()->get('api') == "") {
            return $this->redirect("/connexion");
        }

        $response = $client->request('GET', $request->getSession()->get('api') . "/api/entreprises", ['headers' => 
        ['Accept' => 'application/json']]);
        $entreprises = $response->toArray();

        $client->request(
            'PUT', 
            $request->getSession()->get('api') . "/api/personnes/" . $id, [
                'headers' => ['Accept' => 'application/json'],
                'json' => $this->CreatePersonne(
                    $request->get("perNom"), 
                    $request->get("perPrenom"),
                    $request->get("perMail"),
                    $request->get("perNum"),
                    $request->get("perFonction"),
                    Linq::First($entreprises, function($x) use (&$request) { return $request->get("perEntreprise") == $x["entRs"]; }),
                )
            ]
        );

        return $this->redirect("/professionnels");
    }

    /**
     * @Route("/personnesdelete/{id}", requirements = {"parametre"="\d+"}, name="suppr_personnes")
     */
    public function SupprPersonnes(Request $request, int $id) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $client = HttpClient::create();

        if ($login == "" || $mdp == "" || $request->getSession()->get('api') == "") {
            return $this->redirect("/connexion");
        }

        $client->request(
            'DELETE', 
            $request->getSession()->get('api') . "/api/personnes/" . $id, [
                'headers' => ['Accept' => 'application/json']
            ]);

        return $this->redirect("/professionnels");
    }

    // Retourne un ensemble d'entreprises filtré
    private function FiltrePersonnes(array $personnes, string $nom, string $prenom, string $entreprise) {
        $pers = Linq::Where($personnes, function($x) use (&$nom) {
            return str_contains($x['perNom'], $nom);
        });

        $pers = Linq::Where($pers, function($x) use (&$prenom) {
            return str_contains($x['perPrenom'], $prenom);
        });

        $pers = Linq::Where($pers, function($x) use (&$entreprise) {
            return str_contains($x['perEntreprise'], $entreprise);
        });

        return $pers;
    }

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

    private function CreatePersonne($nom, $prenom, $mail, $num, $fonction, $entreprise) {
        return array(
            'perNom' => $nom,
            'perPrenom' => $prenom,
            'perMail' => $mail,
            'perNum' => $num,
            'perFonction' => $fonction != 0 ? '/api/fonctions/' . $fonction : null,
            'perEntreprise' => isset($entreprise["id"]) ? '/api/entreprises/' . $entreprise["id"] : null,
        );
    }
}