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
        $id = $request->query->get('id');
        $droit = $request->getSession()->get('admin');
        $client = HttpClient::create();
        
        if ($login == "" || $mdp == "" || $request->getSession()->get('api') == "") {
            return $this->redirect("/connexion");
        }

        $response = $client->request('GET', $request->getSession()->get('api') . "/api/utilisateurs", 
            ['headers' => ['Accept' => 'application/json']]);
        $utilisateurs = $response->toArray(); 
        array_multisort(array_column($utilisateurs, 'utiLogin'), SORT_ASC, $utilisateurs);

        if (isset($id)) {
            $response = $client->request(
                'GET', 
                $request->getSession()->get('api') . "/api/utilisateurs/".$id, ['headers' => ['Accept' => 'application/json']]
            );
            $utilisateur = $response->toArray();
            array_multisort(array_column($utilisateurs, 'utiLogin'), SORT_ASC, $utilisateurs);
            return $this->render('utilisateurs.html.twig', ['login' => $request->getSession()->get('login'), 'utilisateurs' => $utilisateurs, 'utilisateur' => $utilisateur, 'droit' => $droit]);
        }
        else{
            return $this->render('utilisateurs.html.twig', ['login' => $request->getSession()->get('login'), 'utilisateurs' => $utilisateurs,'droit' => $droit,  'utilisateur' => [
                'id' => 0,
                'utiLogin' => '',
            ]]);
        }
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

        // Création et envoie de la requete de suppression d'un utilisateur
        $client->request('DELETE', $request->getSession()->get('api') . "/api/utilisateurs/" . $id, [
                'headers' => ['Accept' => 'application/json'],]);

        return $this->redirect("/utilisateurs");
    }

    /**
     * @Route("/utilisateursappend", name="add_utilisateurs")
     */
    public function AddUtilisateurs(Request $request) : Response {
        $login = $request->getSession()->get('login');
        $mdp = $request->getSession()->get('mdp');
        $client = HttpClient::create();

        if ($login == "" || $mdp == "" || $request->getSession()->get('api') == "") {
            return $this->redirect("/connexion");
        }

        $client->request(
            'POST', 
            $request->getSession()->get('api') . "/api/utilisateurs", [
                'headers' => ['Accept' => 'application/json'],
                'json' => $this->CreateUtilisateur(
                    $request->get("utiLogin"), 
                    $request->get("utiMdp"),
                    $request->get("utiDroit"),
                )
            ]
        );
        return $this->redirect("/utilisateurs");
    }

     // Retourne un tableau associatif a envoyer a l'API
     private function CreateUtilisateur($utiLogin, $utiMdp, $utiDroit) {
        $utiMdp = hash('sha256', $utiMdp);
        return array(
            'utiLogin' => $utiLogin,
            'utiDroit' => $utiDroit == "0" ? false : true, 
            'utiMdp' => $utiMdp,
        );
    }
}
