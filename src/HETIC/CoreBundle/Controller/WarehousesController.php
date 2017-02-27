<?php

namespace HETIC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WarehousesController extends Controller
{
    public function indexAction()
    {
        return $this->render('HETICCoreBundle:Warehouses:index.html.twig');
    }
}
