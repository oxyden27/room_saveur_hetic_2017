<?php

namespace HETIC\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConfirmRelaisController extends Controller
{
    public function indexAction()
    {
        return $this->render('HETICAppBundle:Confirmrelais:confirmrelais.html.twig');
    }
}
