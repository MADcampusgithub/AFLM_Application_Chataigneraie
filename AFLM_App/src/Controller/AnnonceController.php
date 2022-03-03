<?php

namespace App\Controller;

use 
Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use
Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use 
Symfony\Component\HttpFoundation\Request;
use App\Form\AnnonceType;
use App\Entity\Annonce;
use App\Repository\AnnonceRepository;
use Doctrine\ORM\Mapping\Id;

class AnnonceController extends AbstractController{
    /**
     * @Route("listeAnnonces", name="listeAnnonces")
     */

    function listeAnnonces()
    {
        return $this->render('test.html.twig');
    }

}
