<?php

namespace HETIC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommandsController extends Controller
{
    public function indexAction()
    {
        return $this->render('HETICCoreBundle:Commands:index.html.twig');
    }
}
