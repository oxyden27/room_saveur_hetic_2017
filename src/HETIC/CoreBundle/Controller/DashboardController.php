<?php

namespace HETIC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('HETICCoreBundle:Dashboard:index.html.twig');
    }
}
