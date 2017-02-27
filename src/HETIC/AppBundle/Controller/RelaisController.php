<?php

namespace HETIC\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RelaisController extends Controller
{
    public function indexAction()
    {
        return $this->render('HETICAppBundle:Relais:relais.html.twig');
    }
}
