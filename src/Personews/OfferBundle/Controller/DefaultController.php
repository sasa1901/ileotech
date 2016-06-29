<?php

namespace Personews\OfferBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OfferBundle:offer:Offer.html.twig');
    }
}
