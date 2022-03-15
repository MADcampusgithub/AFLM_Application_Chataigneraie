<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConnectionController extends AbstractController
{
    /**
     * @Route("/connection")
     */
    public function Connection() : Response
    {
        return $this->render('connection.html.twig');
    }

    /**
     * @Route("/connection", name="app_connection", methods={"POST"})
     */
    public function PostConnection(Request $request) : Response {
        $test = $request->request->all();
        
        return $this->render('entreprises.html.twig');
    }
    
}
