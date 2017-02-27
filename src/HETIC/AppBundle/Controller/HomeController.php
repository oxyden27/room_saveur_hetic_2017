<?php

namespace HETIC\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        // $products = $em->getRepository('HETICCoreBundle:Products')->findProductsofTheDay();

        return $this->render('HETICAppBundle:Home:index.html.twig');
    }
}
