<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;
use App\Services\Linq;

class EntreprisesController extends AbstractController
{
    /**
     * @Route("/entreprises", requirements = {"parametre"="\d+"}, name="app_entreprises", methods={"GET", "POST"})
     */
    public function Entreprises(Request $request) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $droit = $request->getSession()->get('admin');
        $id = $request->query->get('id');
        $client = HttpClient::create();

        if ($login == "" || $mdp == "" || $request->getSession()->get('api') == "") {
            return $this->redirect("/connexion");
        }

        // Récupération des entreprises
        $response = $client->request('GET', $request->getSession()->get('api') . "/api/entreprises", ['headers' => ['Accept' => 'application/json']]);
        $entreprises = $response->toArray();

        // Récupération et tri des villes
        $response = $client->request('GET', $request->getSession()->get('api') . "/api/villes", ['headers' => 
            ['Accept' => 'application/json']]);
        $villes = $response->toArray();
        array_multisort(array_column($villes, 'vilNom'), SORT_ASC, $villes);

        // Récupération et tri des pays
        $response = $client->request('GET', $request->getSession()->get('api') . "/api/pays", ['headers' => 
            ['Accept' => 'application/json']]);
        $pays = $response->toArray();
        array_multisort(array_column($pays, 'payLibelle'), SORT_ASC, $pays);

        // Récupération et tri des spécialites
        $response = $client->request('GET', $request->getSession()->get('api') . "/api/specialites", ['headers' => 
            ['Accept' => 'application/json']]);
        $specialites = $response->toArray();
        array_multisort(array_column($specialites, 'speLabel'), SORT_ASC, $specialites);

        // Modification des données de l'entreprises
        for ($i = 0; $i < count($entreprises); $i++) {
            $entreprises[$i]['entPays'] = $this->GetData($pays, "payLibelle", $entreprises[$i]['entPays']);
            $entreprises[$i]['entVille'] = $this->GetData($villes, "vilNom", $entreprises[$i]['entVille']);

            for($j = 0; $j < count($entreprises[$i]['entSpecialite']); $j++) {
                $entreprises[$i]['entSpecialite'][$j] = $this->GetData($specialites, "speLabel", $entreprises[$i]['entSpecialite'][$j]);
            }
        }

        // Filtrage des entreprises
        $allEntreprises = $entreprises;
        $entreprises = $this->FiltreEntreprises(
            $entreprises, 
            $request->get("filtreRs") != null ? $request->get("filtreRs") : "", 
            Linq::First($villes, function($x) use (&$request) { return $x['id'] == $request->get("filtreVille"); }), 
            Linq::First($pays, function($x) use (&$request) { return $x['id'] == $request->get("filtrePays"); }), 
            Linq::First($specialites, function($x) use (&$request) { return $x['id'] == $request->get("filtreSpes"); }),
        );

        // Rendu des informations
        if (isset($id)) {
            $response = $client->request(
                'GET', 
                $request->getSession()->get('api') . "/api/entreprises/".$id, ['headers' => ['Accept' => 'application/json']]
            );
            $entreprise = $response->toArray();

            $entreprise['entPays'] = $this->GetData($pays, "payLibelle", $entreprise['entPays']);
            $entreprise['entVille'] = $this->GetData($villes, "vilNom", $entreprise['entVille']);

            for($j = 0; $j < count($entreprise['entSpecialite']); $j++) {
                $entreprise['entSpecialite'][$j] = $this->GetData($specialites, "speLabel", $entreprise['entSpecialite'][$j]);
            }

            return $this->render('entreprises.html.twig', [
                'login' => $login, 
                'droit' => $droit, 
                'entreprises' => $entreprises, 
                'allEntreprises' => $allEntreprises, 
                'entreprise' => $entreprise, 
                'specialites' => $specialites, 
                'pays' => $pays, 
                'villes' => $villes]);
        } 
        else {
            return $this->render('entreprises.html.twig', [
                'login' => $login, 
                'droit' => $droit, 
                'entreprises' => $entreprises, 
                'allEntreprises' => $allEntreprises, 
                'specialites' => $specialites, 
                'pays' => $pays, 
                'villes' => $villes, 
                'entreprise' => [
                    'id' => 0,
                    'entRs' => '',
                    'entAdresse1' => '',
                    'entAdresse2' => '',
                    'entAdresse3' => '',
                    'entCP' => '',
                    'entSpecialite' => [0,],
                    'entVille' => 0,
                    'entPays' => 0,
                ]
            ]);
        }
    }

    /**
     * @Route("/entreprisesappend", name="add_entreprises")
     */
    public function AddEntreprises(Request $request) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $client = HttpClient::create();

        if ($login == "" || $mdp == "" || $request->getSession()->get('api') == "") {
            return $this->redirect("/connexion");
        }

        $client->request(
            'POST', 
            $request->getSession()->get('api') . "/api/entreprises", [
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
     * @Route("/entreprisesupdate/{id}", requirements = {"parametre"="\d+"}, name="edit_entreprises")
     */
    public function EditEntreprises(Request $request, int $id) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $client = HttpClient::create();

        if ($login == "" || $mdp == "" || $request->getSession()->get('api') == "") {
            return $this->redirect("/connexion");
        }

        // Création et envoie de la requete http de modification à l'API
        $client->request(
            'PUT', 
            $request->getSession()->get('api') . "/api/entreprises/" . $id, [
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

        if ($login == "" || $mdp == "" || $request->getSession()->get('api') == "") {
            return $this->redirect("/connexion");
        }

        // Création et envoie de la requete de suppression d'une entreprise
        $client->request(
            'DELETE', 
            $request->getSession()->get('api') . "/api/entreprises/" . $id, [
                'headers' => ['Accept' => 'application/json'],
            ]);

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

    // Retourne un ensemble d'entreprises filtré
    private function FiltreEntreprises(array $entreprises, string $rs, array $ville, array $pays, array $spe) {
        $ents = $entreprises;
        if ($rs != "") {
            $ents = Linq::Where($ents, function($x) use (&$rs) {
                return str_contains($x['entRs'], $rs);
            });
        }

        if ($ville != "") {
            $ents = Linq::Where($ents, function($x) use (&$ville) {
                return str_contains($x["entVille"], isset($ville['vilNom']) ? $ville['vilNom'] : "");
            });
        }
        
        if ($pays != "") {
            $ents = Linq::Where($ents, function($x) use (&$pays) {
                return str_contains($x["entPays"], isset($pays['payLibelle']) ? $pays['payLibelle'] : "");
            });
        }
        
        if ($spe != "") {
            $ents = Linq::Where($ents, function($x) use (&$spe) {
                if (count($x['entSpecialite']) == 0) { return true; }

                return Linq::Contains($x['entSpecialite'], function(&$y) use (&$spe) {
                    return str_contains($y, isset($spe['speLabel']) ? $spe['speLabel'] : "");
                });
            });
        }
        
        return $ents;
    }

    // Retourne un tableau associatif a envoyer a l'API
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
