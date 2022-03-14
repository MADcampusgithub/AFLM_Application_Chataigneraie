<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Form\AnnonceType;
use App\Entity\Annonce;
use App\Repository\AnnonceRepository;
use Doctrine\ORM\Mapping\Id;

class TestController extends AbstractController{
    /**
     * @Route("test", name="Test")
     */

    function renduTest()
    {
        return $this->render('test.html.twig');
    }

}
