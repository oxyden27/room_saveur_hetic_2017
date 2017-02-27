<?php

namespace HETIC\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdresseController extends Controller
{
    public function indexAction()
    {
        return $this->render('HETICAppBundle:Adresse:adresse.html.twig');
    }
}
