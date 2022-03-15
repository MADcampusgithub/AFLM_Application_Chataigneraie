<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;

class ConnectionController extends AbstractController
{
    /**
     * @Route("/connection", name="app_connection")
     */
    public function Connection() : Response
    {
        return $this->render('connection.html.twig');
    }

    /**
     * @Route(name="post_connection", methods={"POST"})
     */
    public function PostConnection(Request $request) : Response {
        $data = $request->request->all();

        $session = new Session();
        $session->start();
        $session->set('login', $data['conn_login']);

        return $this->redirect("/entreprises");
    }
    
}
