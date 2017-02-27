<?php

namespace HETIC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AnalyticsController extends Controller
{
    public function indexAction()
    {
        return $this->render('HETICCoreBundle:Analytics:index.html.twig');
    }
}
