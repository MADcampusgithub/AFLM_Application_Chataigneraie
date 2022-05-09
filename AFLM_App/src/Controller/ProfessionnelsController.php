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
        $id = $request->query->get('id');
        $droit = $request->getSession()->get('admin');
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

        $response = $client->request('GET', $request->getSession()->get('api') . "/api/profils", ['headers' => 
        ['Accept' => 'application/json']]);
        $profils = $response->toArray();
        array_multisort(array_column($profils, 'proLabel'), SORT_ASC, $profils);

        $response = $client->request('GET', $request->getSession()->get('api') . "/api/personne_profils", ['headers' => 
        ['Accept' => 'application/json']]);
        $personnes_profils = $response->toArray();

        $response = $client->request('GET', $request->getSession()->get('api') . "/api/entreprises", ['headers' => 
        ['Accept' => 'application/json']]);
        $entreprises = $response->toArray();

        for ($i = 0; $i < count($personnes); $i++) {
            $personnes[$i]["perFonction"] = $this->GetData($fonctions, "fonLabel", $personnes[$i]["perFonction"]);
        }

        for ($j = 0; $j < count($personnes); $j++) {
            $personnes[$j]["perEntreprise"] = $this->GetData($entreprises, "entRs", $personnes[$j]["perEntreprise"]);
        }

        for ($j = 0; $j < count($personnes_profils); $j++) {
            $personnes_profils[$j]["Profil"] = $this->GetData($profils, "proLabel", $personnes_profils[$j]["Profil"]);
        }

        for ($j = 0; $j < count($personnes_profils); $j++) {
            $personnes_profils[$j]["Personne"] = $this->GetData($personnes, "id", $personnes_profils[$j]["Personne"]);
        }

        array_multisort(array_column($personnes_profils, 'Annee'), SORT_DESC, $personnes_profils);

        $allPersonnes = $personnes;
        $fnom = $request->get("filtreNom") !== null ? $request->get("filtreNom") : "";
        $fprenom = $request->get("filtrePrenom") !== null ? $request->get("filtrePrenom") : "";
        $fent = $request->get("filtreEnt") !== null ? $request->get("filtreEnt") : "";
        $personnes = $this->FiltrePersonnes($personnes, $fnom, $fprenom, $fent);

        if (isset($id)) {
            $response = $client->request(
                'GET', 
                $request->getSession()->get('api') . "/api/personnes/".$id, ['headers' => ['Accept' => 'application/json']]
            );
            $personne = $response->toArray();

            return $this->render('professionnels.html.twig', [
                'login' => $login, 
                'droit' => $droit,
                'personnes_profils' => $personnes_profils,
                'profils' => $profils,
                'personnes' => $personnes, 
                'personne' => $personne,
                'allPersonnes' => $allPersonnes, 
                'fonctions' => $fonctions, 
                'entreprises' => $entreprises,
                'filtreNom' => $fnom,
                'filtrePrenom' => $fprenom,
                'filtreEnt' => $fent
            ]);
        }
        else{
            return $this->render('professionnels.html.twig', [
                'login' => $login, 
                'droit' => $droit,
                'personnes_profils' => $personnes_profils,
                'profils' => $profils,
                'personnes' => $personnes, 
                'allPersonnes' => $allPersonnes, 
                'fonctions' => $fonctions, 
                'entreprises' => $entreprises,
                'filtreNom' => $fnom,
                'filtrePrenom' => $fprenom,
                'filtreEnt' => $fent,
                'personne' => [
                    'id' => 0,
                    'perNom' => '',
                    'perPrenom' => '',
                ]
            ]);
        }
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

    /**
     * @Route("/personnes/profilappend/{id}", requirements = {"parametre"="\d+"}, name="add_profilpersonne")
     */
    public function AddProfilPersonne(Request $request, $id) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $client = HttpClient::create();

        if ($login == "" || $mdp == "" || $request->getSession()->get('api') == "") {
            return $this->redirect("/connexion");
        }

        if ($request->get("profil") != 0) {
            $client->request('POST', $request->getSession()->get('api') . "/api/personne_profils", [
                'headers' => ['Accept' => 'application/json'],
                'json' => $this->CreateProfilPersonne(
                    $id,
                    $request->get("profil"),
                    $request->get("proAnnee"))
            ]);
        }
        
        return $this->redirect("/professionnels");
    }

    /**
     * @Route("/personnes/profildelete/{id}", requirements = {"parametre"="\d+"}, name="delete_profilpersonne")
     */
    public function DeleteProfilPersonne(Request $request, $id) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $nomPro = $request->query->get("id");
        $anneePro = $request->query->get("annee");
        $client = HttpClient::create();

        if ($login == "" || $mdp == "" || $request->getSession()->get('api') == "") {
            return $this->redirect("/connexion");
        }

        $response = $client->request('GET', $request->getSession()->get('api') . "/api/profils", ['headers' => 
        ['Accept' => 'application/json']]);
        $profils = $response->toArray();

        $idPro = Linq::First($profils, function($x) use (&$nomPro) { return $nomPro == $x["proLabel"]; })["id"];

        if (isset($idPro))
        {
            $client->request('DELETE', $request->getSession()->get('api') . "/api/personne_profils/Annee=" . $anneePro . ";Personne=" . $id . ";Profil=" . $idPro, [
                'headers' => ['Accept' => 'application/json']
            ]);
        }
        
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

    private function CreateProfilPersonne($personne, $profil, $annee) {
        return array(
            'Annee' => $annee,
            'Personne' => $personne != 0 ? '/api/personnes/' . $personne : null,
            'Profil' => $profil != 0 ? '/api/profils/' . $profil : null,
        );
    }
}