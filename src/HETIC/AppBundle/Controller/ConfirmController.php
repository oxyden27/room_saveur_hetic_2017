<?php

namespace HETIC\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConfirmController extends Controller
{
    public function indexAction()
    {
        return $this->render('HETICAppBundle:Confirm:confirm.html.twig');
    }
}
