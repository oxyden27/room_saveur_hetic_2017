<?php

namespace HETIC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductsController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('HETICCoreBundle:Products')->findAll();

        return $this->render('HETICCoreBundle:Products:index.html.twig', array('products' => $products));
    }
}
