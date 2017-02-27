<?php

namespace HETIC\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HETIC\CoreBundle\Entity\Products;

class CronController extends Controller
{
    public function changeProductofTheDayAction()
    {
        $em = $this->getDoctrine()->getManager();
        $date = new \Datetime();

        $products = $em->getRepository('HETICCoreBundle:Products')->findProductsofYesterday();

        foreach ($products as $product) {
            $product->setStatus(Products::STATUS_CHOOSEN);
            $em->persist($product);
            $em->flush();
        }

        $productsOfTheDay = $em->getRepository('HETICCoreBundle:Products')->findProductsofTheDay($date);

        foreach ($productsOfTheDay as $product) {
            $product->setStatus(Products::STATUS_ACTIVE);
            $em->persist($product);
            $em->flush();
        }

    }
}
