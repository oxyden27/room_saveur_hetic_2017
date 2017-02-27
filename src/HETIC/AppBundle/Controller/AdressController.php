<?php

namespace HETIC\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdressController extends Controller
{
    public function indexAction()
    {
        return $this->render('HETICAppBundle:Adress:index.html.twig');
    }
}
